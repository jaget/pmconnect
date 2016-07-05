@extends('layout')

@section('content')

    <h1>recipes</h1>
    {{ Html::link(route('recipes.create'), 'Add new recipes') }}
    @if(count($recipes)>0)
        <ul>
            @foreach($recipes as $recipe)
            <li>
                <a href="{{ route('recipes.edit', ['id' => $recipe->id] ) }}">{{ $recipe->name }}</a>
            </li>
            @endforeach
        </ul>
    @else
        <p>Could not find any recipes</p>
    @endif
@stop