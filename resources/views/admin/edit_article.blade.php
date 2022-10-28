@extends('layouts.admin')


@section('content')
  <h2>Edit Article</h2>

  <hr>
  <div class="alert alert-danger" role="alert" style="display: none;"></div>
  <input type="text"  id="csrf-token" value="{{ csrf_token() }}" hidden>
   <div class="form-group" style="padding-bottom: 10px;">
       <label for="title">Title</label>
       <input type="text" class="form-control" id="title" value="{{$article->title}}">
    </div>
   
    <div class="form-group" style="padding-bottom: 10px;">
        <label for="title">Content</label>
        <textarea class="form-control" id="content" >{{$article->content}}</textarea>
    </div>
   <input type="text" hidden value="{{$article->post_id}}" id="id_article">
    <div class="form-group" style="padding-bottom: 10px;">
        <button type="button" class="btn btn-primary" id="edit_article">Edit</button>
    </div>  

@endsection