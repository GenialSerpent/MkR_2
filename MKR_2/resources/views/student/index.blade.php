@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    <a href="{{URL::to('students') . '/create'}}"> Create new post </a>
    @forelse($students as $student)
        <article>
            <h3>
                <a href="{{URL::to('students') . '/' . $student->id}}">
                    {{$post->title}}
                </a>
            </h3>
            <a href="{{URL::to('students') . '/' . $student->id . '/edit'}}">
                Edit
            </a>
            <form action="{{URL::to('students') . '/' . $student->id}}" method="post">
                @csrf
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit"> Delete</button>
            </form>
        </article>
    @empty
        <p>
            No posts
        </p>
    @endforelse

@endsection
