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

Route::get('/', 'PageController@home');

//Route::get('/posts/{post}', 'PostsController@show');


route::resource('posts', 'PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


use App\post;

Route::get ( '/', function () {
    return view ( 'welcome' );
} );
Route::any ( '/search', function () {
    $q = Request::get ( 'q' );
    $user = post::where ( 'title', 'LIKE', '%' . $q . '%' )->orWhere ( 'created_at', 'LIKE', '%' . $q . '%' )->get ();
    if (count ( $user ) > 0)
        return view ( 'welcome' )->withDetails ( $user )->withQuery ( $q );
    else
        return view ( 'welcome' )->withMessage ( 'No Details found. Try to search again !' );
} );

Route::get('/', 'PostsController@index');
Route::get('/status/update', 'PostsController@updateStatus')->name('post.update.status');
