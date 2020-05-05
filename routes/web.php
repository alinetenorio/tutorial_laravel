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

use App\Http\Controllers\FormAuto\TestController;

/*
*   HOME
*/
Route ::get('/', function () {
    return view('site.home');
})->name('site.home');

Route ::get('/cursos', function () {
    return view('site.cursos');
})->name('site.cursos');

Route ::get('/contato', function () {
    return view('site.contato');
})->name('site.contato');

Route::get('send-email', function(){
    $user = new stdClass();
    $user->name = "aline";
    $user->email = 'aline.tenorio96@gmail.com';

    // return new \App\Mail\laravelTips($user);
    Mail::send(new \App\Mail\laravelTips($user));
});

Route::view('form','upload.form')->name('form');
Route::post('upload','UploadController@upload')->name('upload');
/*
*    USER
*/
/*
Route::group(['namespace' => 'Form'], function(){

    Route::get('users', 'TestController@listAllUsers')->name('users.listAll');

    Route::get('users/new', 'TestController@formAddUser')->name('user.formAdd');
    Route::post('users/store', 'TestController@addUser')->name('user.add');
    
    Route::get('users/{user}', 'TestController@listUser')->name('user.list');
    
    Route::get('users/edit/{user}', 'TestController@formEditUser')->name('user.formEdit');
    Route::put('users/update/{user}', 'TestController@editUser')->name('user.edit');
    
    Route::delete('users/destroy/{user}', 'TestController@removeUser')->name('user.remove');

});
*/

//Route::resource('user', 'FormAuto\\TestController')->names('user')->parameters(["user"=>"usuario"]);
Route::resource('user', 'FormAuto\\TestController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
