<?php

use App\Http\Controllers\Auth\AdminController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

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

Route::match(['get', 'post'], '/', 'Auth\AdminController@Login');
Route::group(['middleware' => 'admin'], function () {

  Route::get('/account', 'Auth\AdminController@account');
  Route::get('/logout', 'Auth\AdminController@logout');
  Route::get('/change-password', [AdminController::class, 'changePassword'])->name('changePassword');
  Route::post('/change-password', [AdminController::class, 'changePasswordSave'])->name('postChangePassword');
});