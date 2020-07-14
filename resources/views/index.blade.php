@extends('layouts.app')
@section('content')

<!-- Main Content -->
  <div class="content" style="padding-left: 35px;">
    @foreach($posts as $post)
      <div class="container">
        <div class="row">
          <div class="post-preview">
              <a href="{{ route('home.post', $post)}}">
              <h5 class="post-title">
                {{ $post->title}}
              </h5>
              <h6 class="post-subtitle">
                {{$post->subtitle}}
              </h6>
            </a>
            <p class="post-meta">yayınlanma tarihi : {{$post->created_at}}</p>
          </div>
          <hr>
        </div>
     </div>
    @endforeach
    
  <div class="pagination" style="margin-left: auto; margin-right:auto; width:1px; font-size:10px;"> 
      {{ $posts->links() }}
  </div>
</div>
@endsection



