<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Tasks extends BaseController
{
    public function index()
    {
        $taskModel = new \App\Models\TaskModel();

    $data['tasks'] = $taskModel
    ->orderBy('task_date', 'ASC')
    ->findAll();

return view('tasks', $data);
    }
}
