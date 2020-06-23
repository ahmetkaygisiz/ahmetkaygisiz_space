@extends('layouts.user')
@section('content')

<!-- Main Content -->
<div class="container" style="padding-top: 30px">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div> <br />
    @endif

    <form method="post" action="{{ route('post.store') }}">
         @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        
        <div class="form-group">
            <label for="subtitle">Subtitle</label>
            <input type="text" class="form-control" id="subtitle" name="subtitle">
        </div>
        
        <div class="form-group">
            <label for="category_id">Category</label>
            <select class="form-control" id="category_id" name="category_id">
                @foreach($categories as $category)
                  <li>
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  </li>
                @endforeach
            </select>
        </div>
       
        <div class="form-group">
            <textarea id="mytextarea" name="content"></textarea>
        </div>

        <button class="btn btn-success" type="submit" style="">Kesin bilgi yayalım...</button>
    </form>
</div>

@endsection

