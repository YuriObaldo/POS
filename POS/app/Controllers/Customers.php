<?php

namespace App\Controllers;

class Customers extends BaseController
{
    public function index(): string
    {
        $customers = [
            ['full_name' => 'Maria Santos', 'email' => 'maria.santos@example.com', 'phone' => '(555) 010-1001'],
            ['full_name' => 'James Carter', 'email' => 'james.carter@example.com', 'phone' => '(555) 010-1002'],
            ['full_name' => 'Aisha Rahman', 'email' => 'aisha.rahman@example.com', 'phone' => '(555) 010-1003'],
            ['full_name' => 'Daniel Kim', 'email' => 'daniel.kim@example.com', 'phone' => '(555) 010-1004'],
            ['full_name' => 'Sofia Garcia', 'email' => 'sofia.garcia@example.com', 'phone' => '(555) 010-1005'],
        ];

        return view('customers', [
            'title' => 'Customer Accounts',
            'customers' => $customers,
        ]);
    }
}
