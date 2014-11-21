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
	{{ Form::open(array('url' => 'edititem', 'method' => 'POST', 'id' => 'edititem')); }}
	{{ Form::hidden('id', NULL, array('id' => 'edititem_id')); }}
	{{ Form::close(); }}
	<button id="addnew">Add New</button>
	<fieldset>
		<!--<form action='items' method='POST'></form>-->
		{{ Form::open(array('url' => 'items', 'method' => 'POST')); }}
		<legend>Search Filter</legend>
		<label id="itemNumberLabel">Item Number:</label>
		{{ Form::text('itemNumber', Session::get('itemSearchItemNumber'), array('id' => 'itemNumber', 'class' => 'itemNumber')); }}
		<label id="nameLabel">Name:</label>
		{{ Form::text('itemName', Session::get('itemSearchItemName'), array('id' => 'itemName', 'class' => 'itemName')); }}
		<br />
		<label id="slotLocationLabel">Slot Location</label>
		{{ Form::text('slotLocation', Session::get('itemSearchSlotLocation'), array('id' => 'slotLocation', 'class' => 'slotLocation')); }}
		<label id="packSizeLabel">Pack Size</label>
		{{ Form::text('packSize', Session::get('itemSearchPackSize'), array('id' => 'packSize', 'class' => 'packSize')); }}
		{{ Form::submit('Apply', array('id' => 'filterButton', 'class' => 'filterButton')); }}
		{{ Form::close(); }}
	</fieldset>
</div>
<table>
	<tr>
		<th>Item Id</th>
		<th>Item Name</th>
		<th>Pack Size</th>
		<th>Slot Location</th>
	</tr>
	@foreach ($allItems as $item)
	<tr id={{ $item->id }} name="itemrow">
		<td>{{ $item->id }}</td>
		<td>{{ $item->name }}</td>
		<td>{{ $item->pack }}</td>
		<td>{{ $item->slot_location }}</td>
	</tr>
	@endforeach
</table>

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