@extends('layouts.admin')

@section('title', 'Users Management - BusinessPro')
@section('page-title', 'Users Management')

@section('content')
<!-- Stats Cards -->
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
    @foreach($data['stats'] as $stat)
    <div class="bg-white rounded-2xl p-6 shadow-lg border border-slate-100">
        <div class="flex items-center justify-between">
            <div>
                <p class="text-sm font-medium text-slate-600">{{ $stat['title'] }}</p>
                <p class="text-3xl font-bold text-slate-800">{{ $stat['value'] }}</p>
            </div>
            <div class="w-12 h-12 bg-{{ $stat['color'] }}-100 rounded-xl flex items-center justify-center">
                <svg class="w-6 h-6 text-{{ $stat['color'] }}-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a4 4 0 11-8 0 4 4 0 018 0z"/>
                </svg>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- Users Table -->
<div class="bg-white rounded-2xl shadow-lg border border-slate-100">
    <div class="p-6">
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-xl font-semibold text-slate-800">All Users</h2>
            <div class="flex space-x-3">
                <input type="text" placeholder="Search users..." class="px-4 py-2 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 shadow-md hover:shadow-lg">
                    Add User
                </button>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead>
                    <tr class="border-b border-slate-200">
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">User</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Email</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Role</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Status</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Joined</th>
                        <th class="text-left py-3 px-4 font-semibold text-slate-700">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data['users'] as $user)
                    <tr class="border-b border-slate-100 hover:bg-slate-50 transition-colors duration-200">
                        <td class="py-4 px-4">
                            <div class="flex items-center space-x-3">
                                <div class="w-10 h-10 bg-gradient-to-r from-blue-500 to-purple-600 rounded-full flex items-center justify-center text-white font-bold">
                                    {{ substr($user['name'], 0, 1) }}
                                </div>
                                <div>
                                    <p class="font-medium text-slate-800">{{ $user['name'] }}</p>
                                    <p class="text-sm text-slate-500">ID: {{ $user['id'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td class="py-4 px-4 text-slate-600">{{ $user['email'] }}</td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                @if($user['role'] == 'Admin') bg-purple-100 text-purple-800
                                @elseif($user['role'] == 'Moderator') bg-blue-100 text-blue-800
                                @else bg-gray-100 text-gray-800 @endif">
                                {{ $user['role'] }}
                            </span>
                        </td>
                        <td class="py-4 px-4">
                            <span class="px-3 py-1 rounded-full text-xs font-medium 
                                @if($user['status'] == 'Active') bg-green-100 text-green-800
                                @else bg-red-100 text-red-800 @endif">
                                {{ $user['status'] }}
                            </span>
                        </td>
                        <td class="py-4 px-4 text-slate-600">{{ $user['joined'] }}</td>
                        <td class="py-4 px-4">
                            <div class="flex space-x-2">
                                <button class="text-blue-600 hover:text-blue-800 font-medium text-sm">Edit</button>
                                <button class="text-red-600 hover:text-red-800 font-medium text-sm">Delete</button>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-6 pt-6 border-t border-slate-200">
            <div class="text-sm text-slate-600">
                Showing 1 to {{ count($data['users']) }} of {{ count($data['users']) }} users
            </div>
            <div class="flex space-x-2">
                <button class="px-3 py-2 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">Previous</button>
                <button class="px-3 py-2 bg-blue-600 text-white rounded-lg text-sm font-medium">1</button>
                <button class="px-3 py-2 border border-slate-300 rounded-lg text-sm font-medium text-slate-700 hover:bg-slate-50">Next</button>
            </div>
        </div>
    </div>
</div>
@endsection