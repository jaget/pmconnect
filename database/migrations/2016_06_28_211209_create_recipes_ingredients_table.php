<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesIngredientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('recipes_ingredients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('recipe_id')->index();
			$table->integer('ingredient_id')->index();
			$table->enum('measurement', [ 'Tbsp',' Tsp','g','ml','l','kg'])->defaults(null);
			$table->string('quantity', 255);
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
		Schema::drop('recipes_ingredients');
	}

}
