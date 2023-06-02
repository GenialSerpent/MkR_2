@extends('layouts.app')

@section('content')
    <h1>Points</h1>

    <a href="{{URL::to('points') . '/create'}}"> Create new post </a>
    @forelse($points as $point)
        <article>
            <h3>
                <a href="{{URL::to('points') . '/' . $point->id}}">
                    {{$post->title}}
                </a>
            </h3>
            <a href="{{URL::to('points') . '/' . $point->id . '/edit'}}">
                Edit
            </a>
            <form action="{{URL::to('points') . '/' . $point->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"> Delete</button>
            </form>
        </article>
    @empty
    @endforelse

@endsection
