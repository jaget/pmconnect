@extends('layout')

@section('content')

    <h1>recipes</h1>
    {{ Html::link(route('recipesIngredients.create'), 'Add new recipe ingredients') }}
    @if(count($recipesIngredients)>0)
        <ul>
            @foreach($recipesIngredients as $recipeIngredient)
            <li>
                <a href="{{ route('recipesIngredients.edit', ['id' => $recipeIngredient->id] ) }}">{{ $recipeIngredient->quantity . ' ' . $recipeIngredient->measurement }}</a>
            </li>
            @endforeach
        </ul>
    @else
        <p>Could not find any recipes</p>
    @endif
@stop