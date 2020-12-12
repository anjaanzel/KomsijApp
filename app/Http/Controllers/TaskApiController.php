<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskApiController extends Controller
{
    public function createTask(Request $request)
    {
        dd(1);
        $task = Task::create($request->all());
        return response()->json($task->id);
    }

    // public function getAllTasks()
    // {

    // }
}
