@extends('layouts.app')

@section('content')

    <h1> Show student </h1>

    <h3> {{$student->name }}</h3>
    <p>
        {{$student->course}}
    </p>
    <p>
        {{$student->specialty}}
    </p>

@endsection
