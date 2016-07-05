<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'RecipesController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

$controllers = array('recipes','recipesBundles','recipesIngredients', 'recipesPantries');
foreach($controllers as $controller) {
	Route::resource($controller, ucfirst($controller).'Controller');
}