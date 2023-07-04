<?php
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Backend\AdminProfileController;
use App\Http\Controllers\Backend\AdminUserController;
use App\Http\Controllers\Backend\MenuController;
use App\Http\Controllers\Backend\RoleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\SettingsController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.website.home');
});
Route::get('test/', 'App\Http\Controllers\testController@index')->name('test.index');
Route::post('test/', 'App\Http\Controllers\testController@add')->name('test.add');




/*
|--------------------------------------------------------------------------
| Backend Routes
|--------------------------------------------------------------------------
| Here all Backend routs has been define    
*/
// Route::group(['prefix'=> 'admin', 'as' => 'admin.'], function () {
//   // Role Routes
//   Route:: resource('/role', RoleController::class);
//   // Admin User Routes
//   Route:: resource('/admin-user', AdminUserController::class);
//   // Menu Routes
//   Route:: post('/menu/updaterow', [MenuController::class, 'updaterow']);
//   Route:: resource('/menu', MenuController::class);
//   /* Profile Routes */
//   Route:: get('/admin-profile', [AdminProfileController::class, 'index'])->name('profile');
//   Route:: put('/admin-profile/update/{id}', [AdminProfileController::class, 'update'])->name('profile.update');

//   /* Route Group */
//   Route::group(['middleware' => ['admin.auth','role:super-admin', 'auth:admin']],function () {
//     /* Env Editor Routes */
//     Route:: get('/env-editor', function(){ return view('vendor.geo-sv.env-editor.index'); });
//     /* Backup Manager Routes */
//     Route::get('/backup', function(){ return view('vendor.laravel_backup_panel.layout');});
//   });

//   /* Setting Routes */
//   Route:: get('/settings', [SettingsController::class, 'index'])->name('settings.index');
//   /* Webinfo Route */
//   Route:: post('/settings/webinfoupdate', [SettingsController::class, 'webinfoUpdate'])->name('settings.webinfoupdate');
//   /* Webinfo Route */
//   Route:: post('/settings/contactinfo', [SettingsController::class, 'ContactInfoUpdate'])->name('settings.contactInfoUpdate');
//   Route:: post('/settings/imageupdate', [SettingsController::class, 'ImageUpdate'])->name('settings.imageUpdate');

// });