<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - AI DevStudio</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-purple-900 to-indigo-900 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full mx-4">
        <!-- Login Card -->
        <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 shadow-2xl border border-white/20">
            <!-- Logo -->
            <div class="text-center mb-8">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-indigo-600 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h1 class="text-2xl font-bold text-white mb-2">AI DevStudio</h1>
                <p class="text-purple-200">Admin Panel Access</p>
            </div>

            <!-- Error Messages -->
            @if(session('error'))
                <div class="bg-red-500/20 border border-red-400 text-red-200 px-4 py-3 rounded-lg mb-6">
                    {{ session('error') }}
                </div>
            @endif

            @if(session('success'))
                <div class="bg-green-500/20 border border-green-400 text-green-200 px-4 py-3 rounded-lg mb-6">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Login Form -->
            <form method="POST" action="/admin/login" class="space-y-6">
                @csrf
                <div>
                    <label class="block text-purple-200 text-sm font-semibold mb-2">Email Address</label>
                    <input type="email" name="email" required 
                           class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                           placeholder="Enter admin email">
                </div>

                <div>
                    <label class="block text-purple-200 text-sm font-semibold mb-2">Password</label>
                    <input type="password" name="password" required 
                           class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl text-white placeholder-purple-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
                           placeholder="Enter password">
                </div>

                <button type="submit" 
                        class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 rounded-xl transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Sign In to Admin Panel
                </button>
            </form>

            <!-- Demo Credentials -->
            <div class="mt-8 p-4 bg-white/5 rounded-xl border border-white/10">
                <h3 class="text-purple-200 font-semibold mb-3 flex items-center">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"/>
                    </svg>
                    Demo Credentials
                </h3>
                <div class="space-y-2 text-sm">
                    @foreach($credentials as $cred)
                        <div class="flex flex-col space-y-1 p-2 bg-white/5 rounded-lg">
                            <div class="text-purple-300">
                                <strong>{{ $cred['role'] }}:</strong>
                            </div>
                            <div class="text-purple-200 font-mono text-xs">
                                Email: {{ $cred['email'] }}
                            </div>
                            <div class="text-purple-200 font-mono text-xs">
                                Password: {{ $cred['password'] }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Back to Website -->
            <div class="mt-6 text-center">
                <a href="/" class="text-purple-300 hover:text-white transition-colors duration-300 text-sm">
                    ← Back to Website
                </a>
            </div>
        </div>

        <!-- Additional Info -->
        <div class="text-center mt-6">
            <p class="text-purple-300 text-sm">
                Secure admin access for AI DevStudio platform management
            </p>
        </div>
    </div>
</body>
</html>