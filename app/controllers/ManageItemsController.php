<?php

class ManageItemsController extends BaseController {

	public function getItems()
	{
		$itemNumber = Session::get('itemSearchItemNumber') . '%';
		$itemName = '%' . Session::get('itemSearchItemName') . '%';
		$slotLocation = Session::get('itemSearchSlotLocation') . '%';
		$packSize = Session::get('itemSearchPackSize') . '%';

		$items = Item::allByFilter($itemNumber, $itemName, $slotLocation, $packSize);
		return View::make('manageItemsView')->with('allItems', $items);
	}

	public function postItems()
	{
		$itemNumber = Input::get('itemNumber');
		$itemName = Input::get('itemName');
		$slotLocation = Input::get('slotLocation');
		$packSize = Input::get('packSize');
		
		Session::put('itemSearchItemNumber', $itemNumber);
		Session::put('itemSearchItemName', $itemName);
		Session::put('itemSearchSlotLocation', $slotLocation);
		Session::put('itemSearchPackSize', $packSize);

		return Redirect::to('items');
	}

	public function getAddNewItem()
	{
		return View::make('addNewItem');
	}

	public function postAddNewItem()
	{
		try
		{
			$itemNumber = Input::get('itemNumber');
			$itemName = Input::get('itemName');
			$itemSlotLoc = Input::get('slotLocation');
			$itemPackSize = Input::get('packSize');

			$newItem = new Item();

			$newItem->id = $itemNumber;
			$newItem->name = $itemName;
			$newItem->slot_location = $itemSlotLoc;
			$newItem->pack = $itemPackSize;

			$newItem->save();

			return Redirect::to('items')
				->with('message','Item Added Successfully');
		}
		catch(Exception $e)
		{
			return Redirect::to('items')
				->with('error_message','You Janked it up!');
		}
	}

	public function postEditItem() {
		$editItemModel = Item::where('id','=',Input::get('id'))->first();
		return View::make('editItem')->with('itemInfo', $editItemModel);
	}

	public function getErrorEditItem() {
		$editItemModel = Session::get('itemObject');
		return View::make('editItem')->with('itemInfo', $editItemModel);
	}

	public function postUpdateItem() {
		try
		{
			$itemNumber = Input::get('itemNumber');
			$itemName = Input::get('itemName');
			$itemSlotLoc = Input::get('slotLocation');
			$itemPackSize = Input::get('packSize');

			$updateItem = Item::where('id','=',$itemNumber)->first();

			$updateItem->id = $itemNumber;
			$updateItem->name = $itemName;
			$updateItem->slot_location = $itemSlotLoc;
			$updateItem->pack = $itemPackSize;

			$updateItem->save();

			return Redirect::to('items')
				->with('message','Item Updated Successfully');
		}
		catch(Exception $e)
		{
			return Redirect::to('edititem')
				->with('error_message','You Janked it up!')
				->with('itemObject', $updateItem);
		}
	}

}
