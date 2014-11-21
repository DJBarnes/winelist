<?php

class Item extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'item';

	public static function allByFilter($itemNum, $itemDesc, $slotLoc, $itemPack) {
        return DB::select('SELECT id, name, slot_location, pack FROM item WHERE item.id LIKE "' .
         $itemNum . '" AND item.name LIKE "' . $itemDesc . '" AND item.slot_location LIKE "' .
         $slotLoc . '" AND item.pack LIKE "' . $itemPack . '"');
    }
}