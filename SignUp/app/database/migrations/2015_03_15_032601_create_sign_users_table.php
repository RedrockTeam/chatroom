<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sign_users', function(Blueprint $table)
		{
            $table->increments('user_id');
            $table->string('user_name');
            $table->string('user_sex');
            $table->string('user_number');
            $table->string('user_email');
            $table->string('user_phone');
            $table->text('user_question')->nullable();
            $table->integer('user_lecture');
            $table->text('user_token_id')->nullable();
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
		Schema::drop('sign_users');
	}

}
