@extends('layouts.app')
@section('content')
<!-- Main Content -->
<div class="container" style="padding-left: 35px;">
    <div class="row">
        <div class="content" style="width: 80%; padding-bottom: 35px">
            <br />
            <a class="btn btn-outline-dark" href="{{ url()->previous() }}" role="button">
                <- Geri
            </a>
            <br />
            <h1>{{ $post->title}}</h1>
            <h4>posted on {{$post->created_at}}</h4>
            {!! $post-> content !!}
        </div>
    </div>
</div>

@endsection

