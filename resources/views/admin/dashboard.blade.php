@extends('layouts.admin')

@section('title', 'Dashboard - AI DevStudio Admin')
@section('page-title', 'Dashboard')
@section('page-description', 'Platform overview and key metrics')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 gap-6">
        <!-- Total Users -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">Total Users</p>
                    <p class="text-3xl font-bold text-slate-800">{{ number_format($stats['total_users']) }}</p>
                    <p class="text-sm text-green-600 font-medium">+12.5% from last month</p>
                </div>
                <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Active Projects -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">Active Projects</p>
                    <p class="text-3xl font-bold text-slate-800">{{ number_format($stats['active_projects']) }}</p>
                    <p class="text-sm text-green-600 font-medium">+8.2% from last month</p>
                </div>
                <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- AI Generations -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">AI Generations</p>
                    <p class="text-3xl font-bold text-slate-800">{{ number_format($stats['ai_generations']) }}</p>
                    <p class="text-sm text-green-600 font-medium">+24.1% from last month</p>
                </div>
                <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- GitHub Integrations -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">GitHub Repos</p>
                    <p class="text-3xl font-bold text-slate-800">{{ number_format($stats['github_integrations']) }}</p>
                    <p class="text-sm text-green-600 font-medium">+18.7% from last month</p>
                </div>
                <div class="w-12 h-12 bg-gray-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Monthly Revenue -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">Monthly Revenue</p>
                    <p class="text-3xl font-bold text-slate-800">${{ number_format($stats['monthly_revenue']) }}</p>
                    <p class="text-sm text-green-600 font-medium">+15.3% from last month</p>
                </div>
                <div class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Support Tickets -->
        <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
            <div class="flex items-center justify-between">
                <div>
                    <p class="text-sm font-medium text-slate-600">Support Tickets</p>
                    <p class="text-3xl font-bold text-slate-800">{{ $stats['support_tickets'] }}</p>
                    <p class="text-sm text-red-600 font-medium">+5 from yesterday</p>
                </div>
                <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center">
                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M12 12h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- User Growth Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-lg font-semibold text-slate-800 mb-4">User Growth</h3>
            <div class="w-full overflow-x-auto">
                <div style="width: 500px; height: 300px; min-width: 500px;">
                    <canvas id="userGrowthChart" width="500" height="300"></canvas>
                </div>
            </div>
            <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
        </div>

        <!-- Revenue Chart -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-lg font-semibold text-slate-800 mb-4">Revenue Analytics</h3>
            <div class="w-full overflow-x-auto">
                <div style="width: 500px; height: 300px; min-width: 500px;">
                    <canvas id="revenueChart" width="500" height="300"></canvas>
                </div>
            </div>
            <p class="text-sm text-slate-500 mt-4">*Fixed dimensions optimized for desktop viewing</p>
        </div>
    </div>

    <!-- Recent Activity -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Recent Users -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100">
            <div class="p-6 border-b border-slate-100">
                <h3 class="text-lg font-semibold text-slate-800">Recent Users</h3>
                <p class="text-sm text-slate-600">Latest user registrations</p>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach($recentUsers as $user)
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                        <div class="flex items-center space-x-3">
                            <div class="w-10 h-10 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-full flex items-center justify-center">
                                <span class="text-white font-semibold text-sm">{{ substr($user['name'], 0, 1) }}</span>
                            </div>
                            <div>
                                <p class="font-semibold text-slate-800">{{ $user['name'] }}</p>
                                <p class="text-sm text-slate-600">{{ $user['email'] }}</p>
                            </div>
                        </div>
                        <div class="text-right">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 text-xs rounded-full font-medium">{{ $user['plan'] }}</span>
                            <p class="text-xs text-slate-500 mt-1">{{ $user['joined'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Recent Projects -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100">
            <div class="p-6 border-b border-slate-100">
                <h3 class="text-lg font-semibold text-slate-800">Recent Projects</h3>
                <p class="text-sm text-slate-600">Latest AI-generated applications</p>
            </div>
            <div class="p-6">
                <div class="space-y-4">
                    @foreach($recentProjects as $project)
                    <div class="flex items-center justify-between p-3 bg-slate-50 rounded-lg">
                        <div>
                            <p class="font-semibold text-slate-800">{{ $project['name'] }}</p>
                            <p class="text-sm text-slate-600">by {{ $project['user'] }}</p>
                        </div>
                        <div class="text-right">
                            <span class="px-2 py-1 {{ $project['status'] == 'Deployed' ? 'bg-green-100 text-green-800' : ($project['status'] == 'Building' ? 'bg-yellow-100 text-yellow-800' : 'bg-blue-100 text-blue-800') }} text-xs rounded-full font-medium">
                                {{ $project['status'] }}
                            </span>
                            <p class="text-xs text-slate-500 mt-1">{{ $project['created'] }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // User Growth Chart
    const userCtx = document.getElementById('userGrowthChart').getContext('2d');
    new Chart(userCtx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'New Users',
                data: [1200, 1900, 3000, 5000, 7200, 9800, 11500, 12800, 14200, 15600, 16800, 18000],
                borderColor: 'rgb(147, 51, 234)',
                backgroundColor: 'rgba(147, 51, 234, 0.1)',
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            datasets: [{
                label: 'Revenue',
                data: [45000, 52000, 61000, 68000, 72000, 78000, 82000, 85000, 88000, 91000, 94000, 98000],
                backgroundColor: 'rgba(16, 185, 129, 0.8)',
                borderColor: 'rgb(16, 185, 129)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>
@endsection