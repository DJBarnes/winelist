@extends('layouts.layout')
@section('jsScripts')
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
	<script src="js/manageItems.js"></script>

	<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/blitzer/jquery-ui.css" />
	<link rel="stylesheet" href="css/manageItems.css" />
@endsection
@section('content')
	<!--<form action='items' method='POST'></form>-->
	{{ Form::open(array('url' => 'updateitem', 'method' => 'POST')); }}

	<label id="itemNumberLabel">Item Number:</label>
	{{ Form::text('itemNumber', $itemInfo->id, array('id' => 'itemNumber', 'class' => 'itemNumber', 'readonly' => 'true')); }}
	<br />
	<label id="nameLabel">Name:</label>
	{{ Form::text('itemName', $itemInfo->name, array('id' => 'itemName', 'class' => 'itemName')); }}
	<br />
	<label id="slotLocationLabel">Slot Location</label>
	{{ Form::text('slotLocation', $itemInfo->slot_location, array('id' => 'slotLocation', 'class' => 'slotLocation')); }}
	<br />
	<label id="packSizeLabel">Pack Size</label>
	{{ Form::text('packSize', $itemInfo->pack, array('id' => 'packSize', 'class' => 'packSize')); }}
	
	{{ Form::submit('Save', array('id' => 'saveButton', 'class' => 'saveButton')); }}
	{{ Form::close(); }}
	@if(Session::has('error_message'))
    <div class="error_message" id="error_message">
        {{ Session::get('error_message') }}
        <button id="dismiss_error" class="dismiss_error">Dismiss</button>
    </div>
	@endif
@endsection