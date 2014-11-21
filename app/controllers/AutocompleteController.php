<?php

class AutocompleteController extends BaseController {

	public function getItemNumbers() {
		$numbers = Item::select('id')->get();
		$returnArray = array();
		foreach ($numbers as $num) {
			array_push($returnArray, $num->id);
		}
		return $returnArray;
	}

	public function getItemDesc() {
		$desc = Item::select('name')->get();
		$returnArray = array();
		foreach ($desc as $n) {
			array_push($returnArray, $n->name);
		}
		return $returnArray;
	}

	public function getSlotLoc() {
		$slotLoc = Item::select('slot_location')->get();
		$returnArray = array();
		foreach ($slotLoc as $sl) {
			if (!in_array($sl->slot_location, $returnArray)) {
                array_push($returnArray, $sl->slot_location);
            }
		}
		return $returnArray;
	}

	public function getPackSize() {
		$packSize = Item::select('pack')->get();
		$returnArray = array();
		foreach ($packSize as $ps) {
			if (!in_array($ps->pack, $returnArray)) {
				array_push($returnArray, $ps->pack);
			}
		}
		return $returnArray;
	}
}