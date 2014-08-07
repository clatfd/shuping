<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('application',function($table){
			$table->increments('id');
			$table->string('email',64);
			$table->string('name',64);
		});
		DB::table('application')->insert(array('email'=>'ur email','name'=>'your password'));
	}
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('application');
	}

}
