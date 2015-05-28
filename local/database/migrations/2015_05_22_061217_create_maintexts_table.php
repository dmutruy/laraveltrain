<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaintextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('maintexts', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('body');
			$table->string('url');
			$table->enum('showhide',array('show','hide'));
			$table->enum('lang',array('ru','eng'));
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
		Schema::drop('maintexts');
	}

}
