<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Simple session check
    }

    private function checkAuth()
    {
        if (!session('admin_logged_in')) {
            return redirect()->route('admin.login');
        }
        return null;
    }

    public function dashboard()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $data = [
            'stats' => [
                ['title' => 'Total Users', 'value' => '2,847', 'change' => '+12%', 'icon' => 'users', 'color' => 'blue'],
                ['title' => 'Revenue', 'value' => '$48,392', 'change' => '+8%', 'icon' => 'currency', 'color' => 'green'],
                ['title' => 'Orders', 'value' => '1,429', 'change' => '+23%', 'icon' => 'shopping', 'color' => 'purple'],
                ['title' => 'Growth', 'value' => '94.2%', 'change' => '+5%', 'icon' => 'chart', 'color' => 'orange']
            ],
            'recent_activities' => [
                ['action' => 'New user registered', 'user' => 'john@example.com', 'time' => '2 minutes ago'],
                ['action' => 'Order completed', 'user' => 'sarah@example.com', 'time' => '5 minutes ago'],
                ['action' => 'Payment received', 'user' => 'mike@example.com', 'time' => '10 minutes ago'],
                ['action' => 'Profile updated', 'user' => 'emma@example.com', 'time' => '15 minutes ago'],
                ['action' => 'New subscription', 'user' => 'david@example.com', 'time' => '20 minutes ago']
            ],
            'chart_data' => [
                'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                'datasets' => [
                    'revenue' => [12000, 19000, 15000, 25000, 22000, 30000],
                    'users' => [450, 620, 580, 720, 680, 850]
                ]
            ]
        ];

        return view('admin.dashboard', compact('data'));
    }

    public function users()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $data = [
            'stats' => [
                ['title' => 'Total Users', 'value' => '2,847', 'color' => 'blue'],
                ['title' => 'Active Today', 'value' => '1,429', 'color' => 'green'],
                ['title' => 'New This Month', 'value' => '324', 'color' => 'purple'],
                ['title' => 'Inactive', 'value' => '127', 'color' => 'red']
            ],
            'users' => [
                ['id' => 1, 'name' => 'John Smith', 'email' => 'john@example.com', 'role' => 'Admin', 'status' => 'Active', 'joined' => '2024-01-15'],
                ['id' => 2, 'name' => 'Sarah Johnson', 'email' => 'sarah@example.com', 'role' => 'User', 'status' => 'Active', 'joined' => '2024-01-20'],
                ['id' => 3, 'name' => 'Mike Wilson', 'email' => 'mike@example.com', 'role' => 'Moderator', 'status' => 'Active', 'joined' => '2024-01-25'],
                ['id' => 4, 'name' => 'Emma Davis', 'email' => 'emma@example.com', 'role' => 'User', 'status' => 'Inactive', 'joined' => '2024-02-01'],
                ['id' => 5, 'name' => 'David Brown', 'email' => 'david@example.com', 'role' => 'User', 'status' => 'Active', 'joined' => '2024-02-05']
            ]
        ];

        return view('admin.users', compact('data'));
    }

    public function settings()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $data = [
            'general_settings' => [
                'site_name' => 'Business Platform',
                'site_description' => 'Modern business management solution',
                'contact_email' => 'contact@business.com',
                'support_email' => 'support@business.com',
                'timezone' => 'UTC',
                'language' => 'English'
            ],
            'notification_settings' => [
                'email_notifications' => true,
                'sms_notifications' => false,
                'push_notifications' => true,
                'marketing_emails' => true
            ],
            'security_settings' => [
                'two_factor_auth' => true,
                'session_timeout' => '30 minutes',
                'password_expiry' => '90 days',
                'login_attempts' => '5'
            ]
        ];

        return view('admin.settings', compact('data'));
    }

    public function reports()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $data = [
            'report_stats' => [
                ['title' => 'Total Reports', 'value' => '156', 'color' => 'blue'],
                ['title' => 'This Month', 'value' => '42', 'color' => 'green'],
                ['title' => 'Pending Review', 'value' => '8', 'color' => 'orange'],
                ['title' => 'Resolved', 'value' => '134', 'color' => 'purple']
            ],
            'recent_reports' => [
                ['id' => 1, 'title' => 'Monthly Sales Report', 'type' => 'Sales', 'status' => 'Completed', 'date' => '2024-01-15', 'size' => '2.4 MB'],
                ['id' => 2, 'title' => 'User Activity Analysis', 'type' => 'Analytics', 'status' => 'Processing', 'date' => '2024-01-14', 'size' => '1.8 MB'],
                ['id' => 3, 'title' => 'Financial Summary Q1', 'type' => 'Financial', 'status' => 'Completed', 'date' => '2024-01-13', 'size' => '3.2 MB'],
                ['id' => 4, 'title' => 'Customer Feedback Report', 'type' => 'Feedback', 'status' => 'Pending', 'date' => '2024-01-12', 'size' => '1.5 MB'],
                ['id' => 5, 'title' => 'System Performance Log', 'type' => 'Technical', 'status' => 'Completed', 'date' => '2024-01-11', 'size' => '4.1 MB']
            ],
            'chart_data' => [
                'labels' => ['Sales', 'Analytics', 'Financial', 'Feedback', 'Technical'],
                'data' => [35, 28, 22, 18, 15]
            ]
        ];

        return view('admin.reports', compact('data'));
    }
}