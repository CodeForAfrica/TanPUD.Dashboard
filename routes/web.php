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

// Users routes
Route::get('users', [
    'uses' => 'UsersController@index',
    'as' => 'users'
]);

Route::get('users/view/{id}', [
    'uses' => 'UsersController@view',
    'as' => 'users.view'
]);

Route::get('users/edit/{id}', [
    'uses' => 'UsersController@edit',
    'as' => 'users.edit'
]);

Route::get('users/delete/{id}', [
    'uses' => 'UsersController@delete',
    'as' => 'users.delete'
]);

Route::post('users', [
    'uses' => 'UsersController@update',
    'as' => 'users.update'
]);

Route::post('users/create', [
    'uses' => 'UsersController@create',
    'as' => 'users.create'
]);

Route::get('disputes', [
    'uses' => 'DisputesController@index',
    'as' => 'disputes'
]);

Route::get('members', [
    'uses' => 'MembersController@index',
    'as' => 'members'
]);