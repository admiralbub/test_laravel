<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>@yield('title_block')</title>
	 <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<header>
  
  <nav class="navbar navbar-expand-lg bg-light">
  	<div class="container-fluid">
   	 	<a class="navbar-brand" href="#">Blog</a>
    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      		<span class="navbar-toggler-icon"></span>
   	    </button>
    	<div class="collapse navbar-collapse" id="navbarNav">
      		<ul class="navbar-nav ">
       		@guest
        		<li class="nav-item">
           			 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        		</li>
        		@if (Route::has('register'))
            		<li class="nav-item">
                		<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            		</li>
       			 @endif
    		@else
        		<li class="nav-item " ><a href="#" class="nav-link">{{ Auth::user()->name }}</a> </li>
       			<li class="nav-item">
           			<a  class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"> Logout</a>  
        		</li>
       			<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    				{{ csrf_field() }}
				</form>
       		
    		@endguest
      		</ul>
   	 	</div>
  	</div>
</nav>
</header>


<body>
	<div class="container">
		@yield('content')
	</div>
</body>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
</html>