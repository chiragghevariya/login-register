<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/register','\App\Http\Controllers\Registercontroller@create')->name('register-form');

Route::post('admin/save-register','\App\Http\Controllers\Registercontroller@savecreate')->name('save-register-form');

Route::get('admin/login','\App\Http\Controllers\Logincontroller@create')->name('login-form');
 
Route::any('postlogin','\App\Http\Controllers\Logincontroller@postlogin')->name('login-post');