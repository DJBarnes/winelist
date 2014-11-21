<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function($table) {
			$table->increments('id');
			$table->string('name', 80);
			$table->string('username', 20);
			$table->string('password', 60);
			$table->string('remember_token',100);
			$table->integer('user_level_id')->unsigned();
			$table->timestamps();
			$table->softDeletes();
			$table->foreign('user_level_id')->references('id')->on('user_level');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('users');
	}

}
