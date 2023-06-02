@extends('layouts.app')

@section('content')

    <h1> Show points </h1>

    <h3> {{$point->subject }}</h3>
    <p>
        {{$point->score}}
    </p>

@endsection
