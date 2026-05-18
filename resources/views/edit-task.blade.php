<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>

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

        form {
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

        a {
            display: inline-block;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Task</h1>

        <form action="/tasks/{{ $task->id }}/update" method="POST">
            @csrf
            <input type="text" name="name" value="{{ $task->name }}">
            <button type="submit">Update Task</button>
        </form>

        <a href="/tasks">Back to Tasks</a>
    </div>

</body>
</html>