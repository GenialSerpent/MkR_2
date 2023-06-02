@extends('layouts.app')
@section('content')
    <h1> Edit post</h1>

    <form action="{{URL::to('students') .'/' . $student->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PATCH">
        <label>
            Name
            <input name="title" type="text" value="{{$student->name}}">
        </label>
        <br>
        <label> Course </label>
        <textarea name="text" rows="5" cols="50">{{$student->course}}</textarea>
        <br>
        <label> Speciality </label>
        <textarea name="text" rows="5" cols="50">{{$student->specialty}}</textarea>
        <br>
        <button type="submit">
            Edit
        </button>
    </form>
@endsection
