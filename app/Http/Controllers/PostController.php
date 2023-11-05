<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function posts() {
        return view('posts', [
            'posts'=>Post::latest()->paginate()
        ]);
    }
    public function index() {
        return view('index');
    }
    public function images() {
        return view('images');
    }
}
