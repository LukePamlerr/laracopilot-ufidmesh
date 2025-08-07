<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
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

        $stats = [
            'total_users' => 12847,
            'active_projects' => 3291,
            'ai_generations' => 156742,
            'github_integrations' => 8934,
            'monthly_revenue' => 89420,
            'support_tickets' => 234
        ];

        $recentUsers = [
            ['name' => 'Alex Johnson', 'email' => 'alex@startup.com', 'plan' => 'Pro', 'joined' => '2 hours ago'],
            ['name' => 'Maria Garcia', 'email' => 'maria@techcorp.com', 'plan' => 'Enterprise', 'joined' => '5 hours ago'],
            ['name' => 'David Kim', 'email' => 'david@devstudio.io', 'plan' => 'Starter', 'joined' => '1 day ago'],
            ['name' => 'Sarah Wilson', 'email' => 'sarah@innovate.co', 'plan' => 'Pro', 'joined' => '2 days ago']
        ];

        $recentProjects = [
            ['name' => 'E-commerce Dashboard', 'user' => 'Alex Johnson', 'status' => 'Deployed', 'created' => '3 hours ago'],
            ['name' => 'Task Management App', 'user' => 'Maria Garcia', 'status' => 'Building', 'created' => '6 hours ago'],
            ['name' => 'Portfolio Website', 'user' => 'David Kim', 'status' => 'Generated', 'created' => '1 day ago'],
            ['name' => 'Blog Platform', 'user' => 'Sarah Wilson', 'status' => 'Deployed', 'created' => '2 days ago']
        ];

        return view('admin.dashboard', compact('stats', 'recentUsers', 'recentProjects'));
    }

    public function users()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $users = [
            ['id' => 1, 'name' => 'Alex Johnson', 'email' => 'alex@startup.com', 'plan' => 'Pro', 'projects' => 12, 'status' => 'Active', 'joined' => '2023-10-15'],
            ['id' => 2, 'name' => 'Maria Garcia', 'email' => 'maria@techcorp.com', 'plan' => 'Enterprise', 'projects' => 28, 'status' => 'Active', 'joined' => '2023-09-22'],
            ['id' => 3, 'name' => 'David Kim', 'email' => 'david@devstudio.io', 'plan' => 'Starter', 'projects' => 5, 'status' => 'Active', 'joined' => '2023-11-01'],
            ['id' => 4, 'name' => 'Sarah Wilson', 'email' => 'sarah@innovate.co', 'plan' => 'Pro', 'projects' => 18, 'status' => 'Suspended', 'joined' => '2023-08-30']
        ];

        $userStats = [
            'total' => 12847,
            'active' => 11203,
            'pro' => 3421,
            'enterprise' => 892
        ];

        return view('admin.users', compact('users', 'userStats'));
    }

    public function projects()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $projects = [
            ['id' => 1, 'name' => 'E-commerce Dashboard', 'user' => 'Alex Johnson', 'type' => 'Web App', 'status' => 'Deployed', 'github_url' => 'https://github.com/alex/ecommerce-dash', 'created' => '2023-11-15'],
            ['id' => 2, 'name' => 'Task Management App', 'user' => 'Maria Garcia', 'type' => 'SaaS', 'status' => 'Building', 'github_url' => 'https://github.com/maria/task-manager', 'created' => '2023-11-14'],
            ['id' => 3, 'name' => 'Portfolio Website', 'user' => 'David Kim', 'type' => 'Website', 'status' => 'Generated', 'github_url' => 'https://github.com/david/portfolio', 'created' => '2023-11-13'],
            ['id' => 4, 'name' => 'Blog Platform', 'user' => 'Sarah Wilson', 'type' => 'CMS', 'status' => 'Deployed', 'github_url' => 'https://github.com/sarah/blog-platform', 'created' => '2023-11-12']
        ];

        return view('admin.projects', compact('projects'));
    }

    public function integrations()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $integrations = [
            'chatgpt' => ['status' => 'Connected', 'usage' => '156,742 requests', 'last_sync' => '2 minutes ago'],
            'github' => ['status' => 'Connected', 'repos' => '25,847 repositories', 'last_sync' => '5 minutes ago'],
            'supabase' => ['status' => 'Connected', 'databases' => '8,934 databases', 'last_sync' => '1 minute ago']
        ];

        return view('admin.integrations', compact('integrations'));
    }

    public function billing()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $revenue = [
            'monthly' => 89420,
            'annual' => 1072000,
            'growth' => 15.3
        ];

        $subscriptions = [
            ['plan' => 'Starter', 'users' => 8534, 'revenue' => 25602, 'price' => '$9/month'],
            ['plan' => 'Pro', 'users' => 3421, 'revenue' => 51315, 'price' => '$29/month'],
            ['plan' => 'Enterprise', 'users' => 892, 'revenue' => 26760, 'price' => '$99/month']
        ];

        return view('admin.billing', compact('revenue', 'subscriptions'));
    }

    public function analytics()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $analytics = [
            'page_views' => 245672,
            'unique_visitors' => 45891,
            'bounce_rate' => 23.4,
            'avg_session' => '4m 32s'
        ];

        return view('admin.analytics', compact('analytics'));
    }

    public function support()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $tickets = [
            ['id' => 1, 'subject' => 'GitHub integration not working', 'user' => 'alex@startup.com', 'priority' => 'High', 'status' => 'Open', 'created' => '2 hours ago'],
            ['id' => 2, 'subject' => 'Billing question about Pro plan', 'user' => 'maria@techcorp.com', 'priority' => 'Medium', 'status' => 'In Progress', 'created' => '5 hours ago'],
            ['id' => 3, 'subject' => 'Feature request: Custom templates', 'user' => 'david@devstudio.io', 'priority' => 'Low', 'status' => 'Closed', 'created' => '1 day ago']
        ];

        return view('admin.support', compact('tickets'));
    }

    public function settings()
    {
        if ($redirect = $this->checkAuth()) return $redirect;

        $settings = [
            'site_name' => 'AI DevStudio',
            'maintenance_mode' => false,
            'new_registrations' => true,
            'email_notifications' => true
        ];

        return view('admin.settings', compact('settings'));
    }
}