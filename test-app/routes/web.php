<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    return view('welcome');
});

Route::get('/home', function () {
    return view('home', [
        'title' => 'home'
    ]);
});

Route::get('/test', function () {
    return view('test', [
        'name' => 'Mohammad Ricko Aprilianto',
        'Github' => 'rickosong',
        'title' => 'about'
    ]);
});


Route::get('/post', function () {
    return view('post', [
        'title' => 'home',
        // untuk array yg index name posts, berisi model Post yg isinya adalah method all()
        'posts' => Post::all()
    ]);
});