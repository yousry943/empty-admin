<?php
use Illuminate\Support\Facades\Route;
// Dashboard
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
// Route::group(['prefix' => LaravelLocalization::setLocale()], function(){
// Route::group(['prefix' => LaravelLocalization::setLocale().'/','middleware'=>'auth:web'],function(){    
Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

    Route::get('dashboard/', 'App\Http\Controllers\Frontend\Dashboard\HomeController@index')->name('dashboard.home');
// });
    // Login
    Route::get('dashboard/login', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@showLoginForm')->name('dashboard.login');
    Route::post('dashboard/login', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@login');
    Route::post('logout', 'App\Http\Controllers\Frontend\Dashboard\Auth\LoginController@logout')->name('dashboard.logout');

    // Register
    Route::get('dashboard/register', 'App\Http\Controllers\Frontend\Dashboard\Auth\RegisterController@showRegistrationForm')->name('dashboard.register');
    Route::post('dashboard/register', 'App\Http\Controllers\Frontend\Dashboard\Auth\RegisterController@register');

    // Reset Password
    Route::get('dashboard/password/reset', 'App\Http\Controllers\Frontend\Dashboard\Auth\ForgotPasswordController@showLinkRequestForm')->name('dashboard.password.request');
    Route::post('dashboard/password/email', 'App\Http\Controllers\Frontend\Dashboard\Auth\ForgotPasswordController@sendResetLinkEmail')->name('dashboard.password.email');
    Route::get('dashboard/password/reset/{token}', 'App\Http\Controllers\Frontend\Dashboard\Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('dashboard/password/reset', 'App\Http\Controllers\Frontend\Dashboard\Auth\ResetPasswordController@reset')->name('dashboard.password.update');

    // Confirm Password
    Route::get('dashboard/password/confirm', 'App\Http\Controllers\Frontend\Dashboard\Auth\ConfirmPasswordController@showConfirmForm')->name('dashboard.password.confirm');
    Route::post('dashboard/password/confirm', 'App\Http\Controllers\Frontend\Dashboard\Auth\ConfirmPasswordController@confirm');
    
    Route::get('dashboard/employee',function () {
        return view('/frontend/dashboard/pages/employee/index');
      })->name('dashboard.employee');
    
      Route::get('dashboard/employee/create',function () {
        return view('/frontend/dashboard/pages/employee/create');
      })->name('dashboard.employee.create');
    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');
});