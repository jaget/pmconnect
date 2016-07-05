@extends('layout')
@section('content')
<h2>Add new Recipe Bundle</h2>
@if(count($errors) > 0)
    {{ $errors }}
    @endif
<form action="{{ route('recipesBundles.store') }}" method="POST">
    {{ method_field('post') }}
    {{ csrf_field() }}
    <label for="title">Title</label>
    <input type="text" name="title" />
    <br>
    <label for="desc">Description</label>
    <textarea name="desc" id="desc" cols="30" rows="10"></textarea>
    <br>
    <label for="week">Week</label>
    <input type="number" name="week" value="0" min="0" max="52">
    <br>
    <label for="live">Make this bundle live?</label>
    <br>
    <span>
        No
        <input type="radio" name="live" value="0" />
    </span>
    <br>
    <span>
        Yes
        <input type="radio" name="live" value="1" checked="checked" />
    </span>
    <br>
    <input type="submit" value="Save recipe bundle">
</form>
@stop