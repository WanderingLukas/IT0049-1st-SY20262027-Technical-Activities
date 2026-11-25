<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Support\Carbon;

class TaskController extends Controller
{
    // Welcome page: today's tasks only
    public function index()
    {
        $tasks = Task::whereDate('task_date', Carbon::today())
            ->orderBy('id')
            ->get();

        return view('welcome', compact('tasks'));
    }

    // Task List page: all tasks ordered by date
    public function tasks()
    {
        $tasks = Task::orderBy('task_date', 'asc')
            ->orderBy('id')
            ->get();

        return view('tasks', compact('tasks'));
    }
}
