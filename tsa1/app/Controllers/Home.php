<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $taskModel = new \App\Models\TaskModel();

    $data['tasks'] = $taskModel
        ->where('task_date', date('Y-m-d'))
        ->findAll();

return view('welcome', $data);
    }
}
