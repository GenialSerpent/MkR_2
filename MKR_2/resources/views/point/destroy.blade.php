@extends('layouts.app')
@section('content')
    <p>
        Points {{$point->subject}} was deleted
    </p>

    <p>
        <a href="{{URL::to('points')}}"> Return </a> to posts list
    </p>
@endsection
