@extends('layouts.admin')

@section('title', 'Reports - BusinessPro')
@section('page-title', 'Reports & Analytics')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @foreach($data['report_stats'] as $stat)
    <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-600">{{ $stat['title'] }}</p>
                <p class="text-3xl font-bold text-slate-800">{{ $stat['value'] }}</p>
            </div>
            <div class="w-12 h-12 bg-{{ $stat['color'] }}-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Reports Chart -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6 mb-8">
    <h3 class="text-lg font-semibold text-slate-800 mb-4">Report Types Distribution</h3>
    <div class="w-full overflow-x-auto">
        <div style="width: 600px; height: 400px; min-width: 600px;">
            <canvas id="reportsChart" width="600" height="400"></canvas>
        </div>
    </div>
    <p class="text-sm text-slate-500 mt-4">*Fixed chart optimized for desktop viewing</p>
</div>

<!-- Recent Reports -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-slate-800">Recent Reports</h2>
            <div class="flex space-x-3">
                <select class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option>All Types</option>
                    <option>Sales</option>
                    <option>Analytics</option>
                    <option>Financial</option>
                    <option>Feedback</option>
                    <option>Technical</option>
                </select>
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                    Generate Report
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Report</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Type</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Date</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Size</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['recent_reports'] as $report)
                    <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors duration-200">
                        <td class="py-4 px-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                                    </svg>
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800">{{ $report['title'] }}</p>
                                    <p class="text-sm text-slate-500">ID: {{ $report['id'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                {{ $report['type'] }}
                            </span>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                @if($report['status'] == 'Completed') bg-green-100 text-green-800
                                @elseif($report['status'] == 'Processing') bg-yellow-100 text-yellow-800
                                @else bg-red-100 text-red-800 @endif">
                                {{ $report['status'] }}
                            </span>
                        </td>
                        <td class="py-4 px-4 text-slate-600">{{ $report['date'] }}</td>
                        <td class="py-4 px-4 text-slate-600">{{ $report['size'] }}</td>
                        <td class="py-4 px-4">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Download</button>
                                <button class="text-green-600 hover:text-green-800 font-medium text-sm">View</button>
                                <button class="text-red-600 hover:text-red-800 font-medium text-sm">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // Reports Chart
    const reportsCtx = document.getElementById('reportsChart').getContext('2d');
    new Chart(reportsCtx, {
        type: 'doughnut',
        data: {
            labels: {!! json_encode($data['chart_data']['labels']) !!},
            datasets: [{
                data: {!! json_encode($data['chart_data']['data']) !!},
                backgroundColor: [
                    '#3B82F6',
                    '#8B5CF6',
                    '#10B981',
                    '#F59E0B',
                    '#EF4444'
                ],
                borderWidth: 2,
                borderColor: '#ffffff'
            }]
        },
        options: {
            responsive: false,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    position: 'right'
                }
            }
        }
    });
});
</script>
@endsection