@extends('layouts.app')
@section('content')

<!-- Main Content -->
<div class="content" style="padding-left: 35px;">
    <h2>Post List</h2>
    
    @foreach($filtered_posts as $post)
      <div class="container">
        <div class="row">
              <a href="{{ route('home.post',$post->id)}}">
                <h5 class="post-title">
                  {{$post->title}}
                </h5>
              </a>
          </div>
     </div>
    @endforeach

<div class="pagination" style="margin-left: auto; margin-right:auto; width:1px; font-size:10px;"> 
@endsection



