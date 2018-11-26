
@extends('layout')

@section('content')

    <h1>Create New Projects</h1>

    <form method="post" action="/projects">
        {{ csrf_field() }}
        <input type="text" name="title" placeholder="project title" value="{{ old('title') }}">
        <textarea name="description" name="description" cols="30" rows="10">{{ old('description') }}</textarea>
        <button type="submit">Create Project</button>
    </form>

    @include('errors')

@endsection
