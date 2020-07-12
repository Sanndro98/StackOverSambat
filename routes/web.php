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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'HomeController@logout');
Route::resource('/forum' , 'ForumController');
Route::resource('/tag' , 'TagController');
Route::post('/comment/addComment/{forum}','CommentController@addComment')->name('addComment');
Route::post('/comment/replyComment/{comment}','CommentController@replyComment')->name('replyComment');

Route::get('/home/{user}','ProfileController@index')->name('profile');
Route::post('/forum/mark-as-solution' ,'ForumController@markAsSolution')->name('markAsSolution');
Route::get('/about-us','ForumController@about')->name('about');
