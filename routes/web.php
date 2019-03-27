<?php

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
    return view('coba');
});

Route::get('/profile', "ProfilerController@index");

Route::get('/app', "ProfilerController@index2");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', "AdminController@index")->name('home');

Route::get('/login', "ProfilerController@login");

Route::get('/register', "ProfilerController@register");

Route::prefix('admin')->group(function(){
    Route::get('/login', "Auth\AdminLoginController@showLoginForm")->name('admin.login');
    Route::post('/login', "Auth\AdminLoginController@login")->name('admin.login.submit');
    Route::get('/', "AdminController@index")->name('admin.dashboard');
});