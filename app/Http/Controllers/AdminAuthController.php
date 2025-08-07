<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminAuthController extends Controller
{
    // Static admin credentials for demo
    private $adminUsers = [
        [
            'email' => 'admin@aidevstudio.com',
            'password' => 'admin123',
            'name' => 'System Administrator',
            'role' => 'Super Admin'
        ],
        [
            'email' => 'manager@aidevstudio.com', 
            'password' => 'manager123',
            'name' => 'Platform Manager',
            'role' => 'Manager'
        ],
        [
            'email' => 'support@aidevstudio.com',
            'password' => 'support123', 
            'name' => 'Support Lead',
            'role' => 'Support'
        ]
    ];

    public function showLogin()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.login', ['credentials' => $this->adminUsers]);
    }

    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        foreach ($this->adminUsers as $user) {
            if ($user['email'] === $email && $user['password'] === $password) {
                session([
                    'admin_logged_in' => true,
                    'admin_user' => $user
                ]);
                
                return redirect()->route('admin.dashboard')->with('success', 'Welcome back, ' . $user['name']);
            }
        }

        return redirect()->route('admin.login')->with('error', 'Invalid credentials. Please check the demo credentials below.');
    }

    public function logout()
    {
        session()->forget(['admin_logged_in', 'admin_user']);
        return redirect()->route('admin.login')->with('success', 'Logged out successfully');
    }
}