<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Post;

class PostController extends Controller
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
    
    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required',
            'title'      =>'required',
            'subtitle'   =>'required',
            'content'    =>'required'
        ]);
        
        $post = new Post([
            'category_id'   => $request->get('category_id'),
            'title'         => $request->get('title'),
            'url'           => str_slug($request->get('title')),
            'subtitle'      => $request->get('subtitle'),
            'content'       => $request->get('content')
        ]);
        
        $post->save();

        return redirect('/admin/post/create')->with('success','Post saved!');
    }

    public function show($id)
    {
     
    }

    public function edit(Post $post)
    {
        return view('admin.edit', compact('post')); 
    }

    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'     =>'required',
            'subtitle'  =>'required',
            'category_id'=>'required',
            'content'   =>'required'
        ]);
        
        $post->title        = $request->get('title');
        $post->subtitle     = $request->get('subtitle');
        $post->url          = str_slug($request->get('title'));
        $post->category_id  = $request->get('category_id');
        $post->content      = $request->get('content');
        
        $post->save();

        return redirect('/admin/post')->with('success','Post updated.');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return redirect('/admin')->with('success', 'Post deleted!');
    }
}
