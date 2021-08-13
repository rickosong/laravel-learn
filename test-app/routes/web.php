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
    $blog_post = [
        [
            'title' => 'Post pertama',
            'author' => 'Ricko',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non dolore maiores ad cumque facilis voluptatem inventore laborum itaque quo eligendi nostrum, numquam atque harum, explicabo soluta consequuntur hic dolorem.'
        ],

        [
            'title' => 'Post kedua',
            'author' => 'Mohammad',
            'isi' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quia non dolore maiores ad cumque facilis voluptatem inventore laborum itaque quo eligendi nostrum, numquam atque harum, explicabo soluta consequuntur hic dolorem.'
        ],
    ];

    return view('post', [
        'title' => 'home',
        'posts' => $blog_post
    ]);
});