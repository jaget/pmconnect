@extends('layout')
@section('content')
    <h2>Add new recipe pantry</h2>
    @if(count($errors) > 0)
        {{ $errors }}
    @endif
    <form action="{{ route('recipesPantries.store') }}" method="POST">
        {{ method_field('post') }}
        {{ csrf_field() }}
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ (old('name')?old('name'):$recipePantry->name) }}"/>
        <input type="submit" value="Save recipe pantry">
    </form>
@stop