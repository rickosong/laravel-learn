<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index() {
        return view('post', [
            'title' => 'home',
            // untuk array yg index name posts, berisi model Post yg isinya adalah method all()
            'posts' => Post::all()
        ]);
    }
}
