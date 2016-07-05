<?php namespace App\Http\Controllers;

use App\Recipes;
use App\RecipesBundles;
use App\RecipesPantries;
use Illuminate\Support\Facades\View;


class RecipesPantriesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipesPantries = RecipesPantries::all();

        return View::make('recipesPantries/index')
            ->with(compact('recipesPantries'))
            ;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $recipePantries = RecipesPantries::all();

        return View::make('recipesPantries.create')
            ->with(compact('recipePantries'))
            ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        RecipesPantries::create(request()->all());
        return redirect(route('recipesPantries.index'));
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
        $recipePantry = RecipesPantries::find($id);
        $recipeBundles = RecipesBundles::all();
        return view('recipesPantries.edit')->with(compact('recipePantry', 'recipeBundles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(RecipesPantries $recipesPantries)
    {
        $recipesPantries->update(request()->all());
        return redirect(route('recipesPantries.index'));
    }

}
