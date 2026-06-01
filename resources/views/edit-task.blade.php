@extends('layouts.app')

@section('title', 'Edit Task')

@section('content')
    <div class="container">
        <h1>Edit Task</h1>

        <form action="/tasks/{{ $task->id }}/update" method="POST">
            @csrf

            <input type="text" name="name" value="{{ $task->name }}" placeholder="Enter task name">

            <button type="submit">Update Task</button>
        </form>

        <br>

        <a href="/tasks">Back to Tasks</a>
    </div>
@endsection