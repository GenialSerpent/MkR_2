@extends('layouts.app')
@section('content')
    <p>
        Point {{$point->subect}} was updated
    </p>

    <p>
        <a href="{{URL::to('points')}}"> Return </a> to posts list
    </p>
@endsection
