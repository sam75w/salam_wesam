@extends('layouts.app')

@section('title', 'Task List')

@section('content')
    <div class="container">
        <h1>Task List</h1>

        <form class="add-form" action="/tasks" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter task name">
            <button type="submit">Add Task</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Task Name</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>
                            <a href="/tasks/{{ $task->id }}/edit">Edit</a>

                            <form action="/tasks/{{ $task->id }}/delete" method="POST" style="display: inline;">
                                @csrf
                                <button class="delete-btn" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection