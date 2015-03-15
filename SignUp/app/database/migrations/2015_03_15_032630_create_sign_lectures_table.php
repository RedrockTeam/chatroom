<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSignLecturesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sign_lectures', function(Blueprint $table)
		{
            $table->increments('lec_id');
            $table->string('lec_title');
            $table->string('lec_speaker_name');
            $table->text('lec_speaker_introduce')->nullable();
            $table->string('lec_master_name');
            $table->text('lec_content')->nullable();
            $table->text('lec_return_message')->nullable();
            $table->integer('lec_admin');
            $table->timestamp('lec_begintime');
            $table->timestamp('lec_deadline');
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
		Schema::drop('sign_lectures');
	}

}
