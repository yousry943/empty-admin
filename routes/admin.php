<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix' => LaravelLocalization::setLocale()], function(){

// Dashboard

    Route::get('admin/', 'App\Http\Controllers\Backend\Admin\HomeController@index')->name('admin.home');

    Route::get('admin/test', 'App\Http\Controllers\Backend\Admin\testController@index')->name('admin.test');
    // Login
    Route::get('admin/login', 'App\Http\Controllers\Backend\Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin/login', 'App\Http\Controllers\Backend\Admin\Auth\LoginController@login');
    Route::post('admin/logout', 'App\Http\Controllers\Backend\Admin\Auth\LoginController@logout')->name('admin.logout');
 
    // Register
    Route::get('admin/register', 'App\Http\Controllers\Backend\Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');
    Route::post('admin/register', 'App\Http\Controllers\Backend\Admin\Auth\RegisterController@register');

    // Reset Password
    Route::get('admin/password/reset', 'App\Http\Controllers\Backend\Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('admin/password/email', 'App\Http\Controllers\Backend\Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('admin/password/reset/{token}', 'App\Http\Controllers\Backend\Admin\Auth\ResetPasswordController@showResetForm')->name('admin.password.reset');
    Route::post('admin/password/reset', 'App\Http\Controllers\Backend\Admin\Auth\ResetPasswordController@reset')->name('admin.password.update');

    // Confirm Password
    Route::get('admin/password/confirm', 'App\Http\Controllers\Backend\Admin\Auth\ConfirmPasswordController@showConfirmForm')->name('admin.password.confirm');
    Route::post('admin/password/confirm', 'App\Http\Controllers\Backend\Admin\Auth\ConfirmPasswordController@confirm');

    // Verify Email
    // Route::get('email/verify', 'Auth\VerificationController@show')->name('verification.notice');
    // Route::get('email/verify/{id}/{hash}', 'Auth\VerificationController@verify')->name('verification.verify');
    // Route::post('email/resend', 'Auth\VerificationController@resend')->name('verification.resend');

      // Role Routes
    Route:: resource('admin/role', 'App\Http\Controllers\Backend\RoleController');
    // Admin User Routes
    Route:: resource('admin/admin-user','App\Http\Controllers\Backend\AdminUserController');
    // Menu Routes
    Route:: post('admin/menu/updaterow', [MenuController::class, 'updaterow']);
    Route:: resource('admin/menu', MenuController::class);
    /* Profile Routes */
    Route:: get('admin/admin-profile','App\Http\Controllers\Backend\AdminProfileController@index')->name('profile');
    Route:: put('admin/admin-profile/update/{id}', 'App\Http\Controllers\Backend\AdminProfileController@update')->name('profile.update');

    /* Route Group */
    Route::group(['middleware' => ['admin.auth','role:super-admin', 'auth:admin']],function () {
        /* Env Editor Routes */
        Route:: get('admin/env-editor', function(){ return view('vendor.geo-sv.env-editor.index'); });
        /* Backup Manager Routes */
        Route::get('admin/backup', function(){ return view('vendor.laravel_backup_panel.layout');})->name('admin.backup');
    });

    /* Setting Routes */
    Route:: get('admin/settings', [SettingsController::class, 'index'])->name('settings.index');
    /* Webinfo Route */
    Route:: post('admin/settings/webinfoupdate', [SettingsController::class, 'webinfoUpdate'])->name('settings.webinfoupdate');
    /* Webinfo Route */
    Route:: post('admin/settings/contactinfo', [SettingsController::class, 'ContactInfoUpdate'])->name('settings.contactInfoUpdate');
    Route:: post('admin/settings/imageupdate', [SettingsController::class, 'ImageUpdate'])->name('settings.imageUpdate');
});