<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	public function up()
	{
		Schema::create('services', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('title');
			$table->string('content');
			$table->string('image');
			$table->string('slug');
			$table->boolean('is_active');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('services');
	}
}