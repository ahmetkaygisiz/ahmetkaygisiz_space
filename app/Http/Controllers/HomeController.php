<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    public function index()
    {   
        return view('index');
    }
    
    public function about()
    {   
        // $to_name = "Test";
        // $to_email = "ahmetkaygisiz17@gmail.com";

        // $data = array('name'=>'tsdfs', 'body' => 'A test mail');
        
        // Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
        
        // $message->to($to_email, $to_name)->subject('Laravel Test Mail');
        // $message->from('SENDER_EMAIL_ADDRESS','Test Mail');
        // });

        return view('about');
    }

    public function post()
    {
        return view('post');
    }

    public function showPost($id)
    {
        $post = Post::find($id);
        if(empty($post)) 
            abort(404);
        return view('post', compact('post')); 
    }
}
