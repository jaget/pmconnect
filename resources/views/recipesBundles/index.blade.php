@extends('layout')

@section('content')

    <h1>Recipes Bundles</h1>
    {{ Html::link(route('recipesBundles.create'), 'Add new recipe bundle') }}
    @if(count($recipesBundles)>0)
        <ul>
            @foreach($recipesBundles as $recipesBundle)
            <li>
                <a href="{{ route('recipesBundles.edit', ['id' => $recipesBundle->id] ) }}">{{ $recipesBundle->title }}</a>
            </li>
            @endforeach
        </ul>
    @else
        <p>Could not find any recipe bundles</p>
    @endif
@stop