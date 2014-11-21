@extends('layouts.layout')
@section('jsScripts')
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="js/manageItems.js"></script>

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/blitzer/jquery-ui.css" />
	<link rel="stylesheet" href="css/manageItems.css" />
@endsection
@section('content')
<div>
	<h1>Login Page</h1>
	<form id="loginForm" class="loginForm" method="POST" action="loginattempt">
		<label id="usernameLabel" class="usernameLabel">Username:</label>
		<input id="username" class="username" type="text" name="username" />
		<br />
		<label id="passwordLabel" class="passwordLabel">Password:</label>
		<input id="password" class="password" type="password" name="password" />
		<br />
		<input id="loginButton" class="loginButton" type="submit" value="Login" />
	</form>
</div>


@if(Session::has('message'))
    <div class="message" id="message">{{ Session::get('message') }}</div>
@endif
@if(Session::has('error_message'))
    <div class="error_message" id="error_message">
        {{ Session::get('error_message') }}
        <button id="dismiss_error" class="dismiss_error">Dismiss</button>
    </div>
@endif

@endsection