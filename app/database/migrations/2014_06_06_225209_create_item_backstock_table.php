<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemBackstockTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item_backstock', function($table)
		{
			$table->string('item_id');
			$table->string('backstock_id',10);
			$table->integer('quantity');
			$table->dateTime('receive_date');
			$table->timestamps();
			$table->primary(array('item_id','backstock_id'));
			$table->foreign('item_id')->references('id')->on('item');
			$table->foreign('backstock_id')->references('id')->on('backstock');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('item_backstock');
	}

}
