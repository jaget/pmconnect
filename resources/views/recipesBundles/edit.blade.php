@extends('layout')

@section('content')
    <form action="{{ route('recipesBundles.update', $recipeBundle) }}" method="POST">
        {{ method_field('patch') }}
        {{ csrf_field() }}
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ (old('title')?old('title'):$recipeBundle->title) }}"/>
        <br>
        <label for="desc">Description</label>
        <textarea name="desc" id="desc" cols="30" rows="10">{{ (old('desc')?old('desc'):$recipeBundle->desc) }}</textarea>
        <br>
        <label for="week">Week</label>
        <input type="number" name="week" min="0" max="52" value="{{ (old('week')?old('week'):$recipeBundle->week) }}">
        <br>
        <label for="live">Make this bundle live?</label>
        <br>
        <span>
        No
        <input type="radio" name="live" value="0" {{ (old('live') == 0 || $recipeBundle->live == 0?'checked="checked"':'') }} />
    </span>
        <br>
        <span>
        Yes
        <input type="radio" name="live" value="1" {{ (old('live') == 1 || $recipeBundle->live == 1?'checked="checked"':'') }} />
    </span>
        <br>
        <input type="submit" value="Upvdate recipe">
    </form>
@stop