<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyrecordsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('applyrecords',function($table){
			$table->increments('id');
			$table->string('type');
			$table->string('year');
			$table->boolean('isawarded');
			$table->integer('money');
			$table->boolean('isextraawarded');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('applyrecords');
	}

}
