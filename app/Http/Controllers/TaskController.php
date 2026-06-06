<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view('tasks', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect('/tasks');
    }

    public function edit($id)
    {
        $task = Task::findOrFail($id);

        return view('edit-task', compact('task'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $task = Task::findOrFail($id);
        $task->name = $request->name;
        $task->save();

        return redirect('/tasks');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();

        return redirect('/tasks');
    }
}