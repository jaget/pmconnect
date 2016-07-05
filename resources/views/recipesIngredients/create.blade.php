@extends('layout')
@section('content')
<h2>Add new ingredient</h2>
@if(count($errors) > 0)
    {{ $errors }}
@endif
<form action="{{ route('recipesIngredients.store') }}" method="POST">
    {{ method_field('post') }}
    {{ csrf_field() }}
    <label for="recipe">Owning Recipe</label>
    <select name="recipe_id" id="recipe">
        @foreach( $recipes as $recipe )
            <option value="{{ $recipe->id }}">{{ $recipe->name }}</option>
        @endforeach
    </select>
    <br>
    <label for="ingredient">Ingredient</label>
    <select name="ingredient_id" id="ingredient">
        @foreach( $ingredients as $ingredient )
            <option value="{{ $ingredient->id }}">{{ $ingredient->name }}</option>
        @endforeach
    </select>
    <input type="text" name="ingredient_id" id="ingredient" value="1">
    <br>
    <label for="measurement">Measurement</label>
    <select name="measurement" id="measurement">
        @foreach( $measurements as $measurement )
            <option value="{{ $measurement }}">{{ $measurement }}</option>
        @endforeach
    </select>
    <br>
    <label for="quantity">Quantity</label>
    <input type="text" name="quantity">
    <br>
    <input type="submit" value="Save ingredient">
</form>
@stop