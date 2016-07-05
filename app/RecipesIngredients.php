<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipesIngredients extends Model {

	protected $fillable = ['recipe_id', 'ingredient_id', 'measurement', 'quantity'];
}
