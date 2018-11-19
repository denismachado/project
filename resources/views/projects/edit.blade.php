@extends('layout')

@section('content')

    <h1>Edit Project</h1>

    <form method="POST" action="/projects/{{ $project->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <input type="text" name="title" value="{{ $project->title }}">
        <textarea name="description">{{ $project->description }}</textarea>
        <button type="submit">EDIT</button>
    </form>

    @if($errors->any())
    <div class="notification">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="/projects/{{ $project->id }}">
        @method('DELETE')
        @csrf
        <button type="submit">DELETE</button>
    </form>

    <a href="/projects">Home</a>

@endsection
