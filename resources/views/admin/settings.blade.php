@extends('layouts.admin')

@section('title', 'Settings - BusinessPro')
@section('page-title', 'System Settings')

@section('content')
<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Settings Navigation -->
    <div class="lg:col-span-1">
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-lg font-semibold text-slate-800 mb-4">Settings Categories</h3>
            <nav class="space-y-2">
                <a href="#general" class="flex items-center space-x-3 px-4 py-3 bg-blue-50 text-blue-700 rounded-lg font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"/>
                    </svg>
                    <span>General</span>
                </a>
                <a href="#notifications" class="flex items-center space-x-3 px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-lg font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5z"/>
                    </svg>
                    <span>Notifications</span>
                </a>
                <a href="#security" class="flex items-center space-x-3 px-4 py-3 text-slate-600 hover:bg-slate-50 rounded-lg font-medium">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                    <span>Security</span>
                </a>
            </nav>
        </div>
    </div>

    <!-- Settings Content -->
    <div class="lg:col-span-2 space-y-6">
        <!-- General Settings -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-xl font-semibold text-slate-800 mb-6">General Settings</h3>
            <div class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Site Name</label>
                        <input type="text" value="{{ $data['general_settings']['site_name'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Contact Email</label>
                        <input type="email" value="{{ $data['general_settings']['contact_email'] }}" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-slate-700 mb-2">Site Description</label>
                    <textarea rows="3" class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ $data['general_settings']['site_description'] }}</textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Timezone</label>
                        <select class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>{{ $data['general_settings']['timezone'] }}</option>
                            <option>EST</option>
                            <option>PST</option>
                            <option>GMT</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700 mb-2">Language</label>
                        <select class="w-full px-4 py-3 border border-slate-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <option>{{ $data['general_settings']['language'] }}</option>
                            <option>Spanish</option>
                            <option>French</option>
                            <option>German</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification Settings -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-xl font-semibold text-slate-800 mb-6">Notification Settings</h3>
            <div class="space-y-4">
                @foreach($data['notification_settings'] as $key => $value)
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                    <div>
                        <h4 class="font-medium text-slate-800">{{ ucwords(str_replace('_', ' ', $key)) }}</h4>
                        <p class="text-sm text-slate-600">Receive notifications via this method</p>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" {{ $value ? 'checked' : '' }} class="sr-only peer">
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Security Settings -->
        <div class="bg-white rounded-2xl shadow-lg border border-slate-100 p-6">
            <h3 class="text-xl font-semibold text-slate-800 mb-6">Security Settings</h3>
            <div class="space-y-6">
                @foreach($data['security_settings'] as $key => $value)
                <div class="flex items-center justify-between p-4 border border-slate-200 rounded-lg">
                    <div>
                        <h4 class="font-medium text-slate-800">{{ ucwords(str_replace('_', ' ', $key)) }}</h4>
                        <p class="text-sm text-slate-600">Current: {{ $value === true ? 'Enabled' : $value }}</p>
                    </div>
                    @if(is_bool($value))
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" {{ $value ? 'checked' : '' }} class="sr-only peer">
                        <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
                    </label>
                    @else
                    <button class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg font-medium transition-colors duration-200">
                        Configure
                    </button>
                    @endif
                </div>
                @endforeach
            </div>
        </div>

        <!-- Save Button -->
        <div class="flex justify-end">
            <button class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-8 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                Save Changes
            </button>
        </div>
    </div>
</div>
@endsection