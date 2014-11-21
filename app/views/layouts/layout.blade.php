<html>
	<head>
		@yield('jsScripts')
	</head>
	<body>
		<h1>Wine List</h1>
		<div id="content">
			@if(Auth::check())
				<button id="logoutButton" class="logoutButton" onclick="window.location.href='logout';">Logout</button>
			@endif
			@yield('content')
		</div>
	</body>
</html>