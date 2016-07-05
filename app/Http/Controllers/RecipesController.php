<?php namespace App\Http\Controllers;

use App\Recipes;
use App\RecipesBundles;
use Illuminate\Support\Facades\View;

class RecipesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $recipes = Recipes::all();

        return View::make('recipes/index')
            ->with(compact('recipes','itemsName','itemName'))
            ;

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        $recipeBundles = RecipesBundles::all();

        return View::make('recipes.create')
            ->with(compact('recipeBundles'))
            ;

    }

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Recipes::create(request()->all());
        return redirect(route('recipes.index'));
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
	    $recipe = Recipes::find($id);
	    $recipeBundles = RecipesBundles::all();
		return view('recipes.edit')->with(compact('recipe', 'recipeBundles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Recipes $recipes)
	{
	    $recipes->update(request()->all());
        return redirect(route('recipes.index'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
