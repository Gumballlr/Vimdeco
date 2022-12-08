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

  Route::get('/dashboard', 'Auth\AdminController@dashboard');
  Route::get('/logout', 'Auth\AdminController@logout');
  Route::match(['get', 'post'], '/account', 'Auth\AdminController@account');
  Route::get('/permission', 'Auth\AdminController@permission');
  Route::get('/clearance', 'Auth\AdminController@clearance');
  Route::get('/gate', 'Auth\AdminController@gate');
  Route::get('/user', 'Auth\AdminController@user');
});