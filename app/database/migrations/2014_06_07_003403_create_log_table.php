<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('log', function($table) {
			$table->increments('id');
			$table->string('item_id', 10);
			$table->string('item_name', 80);
			$table->string('item_pack', 10);
			$table->string('move_type', 30);
			$table->integer('user_id')->unsigned();
			$table->string('from_location', 20);
			$table->string('to_location', 20);
			$table->integer('quantity');
			$table->timestamps();
			$table->foreign('user_id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('log');
	}

}
