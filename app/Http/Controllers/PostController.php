<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
            'subtitle'      => $request->get('subtitle'),
            'content'       => $request->get('content')
        ]);
        
        $post->save();

        return redirect('/admin/post/create')->with('success','Post saved!');
    }

    public function show($id)
    {
   
    }

    public function edit($id)
    {
        $post = Post::find($id);

        return view('post.edit', compact('post')); 
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title'     =>'required',
            'subtitle'  =>'required',
            'category_id'=>'required',
            'content'   =>'required'
        ]);
            
        $post = Post::find($id);
        $post->title        = $request->get('title');
        $post->subtitle     = $request->get('subtitle');
        $post->category_id  = $request->get('category_id');
        $post->content      = $request->get('content');
        
        $post->save();

        return redirect('/admin/post')->with('success','Post updated.');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/admin')->with('success', 'Post deleted!');
    }
}
