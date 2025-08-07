@extends('layouts.admin')

@section('title', 'Admin Dashboard - BusinessPro')
@section('page-title', 'Dashboard Overview')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @foreach($data['stats'] as $stat)
    <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100 hover:shadow-xl transition-shadow duration-300">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-600">{{ $stat['title'] }}</p>
                <p class="text-3xl font-bold text-slate-800">{{ $stat['value'] }}</p>
                <p class="text-sm text-{{ $stat['color'] }}-600 font-medium mt-1">{{ $stat['change'] }} from last month</p>
            </div>
            <div class="w-12 h-12 bg-{{ $stat['color'] }}-100 rounded-xl flex items-center justify-center">
                @if($stat['icon'] == 'users')
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                @elseif($stat['icon'] == 'currency')
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                    </svg>
                @elseif($stat['icon'] == 'shopping')
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                    </svg>
                @elseif($stat['icon'] == 'chart')
                    <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                @endif
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Charts Section -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-8">
    <!-- Revenue Chart -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">Revenue Trend</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 500px; height: 300px; min-width: 500px;">
                <canvas id="revenueChart" width="500" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed chart optimized for desktop viewing</p>
    </div>

    <!-- Users Chart -->
    <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
        <h3 class="text-lg font-semibold text-slate-800 mb-4">User Growth</h3>
        <div class="w-full overflow-x-auto">
            <div style="width: 500px; height: 300px; min-width: 500px;">
                <canvas id="usersChart" width="500" height="300"></canvas>
            </div>
        </div>
        <p class="text-sm text-slate-500 mt-4">*Fixed chart optimized for desktop viewing</p>
    </div>
</div>

<!-- Recent Activities -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-slate-800">Recent Activities</h2>
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                View All
            </button>
        </div>

        <div class="space-y-4">
            @foreach($data['recent_activities'] as $activity)
            <div class="flex items-center space-x-4 p-4 bg-slate-50 rounded-xl hover:bg-slate-100 transition-colors duration-200">
                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold text-sm">
                    {{ substr($activity['user'], 0, 1) }}
                </div>
                <div class="flex-1">
                    <p class="text-slate-800 font-medium">{{ $activity['action'] }}</p>
                    <p class="text-slate-600 text-sm">{{ $activity['user'] }}</p>
                </div>
                <div class="text-right">
                    <p class="text-slate-500 text-sm">{{ $activity['time'] }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'line',
        data: {
            labels: {!! json_encode($data['chart_data']['labels']) !!},
            datasets: [{
                label: 'Revenue ($)',
                data: {!! json_encode($data['chart_data']['datasets']['revenue']) !!},
                borderColor: 'rgb(59, 130, 246)',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 3,
                fill: true,
                tension: 0.4
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Users Chart
    const usersCtx = document.getElementById('usersChart').getContext('2d');
    new Chart(usersCtx, {
        type: 'bar',
        data: {
            labels: {!! json_encode($data['chart_data']['labels']) !!},
            datasets: [{
                label: 'New Users',
                data: {!! json_encode($data['chart_data']['datasets']['users']) !!},
                backgroundColor: 'rgba(147, 51, 234, 0.8)',
                borderColor: 'rgb(147, 51, 234)',
                borderWidth: 2
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: true
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
@endsection