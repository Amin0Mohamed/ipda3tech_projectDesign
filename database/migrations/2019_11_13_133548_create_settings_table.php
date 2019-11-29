<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('header_logo');
			$table->string('footer_logo');
			$table->text('slogan');
			$table->string('intro_image');
			$table->string('address');
			$table->string('fb_link');
			$table->string('tw_link');
			$table->string('github_link');
			$table->string('whatsupp_number');
			$table->integer('user_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}