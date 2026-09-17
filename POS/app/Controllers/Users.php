<?php

namespace App\Controllers;

class Users extends BaseController
{
    public function index(): string
    {
        $users = [
            ['username' => 'maria.santos', 'full_name' => 'Maria Santos', 'role' => 'Administrator'],
            ['username' => 'james.carter', 'full_name' => 'James Carter', 'role' => 'Cashier'],
            ['username' => 'aisha.rahman', 'full_name' => 'Aisha Rahman', 'role' => 'Manager'],
            ['username' => 'daniel.kim', 'full_name' => 'Daniel Kim', 'role' => 'Cashier'],
            ['username' => 'sofia.garcia', 'full_name' => 'Sofia Garcia', 'role' => 'Inventory Clerk'],
        ];

        return view('users', [
            'title' => 'User Accounts',
            'users' => $users,
        ]);
    }
}
