@extends('layouts.user')
@section('content')
<!-- Main Content -->
<div class="container" style="padding-top: 30px">
    <form>
        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Subtitle</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        
        <div class="form-group">
            <label for="options1">Category</label>
            <select class="form-control">
                <option id="exampleOption">Categories</option>
            </select>
        </div>
       
        <div class="form-group">
            <label for="editor">Example textarea</label>
            <textarea name="content" id="editor">
               <p>Test felan</p>
            </textarea>
            
        </div>

        <button class="btn btn-success" action="submit">Kesin bilgi yayalım...</button>
    </form>
</div>
@endsection

