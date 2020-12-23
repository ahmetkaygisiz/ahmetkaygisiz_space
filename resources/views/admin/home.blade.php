@extends('layouts.user')
@section('content')
<!-- Main Content -->
<div class="container-fluid">    
    <div class="row">
    <div class="col-sm-12">

    <table class="table table-striped">
        <thead>
            <tr>
                <td>Category</td>
                <td>Title</td>
                <td>Subtitle</td>
                <td>Created At</td>
                <td colspan = 2>Actions</td>
            </tr>
        </thead>
        
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{$post->category_id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->subtitle}}</td>
                <td>{{$post->created_at}}</td>
                <td>
                    <a href="{{ route('post.edit', $post)}}" class="btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{ route('post.destroy', $post)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="col-sm-12">
    @if(session()->get('success'))
        <div class="alert alert-success">
        {{ session()->get('success') }}  
        </div>
    @endif
    </div>

    <div>
        <a style="margin: 19px;" href="{{ url('/admin/post/create') }}" class="btn btn-primary">New post</a>
    </div>
    
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                {{ $posts->links("pagination::bootstrap-4") }}
            </div>
        </div>
    </div>

    <div>
</div>
</div>
@endsection