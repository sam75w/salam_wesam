<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/tasks', function () {
    $tasks = DB::table('tasks')->get();

    return view('tasks', compact('tasks'));
});

Route::post('/tasks', function () {
    DB::table('tasks')->insert([
        'name' => request('name'),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect('/tasks');
});

Route::post('/tasks/{id}/delete', function ($id) {
    DB::table('tasks')->where('id', $id)->delete();

    return redirect('/tasks');
});
Route::get('/tasks/{id}/edit', function ($id) {
    $task = DB::table('tasks')->where('id', $id)->first();

    return view('edit-task', compact('task'));
});

Route::post('/tasks/{id}/update', function ($id) {
    DB::table('tasks')->where('id', $id)->update([
        'name' => request('name'),
        'updated_at' => now(),
    ]);

    return redirect('/tasks');
});