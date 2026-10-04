<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index()
    {
        $data['users'] = [
            [
                'username' => 'admin',
                'full_name' => 'Luke De Guzman',
                'role' => 'Administrator'
            ],
            [
                'username' => 'cashier01',
                'full_name' => 'Maria Santos',
                'role' => 'Cashier'
            ],
            [
                'username' => 'manager01',
                'full_name' => 'Juan Dela Cruz',
                'role' => 'Manager'
            ],
            [
                'username' => 'staff01',
                'full_name' => 'Ana Garcia',
                'role' => 'Sales Staff'
            ],
            [
                'username' => 'staff02',
                'full_name' => 'Carlo Mendoza',
                'role' => 'Inventory Staff'
            ]
        ];

        return view('users', $data);
    }
}