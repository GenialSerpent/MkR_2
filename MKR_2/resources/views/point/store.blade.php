@extends('layouts.app')
@section('content')
    <p>
        Point {{$point->subject}} was stored
    </p>

    <p>
        <a href="{{URL::to('points')}}"> Return </a> to points list
    </p>
@endsection
