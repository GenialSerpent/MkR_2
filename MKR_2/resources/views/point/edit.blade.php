@extends('layouts.app')
@section('content')
    <h1> Edit points</h1>

    <form action="{{URL::to('points') .'/' . $point->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>
            Point
            <input name="title" type="text" value="{{$point->score}}">
        </label>
        <br>
        <label> For </label>
        <textarea name="text" rows="5" cols="50">{{$point->subject}}</textarea>
        <br>
        <button type="submit">
            Edit
        </button>
    </form>
@endsection
