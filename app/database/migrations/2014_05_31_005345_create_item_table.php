<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('item', function($table)
		{
    		$table->string('id', 10)->primary();
    		$table->string('name',80);
    		$table->string('slot_location',8);
    		$table->string('pack', 20);
    		$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('item');
	}

}
