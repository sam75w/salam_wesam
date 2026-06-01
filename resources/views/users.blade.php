@extends('layouts.app')

@section('title', 'Users List')

@section('content')
    <div class="container">
        <h1>Users List</h1>

        @if ($errors->any())
            <div style="background: #ffdede; color: #900; padding: 10px; margin-bottom: 15px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form class="add-form" action="/users" method="POST">
            @csrf

            <input type="text" name="name" placeholder="User name" value="{{ old('name') }}">
            <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
            <input type="password" name="password" placeholder="Password">

            <button type="submit">Add User</button>
        </form>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="/users/{{ $user->id }}/edit">Edit</a>

                            <form action="/users/{{ $user->id }}/delete" method="POST" style="display: inline;">
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