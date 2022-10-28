@extends('layouts.admin')


@section('content')
  <h2>Blog Management</h2>

  <hr>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  		Add article
  </button>
  <hr>
  <table class="table">
  	<thead>
    	<tr>
      		<th scope="col">#</th>
      		<th scope="col">Title</th>
      		<th scope="col">Content</th>
      		<th scope="col">Date</th>
      		<th scope="col"></th>
      		<th scope="col"></th>
    	</tr>
  	</thead>
  	<tbody>
  		
  			@foreach ($articles as $article)
  			<tr>
        		<th scope="row">{{ $article->post_id }}</th>
      			<td>{{ $article->title }}</td>
      			<td>{{ $article->content }}</td>
      			<td>{{ $article->created_at }}</td>
      			<td><a href="articles/{{ $article->post_id }}">Edit</a></td>
      			<td><a href="#" class=" delbutton" id="{{ $article->post_id }}">Delete</a> </td>
      		</tr>
   	 		@endforeach
      		
    	
    </tbody>
</table>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add article</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="alert alert-danger" role="alert" style="display: none;">
        
      </div>

      <input type="text"  id="csrf-token" value="{{ csrf_token() }}" hidden>

      <div class="modal-body">
        <div class="form-group">
			     <label for="title">Title</label>
			     <input type="text" class="form-control" id="title">
		    </div>
		    <div class="form-group">
			     <label for="title">Content</label>
			     <textarea class="form-control" id="content"></textarea>
		    </div>





      </div>
      <div class="modal-footer">
      	<button type="button" class="btn btn-primary" id="add_article">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        
      </div>
    </div>
  </div>
</div>

@endsection