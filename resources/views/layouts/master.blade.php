<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Portfolio</title>
		<link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.min.css') }}">
    	<link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">

	</head>
	<body>
		<div class="container">
			<ul>
				@if(\Auth::check())
				<li>
					{{ link_to_route('logout', 'Logout') }}
				</li>
				@else
				<li>
					{{ link_to_route('login', 'Login') }}
				</li>
				@endif
				<li>
					{{ link_to_route('users.create', 'New User') }}
				</li>
			</ul>
			@yield('content')
		</div>
	</body>
		<script type="text/javascript" src="{{ url('js/jquery-3.2.1.slim.min.js') }}"></script>
		<script type="text/javascript" src="{{ url('js/popper.min.js') }}" ></script>
		<script type="text/javascript" src="{{ url('js/bootstrap.min.js') }}"></script>
</html>