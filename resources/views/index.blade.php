@extends('layouts.app')
@section('content')

<!-- Main Content -->

  @foreach($postList as $post)
  <div class="content" style="padding-left: 35px;">
    <div class="container">
      <div class="row">
          <div class="post-preview">
            <a href="#">
              <h5 class="post-title">
                {{$post->title}}
              </h5>
              <h6 class="post-subtitle">
                {{$post->subtitle}}
              </h6>
            </a>
            <p class="post-meta">on  {{$post->created_at}}</p>
          </div>
          <hr>
          <!-- Pager -->
        </div>
      </div>
  </div>
  </div>
@endforeach
@endsection

