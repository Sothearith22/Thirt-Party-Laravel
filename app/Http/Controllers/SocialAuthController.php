<?php

namespace App\Http\Controllers;

use App\Models\User;
use GuzzleHttp\Client as GuzzleClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;
use Throwable;

class SocialAuthController extends Controller
{
    private const PROVIDERS = ['google', 'facebook'];

    public function redirect(string $provider)
    {
        $this->validateProvider($provider);

        $config = config("services.{$provider}");
        if (empty($config['client_id']) || empty($config['client_secret']) || empty($config['redirect'])) {
            return redirect()->route('login')->withErrors([
                'provider' => ucfirst($provider).' login is not configured yet.',
            ]);
        }

        return $this->socialiteDriver($provider)->redirect();
    }

    public function register(Request $request)
    {
        $input = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique(User::class)],
            'password' => ['required', 'string', 'min:6'],
        ]);

        $input['password'] = Hash::make($request->password);

        User::create($input);

        return redirect()->route('login')->with('status', 'Account created. Please sign in.');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();

            return redirect()->intended('/home');
        }

        return back()
            ->withErrors(['email' => 'The provided credentials do not match our records.'])
            ->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    public function callback(string $provider)
    {
        $this->validateProvider($provider);

        try {
            $socialUser = $this->socialiteDriver($provider)->user();
        } catch (InvalidStateException $e) {
            Log::warning('Social login state validation failed.', [
                'provider' => $provider,
                'callback_url' => request()->fullUrl(),
                'app_url' => config('app.url'),
            ]);

            return redirect()->route('login')->withErrors([
                'provider' => ucfirst($provider).' login session expired. Open '.config('app.url').'/login and try again.',
            ]);
        } catch (Throwable $e) {
            Log::error('Social login failed.', [
                'provider' => $provider,
                'exception' => $e,
            ]);

            return redirect()->route('login')->withErrors([
                'provider' => 'Login failed. Please try again.',
            ]);
        }

        if (! $socialUser->getEmail()) {
            return redirect()->route('login')->withErrors([
                'provider' => ucfirst($provider).' did not return an email address.',
            ]);
        }

        $user = User::where('provider_name', $provider)
            ->where('provider_id', $socialUser->getId())
            ->first();
        if (! $user && $socialUser->getEmail()) {
            $user = User::where('email', $socialUser->getEmail())->first();
        }

        if (! $user) {
            $user = User::create([
                'name' => $socialUser->getName() ?? $socialUser->getNickname() ?? 'No name',
                'email' => $socialUser->getEmail(),
                'password' => bcrypt(Str::random(24)),
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        } else {
            $user->update([
                'provider_name' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]);
        }
        Auth::login($user, true);

        return redirect()->intended('/home');
    }

    private function validateProvider(string $provider): void
    {
        abort_unless(in_array($provider, self::PROVIDERS, true), 404);
    }

    private function socialiteDriver(string $provider)
    {
        $driver = Socialite::driver($provider);
        $verify = config('services.oauth.http_verify', true);

        if (is_string($verify) && $verify !== '') {
            $verify = str_replace('\\', '/', $verify);
        }

        if ($verify) {
            $driver->setHttpClient(new GuzzleClient([
                'verify' => $verify,
            ]));
        }

        return $driver;
    }
}
