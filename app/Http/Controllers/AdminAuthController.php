<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    private $adminCredentials = [
        [
            'email' => 'admin@business.com',
            'password' => 'admin123',
            'name' => 'System Administrator',
            'role' => 'Admin'
        ],
        [
            'email' => 'manager@business.com',
            'password' => 'manager123',
            'name' => 'Business Manager',
            'role' => 'Manager'
        ],
        [
            'email' => 'supervisor@business.com',
            'password' => 'supervisor123',
            'name' => 'Operations Supervisor',
            'role' => 'Supervisor'
        ]
    ];

    public function showLogin()
    {
        // Check if already logged in
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }

        return view('admin.login', [
            'credentials' => $this->adminCredentials
        ]);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        foreach ($this->adminCredentials as $admin) {
            if ($admin['email'] === $email && $admin['password'] === $password) {
                session([
                    'admin_logged_in' => true,
                    'admin_user' => $admin
                ]);
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials');
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user']);
        return redirect()->route('admin.login')->with('message', 'Successfully logged out');
    }
}