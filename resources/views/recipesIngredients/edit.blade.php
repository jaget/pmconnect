@extends('layout')
@section('content')
    <h2>Add new ingredient</h2>
    @if(count($errors) > 0)
        {{ $errors }}
    @endif
    <form action="{{ route('recipesIngredients.update', $recipesIngredient) }}" method="POST">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <label for="recipe">Owning Recipe</label>
        <select name="recipe_id" id="recipe">
            @foreach( $recipes as $recipe )
                <option value="{{ $recipe->id }}" {{ ((old('recipe_id') == $recipe->id || $recipesIngredient->recipe_id == $recipe->id)?'selected="selected"':'') }} >{{ $recipe->name }}</option>
            @endforeach
        </select>
        <br>
        <label for="ingredient">Ingredient</label>
        <select name="ingredient_id" id="ingredient">
            @foreach( $ingredients as $ingredient )
                <option value="{{ $ingredient->id }}" {{ ((old('ingredient_id') == $ingredient->id || $recipesIngredient->ingredient_id == $ingredient->id)?'selected="selected"':'') }}>{{ $ingredient->name }}</option>
            @endforeach
        </select>
        <input type="text" name="ingredient_id" id="ingredient" value="1">
        <br>
        <label for="measurement">Measurement</label>
        <select name="measurement" id="measurement">
            @foreach( $measurements as $measurement )
                <option value="{{ $measurement }}" {{ ((old('measurement') == $measurement || $recipesIngredient->measurement == $measurement)?'selected="selected"':'') }}>{{ $measurement }}</option>
            @endforeach
        </select>
        <br>
        <label for="quantity">Quantity</label>
        <input type="text" name="quantity" value="{{ (old('quantity')?old('quantity'):$recipesIngredient->quantity) }}">
        <br>
        <input type="submit" value="Save ingredient">
    </form>
@stop