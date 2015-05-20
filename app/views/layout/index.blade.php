<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>{{ $title }}</title>
	<link rel="stylesheet" href="{{ asset('css/foundation.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	{{HTML:: script('js/vendor/modernizr.js')}}
</head>
<body>
<!-- Header and Nav -->
<nav class="top-bar" data-topbar>
	<a href="#" class="nav_link ">Login</a> 
	<a href="{{ URL::to('/register') }}" class="nav_link register_link">Register |  </a>
	
	<ul class="title-area">
		<li class="name">
			<h1><a href="{{ URL::to('/') }}">Logo</a></h1>
		</li>
	</ul>
</nav>

<!-- End Header and Nav -->
<div class="row">
	<div class="large-12">
		@yield('register_content')
	</div>
</div>
<!-- Footer -->
<footer class="row">

<div class="large-12 columns">
	<hr />

<div class="row">
	<div class="large-6 columns">
		<p> © Copyright by JackyYan</p>
	</div>
</div>
</div>

</footer>

	{{HTML:: script('js/vendor/jquery.js')}}
	{{HTML:: script('js/foundation.min.js')}}
	{{HTML:: script('js/app.js')}}
<script>
	$(document).foundation();
</script>
</body>
</html>

