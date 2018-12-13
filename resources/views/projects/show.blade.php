@extends('layout')

@section('content')

    <h1>Show Project</h1>

    Name: {{ $project->title }}<br>
    Description: {{ $project->description }}<br>

    <a href="/projects/{{ $project->id }}/edit">Edit</a>
    <a href="/projects">Home</a>

    <div>
        @foreach ($project->tasks as $task)

            <form method="post" action="/complete-tasks/{{ $task->id }}">
                {{-- @method('PATCH') --}}
                @csrf
                @if ($task->completed)
                    @method('DELETE')
                @endif
                <input type="checkbox" name="completed" {{ $task->completed ? "checked" : "" }} onchange="this.form.submit()"> {{ $task->description }}<br>
            </form>

        @endforeach
    </div>

    <br><br>

    <div>
        <form method="post" action="/projects/{{ $project->id }}/tasks">
            @csrf
            <label>Add new task</label><br>
            <input type="text" name="description"><br>
            <input type="submit" value="Add Task">
        </form>
    </div>

    @include('errors')

@endsection
