@extends('layouts.app')
@section('content')
<!-- Main Content -->
<div class="container" style="padding-left: 35px;">
    <div class="row">
        <div class="content" style="width: 80%">
            <h1>{{$post->title}}</h1>
            <h4>posted on {{$post->created_at}}</h4>
            {!! $post-> content !!}
            <script src="https://gist.github.com/ahmetkaygisiz/bc15e22ddeebcace2eed03adc8fcd16c.js"></script>
            
        </div>
    </div>
</div>

@endsection

