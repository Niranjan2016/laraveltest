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
use App\Http\Middleware\CheckLogin;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('custom-register', 'CustomAuthController@showRegisterForm')->name('custom.register');
Route::post('custom-register', 'CustomAuthController@register');


Route::get('custom-login', 'CustomAuthController@showLoginForm')->name('custom.login');
Route::post('custom-login', 'CustomAuthController@login');


Route::get('dashboard', ['middleware' => 'checklogin', 'uses' => 'DashboardController@dashboard']);
// Route::get('dashboard', ['middleware' => 'auth', function()
// {
    
// }, 'uses' => 'DashboardController@dashboard'])->name('dashboard');
