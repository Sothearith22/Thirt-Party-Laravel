<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\ResetPasswordController;
use App\Http\Controllers\SocialAuthController;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('Auth.login');
});

Route::get('/test-mail', function () {

    Mail::raw('Hello from Laravel + SendGrid', function ($message) {
        $message->to('kimsothearith2007@gmail.com')
            ->subject('Test Email');
    });

    return 'Email sent!';
});

Route::get('/register', function () {
    return view('Auth.register');
});
Route::post('/register', [SocialAuthController::class, 'register']);
Route::get('/login', function () {
    return view('Auth.login');
})->name('login');
Route::post('/login', [SocialAuthController::class, 'login']);
Route::get('auth/{provider}/redirect', [SocialAuthController::class, 'redirect'])
    ->where('provider', 'google|facebook')
    ->name('auth.redirect');

Route::get('auth/{provider}/callback', [SocialAuthController::class, 'callback'])
    ->where('provider', 'google|facebook')
    ->name('auth.callback');
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('page.home');
    });

    Route::post('/logout', [SocialAuthController::class, 'logout'])->name('logout');
});

// Forgot password request (send email)
Route::get('forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

// Reset password form
Route::get('reset-password/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('reset-password', [ResetPasswordController::class, 'reset'])->name('password.update');
