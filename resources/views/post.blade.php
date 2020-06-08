@extends('layouts.app')
@section('content')
<!-- Main Content -->
<div class="container" style="padding-left: 35px;">
    <div class="row">
        <div class="content">
            <h1>{{$post->title}}</h1>
            <h4>posted on {{$post->created_at}}</h4>
            <p> 
                <?php echo $post->content ?>
            </p> 
        </div>
    </div>
</div>
@endsection

