<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    public function createTask(Request $request)
    {
        $task = Task::create($request->all());
        return response()->json($task->id);
    }

    public function getAllTasks()
    {
        $tasks = Task::all();
        return response()->json($tasks);
    }

    public function getTasksByUserId(int $id)
    {
        $tasks = Task::where('publisher_id', $id)->orWhere('volunteer_id', $id);
        return response()->json($tasks);
    }
}
