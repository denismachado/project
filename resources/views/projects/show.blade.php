@extends('layout')

@section('content')

    <h1>Show Project</h1>

    Name: {{ $project->title }}<br>
    Description: {{ $project->description }}<br>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    <a href="/projects">Home</a>

    <div>
        @foreach ($project->tasks as $task)

            <form method="post" action="/tasks/{{ $task->id }}">
                @method('PATCH')
                @csrf
                <input type="checkbox" name="completed" {{ $task->completed ? "checked" : "" }} onchange="this.form.submit()"> {{ $task->description }}<br>
            </form>

        @endforeach
    </div>

@endsection
