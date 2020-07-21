<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {  
        $posts = Post::all();

        return view('admin.home',compact('posts'));
    }
}