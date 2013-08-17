<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGarmentCoordinatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('garment_coordinates', function(Blueprint $table)
		{
			$table->integer('outfit_id')->unsigned();
			$table->integer('garment_id')->unsigned();
			$table->integer('x')->unsigned();
			$table->integer('y')->unsigned();
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
		Schema::drop('garment_coordinates');
	}

}
