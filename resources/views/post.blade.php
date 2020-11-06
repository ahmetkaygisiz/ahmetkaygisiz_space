@extends('layouts.app')
@section('content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="postpage-backbtn col-md-1">
        <a class="btn btn-outline-dark" href="{{ url()->previous() }}" role="button">
                <- Geri
            </a>
        </div>
        <div class="content mx-auto col-md-10 my-2">
            <div class="postpage-title">{{ $post->title}}</div>
            <div class="postpage-info">posted on {{$post->created_at->format('yy M d')}}</div>
            <div class="postpage-content">
                {!! $post-> content !!}
            </div>
        </div>
    </div>
</div>

@endsection

