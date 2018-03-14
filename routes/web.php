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

Route::get('/', function(){
    return redirect('login');
});

Route::get('auth',function(){
    return redirect('/');
});

Route::post('auth', [
    'uses' => 'AuthController@index',
    'as' => 'auth'
]);

Route::get('login', [
    'uses' => 'LoginController@index',
    'as' => 'login'
]);

Route::get('logout', [
    'uses' => 'LogoutController@index',
    'as' => 'logout'
]);

Route::get('dashboard', [
    'uses' => 'DashboardController@index',
    'as' => 'dashboard'
]);

Route::get('users', [
    'uses' => 'UsersController@index',
    'as' => 'users'
]);

Route::get('disputes', [
    'uses' => 'DisputesController@index',
    'as' => 'disputes'
]);

Route::get('members', [
    'uses' => 'MembersController@index',
    'as' => 'members'
]);