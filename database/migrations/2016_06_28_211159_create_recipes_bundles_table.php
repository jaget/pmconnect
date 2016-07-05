<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesBundlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes_bundles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->text('title');
			$table->text('desc');
			$table->integer('week');
			$table->integer('live')->defaults(0);
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
		Schema::drop('recipes_bundles');
	}

}
