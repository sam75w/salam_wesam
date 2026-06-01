<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel Project')</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 40px;
        }

        .navbar {
            width: 800px;
            margin: 0 auto 20px auto;
            background-color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .navbar a {
            margin: 0 12px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .container {
            width: 800px;
            margin: auto;
            background-color: white;
            padding: 25px;
            border-radius: 8px;
        }

        h1 {
            text-align: center;
        }

        input {
            padding: 8px;
            margin: 5px;
        }

        button {
            padding: 8px 12px;
            cursor: pointer;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        th, td {
            border-bottom: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .delete-btn {
            background-color: red;
            color: white;
            border: none;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="/tasks">Tasks</a>
        <a href="/users">Users</a>
        <a href="/about">About</a>
    </div>

    @yield('content')

</body>
</html>