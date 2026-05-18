<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f4;
            padding: 40px;
        }

        .container {
            width: 500px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 10px;
        }

        h1 {
            text-align: center;
        }

        .add-form {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        input {
            flex: 1;
            padding: 10px;
        }

        button {
            padding: 10px 15px;
            cursor: pointer;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .delete-button {
            background: red;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

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
        <button class="delete-button" type="submit">Delete</button>
    </form>
</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>