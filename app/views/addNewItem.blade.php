@extends('layouts.layout')
@section('jsScripts')
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="js/manageItems.js"></script>

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/blitzer/jquery-ui.css" />
@endsection
@section('content')
	<!--<form action='items' method='POST'></form>-->
	{{ Form::open(array('url' => 'addnewitem', 'method' => 'POST')); }}

	<label id="itemNumberLabel">Item Number:</label>
	{{ Form::text('itemNumber', '', array('id' => 'itemNumber', 'class' => 'itemNumber')); }}
	<br />
	<label id="nameLabel">Name:</label>
	{{ Form::text('itemName', '', array('id' => 'itemName', 'class' => 'itemName')); }}
	<br />
	<label id="slotLocationLabel">Slot Location</label>
	{{ Form::text('slotLocation', '', array('id' => 'slotLocation', 'class' => 'slotLocation')); }}
	<br />
	<label id="packSizeLabel">Pack Size</label>
	{{ Form::text('packSize', '', array('id' => 'packSize', 'class' => 'packSize')); }}
	
	{{ Form::submit('Add', array('id' => 'addButton', 'class' => 'addButton')); }}
	{{ Form::close(); }}
@endsection