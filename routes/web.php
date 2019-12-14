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

use App\Post;
use App\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function (){

    echo "Test test test";

});

Route::get('/create', function(){

    $user = User::findOrFail(1);

    $post = new Post(['title'=>'My first post', 'body'=>'Edwin is funny']);

    $user->posts()->save($post);

});
