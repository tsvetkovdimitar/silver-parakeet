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

    $post = new Post(['title'=>'My second post', 'body'=>'Edwin is still funny']);

    $user->posts()->save($post);

});

Route::get('/read', function (){

    $user = User::findOrFail(1);

//    return $user->posts;

//    dd($user);

    foreach ($user->posts as $post){

        echo $post->title . "<br>";

    }

});

Route::get('/update', function(){

    $user = User::find(1);

    $user->posts()->where('id','=',2)->update(['title'=>'Edwin is very funny 2', 'body'=>'Edwin always exaggerates 2']);

});
