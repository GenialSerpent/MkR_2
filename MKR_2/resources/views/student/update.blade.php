@extends('layouts.app')
@section('content')
    <p>
        Student {{$studet->name}} was updated
    </p>

    <p>
        <a href="{{URL::to('students')}}"> Return </a> to posts list
    </p>
@endsection
