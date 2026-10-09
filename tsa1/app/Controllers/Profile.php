<?php

namespace App\Controllers;

use App\Models\UserModel;

class Profile extends BaseController
{
    public function index(): string
    {
        $userModel = new UserModel();

        // Retrieve the single demo user
        $data['user'] = $userModel->first();

        return view('profile', $data);
    }
}
