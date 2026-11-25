<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use Carbon\Carbon;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $today = Carbon::today();

        $tasks = [
            ['title' => 'Review Laravel lessons', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Complete TSA3 activity', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Study Eloquent models', 'status' => 'completed', 'task_date' => $today],
            ['title' => 'Prepare project documentation', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Install Laravel framework', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Configure MySQL database', 'status' => 'completed', 'task_date' => $today->copy()->subDay()],
            ['title' => 'Submit GitHub repository', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
            ['title' => 'Test Laravel application', 'status' => 'pending', 'task_date' => $today->copy()->addDay()],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
