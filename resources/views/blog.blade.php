
@extends('layouts.app')
@section('title_block')
	{{ $article->title }}
@endsection

@section('content')
  <div style="padding-top: 20px;">
     <i>{{ $article->created_at }}</i>
     <hr>
     <h3>{{ $article->title }}</h3>
     <hr>
     <p>{{ $article->content }}</p>
 
  </div>
 
@endsection