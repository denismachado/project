@extends('layout')

@section('content')

    <h1>Show Project</h1>

    Name: {{ $project->title }}<br>
    Description: {{ $project->description }}<br>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    <a href="/projects">Home</a>

@endsection
