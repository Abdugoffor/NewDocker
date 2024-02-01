<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $models = Post::orderBy('id', 'desc')->get();
        return view('index', ['models' => $models]);
    }
}
