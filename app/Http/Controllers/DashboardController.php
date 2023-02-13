<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;


class DashboardController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at','desc')->paginate(5);
        return view('dashboard.index')-> with('posts', $posts);
    }



    
}
