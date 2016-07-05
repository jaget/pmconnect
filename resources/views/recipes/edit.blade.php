@extends('layout')

@section('content')
    <form action="{{ route('recipes.update', $recipe) }}" method="POST">
        {{ method_field('patch') }}
        {{ csrf_field() }}

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ (old('name')?old('name'):$recipe->name) }}" />
        <br>
        <label for="bundle">bundle</label>
        <select name="bundle_id" id="bundle">
            @foreach( $recipeBundles as $recipeBundle )
                <option value="{{ $recipeBundle->id }}" {{ ((old('bundle_id') == $recipeBundle->id || $recipeBundle->bundle_id == $recipeBundle->id)?'selected="selected"':'') }}>{{ $recipeBundle->title }}</option>
            @endforeach
        </select>
        <input type="hidden" name="bundle_id" value="1">
        <br>
        <label for="method">Method</label>
        <textarea name="method" id="method" cols="30" rows="10">{{ (old('method')?old('method'):$recipe->method) }}</textarea>
        <br>
        <label for="prepTime">Prep time</label>
        <input type="text" name="prepTime" value="{{ (old('prepTime')?old('prepTime'):$recipe->prepTime) }}" />
        <br>
        <label for="cookTime">Cook time</label>
        <input type="text" name="cookTime" value="{{ (old('cookTime')?old('cookTime'):$recipe->cookTime) }}" />
        <br>
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" cols="30" rows="10">{{ (old('desc')?old('desc'):$recipe->desc) }}</textarea>
        <br>
        <input type="submit" value="Upvdate recipe">
    </form>
@stop