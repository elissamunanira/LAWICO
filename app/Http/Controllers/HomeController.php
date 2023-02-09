<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(2);
        return view('Home.index')-> with('posts', $posts);
    }
}
