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

use App\Http\Controllers\UserController;

/*
*   HOME
*/
Route::get('/', function () {
    return view('welcome');
});

/*
*    USER
*/
Route::get('users', 'Form\\TestController@listAllUsers')->name('users.listAll');
Route::get('users/new', 'Form\\TestController@formAddUser')->name('user.formAdd');
Route::post('users/store', 'Form\\TestController@addUser')->name('user.add');
Route::get('users/{user}', 'Form\\TestController@listUser')->name('user.list');

Route::get('users/edit/{user}', 'Form\\TestController@formEditUser')->name('user.formEdit');
Route::put('users/update/{user}', 'Form\\TestController@editUser')->name('user.edit');
