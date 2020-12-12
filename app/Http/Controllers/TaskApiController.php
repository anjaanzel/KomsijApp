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

    public function getAcceptedTasksByUserId(int $id)
    {
        $tasks = Task::where('volunteer_id', $id)->where('status', 1)->orWhere('status', 2)->get();
        return response()->json($tasks);
    }

    public function getPublishedTasksByUserId(int $id)
    {
        $tasks = Task::where('publisher_id', $id)->get();
        return response()->json($tasks);
    }

    public function getActiveTasksByUserId(int $id)
    {
        $tasks = Task::where('Status', 0)->get();
        return response()->json($tasks);
    }

    public function login(Request $request)
    {
        $user = User::where('username', $request->username)->where('password', $request->password)->get()->first();
        return response()->json($user->id);
    }
}
