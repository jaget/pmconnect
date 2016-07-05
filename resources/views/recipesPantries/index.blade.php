@extends('layout')

@section('content')

    <h1>Recipe pantries</h1>
    {{ Html::link(route('recipesPantries.create'), 'Add new recipe pantries') }}
    @if(count($recipesPantries)>0)
        <ul>
            @foreach($recipesPantries as $recipePantry)
            <li>
                <a href="{{ route('recipesPantries.edit', ['id' => $recipePantry->id] ) }}">{{ $recipePantry->name }}</a>
            </li>
            @endforeach
        </ul>
    @else
        <p>Could not find any recipes</p>
    @endif
@stop