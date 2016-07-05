<?php namespace App\Http\Controllers;


use App\RecipesBundles;
use Illuminate\Support\Facades\View;

class RecipesBundlesController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $recipesBundles = RecipesBundles::all();

        return view()->make('recipesBundles/index')
            ->with(compact('recipesBundles'))
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

        return View::make('recipesBundles.create')
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
        RecipesBundles::create(request()->all());
        return redirect(route('recipesBundles.index'));
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
        $recipeBundle = RecipesBundles::find($id);
        return view('recipesBundles.edit')->with(compact('recipeBundle'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(RecipesBundles $recipesBundles)
    {
        $recipesBundles->update(request()->all());
        return redirect(route('recipesBundles.index'));
    }

}
