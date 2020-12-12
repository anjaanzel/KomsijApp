<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
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

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->where('password', $request->password)->get()->first();
        return response()->json($user->id);
    }
}
