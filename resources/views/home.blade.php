@extends('layouts.app')
@section('title_block')
	View all blogs
@endsection
@section('content')
<h1 style="padding-top: 10px;">View all blogs</h1>
<hr>
 <div class="row justify-content-center">
    <table class="table">
  	    <thead>
   	 		<tr>
      			<th scope="col">#</th>
     			  <th scope="col"> Title</th>
      			<th scope="col">Content</th>
            <th scope="col">Date</th>
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
            <td><a href="blog/{{ $article->post_id }}">Show</a></td>
          
          </tr>
        @endforeach
       
  		</tbody>
	</table>
   </div>

@endsection
