@extends('layouts.app')

@section('title', '500 - Server Error')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-red-50 via-orange-50 to-yellow-50 flex items-center justify-center px-4">
    <div class="text-center max-w-2xl mx-auto">
        <!-- 500 Icon -->
        <div class="mb-8">
            <div class="w-32 h-32 bg-gradient-to-r from-red-400 to-orange-500 rounded-full flex items-center justify-center mx-auto mb-6 animate-pulse-slow">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                </svg>
            </div>
        </div>

        <!-- Error Content -->
        <h1 class="text-4xl md:text-6xl font-bold bg-gradient-to-r from-red-600 to-orange-600 bg-clip-text text-transparent mb-4">500</h1>
        <h2 class="text-2xl md:text-3xl font-semibold text-slate-800 mb-6">Internal Server Error</h2>
        <p class="text-lg text-slate-600 mb-8 leading-relaxed">
            Something went wrong on our end. Our AI engineers are working to fix this issue. 
            Please try again in a few moments.
        </p>

        <!-- Action Buttons -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
            <button onclick="location.reload()" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-red-500 to-orange-600 hover:from-red-600 hover:to-orange-700 text-white rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/>
                </svg>
                Try Again
            </button>
            <a href="/" class="inline-flex items-center px-6 py-3 bg-white border border-slate-300 hover:bg-slate-50 text-slate-700 rounded-xl font-semibold transition-all duration-300 shadow-md hover:shadow-lg">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>
                </svg>
                Back to Home
            </a>
        </div>

        <!-- Contact Support -->
        <div class="bg-white/80 backdrop-blur-sm rounded-2xl p-6 border border-white/50 mb-8">
            <h3 class="text-lg font-semibold text-slate-800 mb-2">Need immediate assistance?</h3>
            <p class="text-slate-600 mb-4">Our AI DevStudio support team is here to help if this problem persists.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="mailto:support@aidevstudio.com" class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                    </svg>
                    support@aidevstudio.com
                </a>
                <span class="text-slate-400">|</span>
                <a href="tel:+15551234567" class="inline-flex items-center text-red-600 hover:text-red-700 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                    </svg>
                    +1 (555) 123-4567
                </a>
            </div>
        </div>

        <!-- Status Information -->
        <div class="text-sm text-slate-500">
            <p>Error ID: #AI-DEV-{{ rand(1000, 9999) }} | Time: {{ date('Y-m-d H:i:s') }} UTC</p>
            <p class="mt-2">Our monitoring systems have been notified and our team is investigating.</p>
        </div>
    </div>
</div>
@endsection