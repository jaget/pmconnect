<?php namespace App\Http\Controllers;

use App\Recipes;
use App\RecipesBundles;
use App\RecipesIngredients;
use Illuminate\Support\Facades\View;


class RecipesIngredientsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipesIngredients = RecipesIngredients::all();

        return View::make('recipesIngredients/index')
            ->with(compact('recipesIngredients','itemsName','itemName'))
            ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $recipes = Recipes::all();
        $recipeBundles = RecipesBundles::all();
        $measurements = [ 'Tbsp',' Tsp','g','ml','l','kg'];
        $ingredients = [];
        return View::make('recipesIngredients.create')
            ->with(compact('recipes', 'recipeBundles', 'measurements', 'ingredients'))
            ;

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        RecipesIngredients::create(request()->all());
        return redirect(route('recipesIngredients.index'));
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
        $recipesIngredient = RecipesIngredients::find($id);
        $recipes = Recipes::all();
        $recipeBundles = RecipesBundles::all();
        $measurements = [ 'Tbsp',' Tsp','g','ml','l','kg'];
        $ingredients = [];
        return view('recipesIngredients.edit')->with(compact('recipes', 'recipeBundles', 'measurements', 'ingredients', 'recipesIngredient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(RecipesIngredients $recipesIngredients)
    {
        $recipesIngredients->update(request()->all());
        return redirect(route('recipesIngredients.index'));
    }

}
