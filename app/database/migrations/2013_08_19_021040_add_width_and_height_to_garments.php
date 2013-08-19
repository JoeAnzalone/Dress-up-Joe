<?php

use Illuminate\Database\Migrations\Migration;

class AddWidthAndHeightToGarments extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('garments', function(Blueprint $table)
		{
			$table->integer('width')->unsigned();
			$table->integer('height')->unsigned();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('garments', function(Blueprint $table)
		{
			$table->dropColumn('width');
			$table->dropColumn('height');
		});
	}

}