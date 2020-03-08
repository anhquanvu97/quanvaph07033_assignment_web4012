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

use App\Models\User;
use App\Models\Post;

Route::get('/', function(){
    return redirect('home');
});
Route::resource('home', 'frontend\HomeController');

Route::group([
    'middleware' => [
        'check_auth',
    ],
], function () {
    Route::get('hello_world', 'HelloController')->name('home.hello_world');

    Route::resource('users', 'backend\UserController')->middleware([
        'check_role_admin',
    ]);
    Route::resource('posts', 'backend\PostController')->middleware([
        'check_role_admin',
    ]);
    Route::resource('categories', 'backend\CategoryController')->middleware([
        'check_role_admin',
    ]);
    Route::resource('comments', 'backend\CommentController')->middleware([
        'check_role_admin',
    ]);
});

Route::get('login', 'AuthController@getLoginForm');
Route::post('login', 'AuthController@login')->name('auth.login');
Route::get('registration', 'AuthController@getRegistrationForm');
Route::post('registration', 'AuthController@Registration')->name('auth.registration');
Route::get('logout', 'AuthController@logout')->name('auth.logout');