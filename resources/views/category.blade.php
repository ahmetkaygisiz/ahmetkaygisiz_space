@extends('layouts.app')
@section('content')

<!-- Main Content -->
<div class="content">
    <div class="post-list-header">Gönderi Listesi</div>
      <!-- filtered posts with categories -->
      @foreach($filtered_posts as $post)
      <div class="container">
        <div class="row">
          <div class="col-md-10">
              <a href="{{ route('home.post',$post)}}" class="post-list-contents">
                  {{$post->title}}
              </a>
          </div>
        </div>
     </div>
    @endforeach
    <!-- end of filtered posts with categories -->
  </div>
</div>
@endsection



