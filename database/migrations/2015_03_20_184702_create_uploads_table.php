<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUploadsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('uploads', function(Blueprint $table)
        {
            $table->string('id', 40)->primary();
            $table->integer('user_id')->length(10)->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('file_original_name');
            $table->string('file_original_file_type');
            $table->integer('file_size');
            $table->text('file_permanent_location');
            $table->text('match_data');
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
        Schema::drop('uploads');
	}

}
