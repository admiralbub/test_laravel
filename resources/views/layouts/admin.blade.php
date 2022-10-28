<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin panel</title>
	 <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<header class="header-admin">
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Admin panel</strong>
      </a>
     
    </div>
  </div>
</header>


<body>
	<div class="container">
		<div class="row justify-content-start">
    		<div class="col-3">
      			<nav class="nav flex-column">
  
  					<a class="nav-link" href="/admin/articles">Blog Management</a>
  					
				</nav>
    		</div>
    		<div class="col-7">
      			@yield('content')
    		</div>
  		</div>
		
	</div>
</body>

<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script  language="JavaScript" type="text/javascript" src="{{ asset('js/my.js') }}"></script>
</html>