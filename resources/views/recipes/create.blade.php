@extends('layout')
@section('content')
<h2>Add new recipe</h2>
@if(count($errors) > 0)
    {{ $errors }}
    @endif
<form action="{{ route('recipes.store') }}" method="POST">
    {{ method_field('post') }}
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" name="name" />
    <br>
    <label for="bundle">bundle</label>
    <select name="bundle_id" id="bundle">
        @foreach( $recipeBundles as $recipeBundle )
            <option value="{{ $recipeBundle->id }}">{{ $recipeBundle->title }}</option>
        @endforeach
    </select>
    <br>
    <label for="method">Method</label>
    <textarea name="method" id="method" cols="30" rows="10"></textarea>
    <br>
    <label for="prepTime">Prep time</label>
    <input type="text" name="prepTime">
    <br>
    <label for="cookTime">Cook time</label>
    <input type="text" name="cookTime">
    <br>
    <label for="desc">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" value="Save recipe">
</form>
@stop