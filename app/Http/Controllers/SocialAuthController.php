<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    //
     public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    public function register(Request $request){
        $input=$request->validate([
            'name'=>'required|max:255',
            'email'=>'required|email',
            'password'=>'required|min:6'
        ]);
        $input['password']=Hash::make($request->password);
        if($input){
            $register=User::create($input);
            if($register){
                return redirect('/login');
            }
        }
    }
    public function login(Request $request){
        $email=$request->email;
        $password=$request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect('/home');
        }
    }
    public function callback($provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();
        } catch (\Exception $e) {
            return redirect()->route('login')->withErrors('Login failed: ' . $e->getMessage());
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
}
