@extends('layouts.app')
@section('content')

<!-- Main Content -->
  <div class="content">
    @foreach($posts as $post)
      <div class="container">
        <div class="row">
          <div class="post-preview mx-auto col-md-10">
              <a href="{{ route('home.post', $post)}}" class="indexpost-link">
              <div class="indexpost-title">
                {{ $post->title}}
              </div>
              <div class="indexpost-subtitle">
                {{$post->subtitle}}
              </div>
            </a>
            <p class="indexpost-info">yayınlanma tarihi : {{$post->created_at->format('yy M d')}}</p>
          </div>
        </div>
     </div>
    @endforeach
    
  <div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto">
        {{ $posts->links("pagination::bootstrap-4") }}
      </div>
    </div>
  </div>
</div>
@endsection



