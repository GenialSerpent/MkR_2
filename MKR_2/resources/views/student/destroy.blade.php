@extends('layouts.app')
@section('content')
    <p>
        Student {{$student->name}} was deleted
    </p>

    <p>
        <a href="{{URL::to('students')}}"> Return </a> to posts list
    </p>
@endsection
