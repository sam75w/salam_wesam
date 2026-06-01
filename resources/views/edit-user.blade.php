@extends('layouts.app')

@section('title', 'Edit User')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        @if ($errors->any())
            <div style="background: #ffdede; color: #900; padding: 10px; margin-bottom: 15px;">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="/users/{{ $user->id }}/update" method="POST">
            @csrf

            <input type="text" name="name" value="{{ old('name', $user->name) }}" placeholder="User name">

            <br><br>

            <input type="email" name="email" value="{{ old('email', $user->email) }}" placeholder="Email">

            <br><br>

            <input type="password" name="password" placeholder="New password - leave empty to keep old password">

            <br><br>

            <button type="submit">Update User</button>
        </form>

        <br>

        <a href="/users">Back to Users</a>
    </div>
@endsection