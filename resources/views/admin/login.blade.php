<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - BusinessPro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<body class="bg-gradient-to-br from-slate-900 via-blue-900 to-purple-900 min-h-screen">
    <div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-md w-full space-y-8">
            <!-- Header -->
            <div class="text-center">
                <div class="w-20 h-20 bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-white mb-2">Admin Portal</h2>
                <p class="text-slate-300">Sign in to access the admin dashboard</p>
            </div>

            <!-- Login Form -->
            <div class="bg-white/10 backdrop-blur-md rounded-3xl p-8 border border-white/20">
                @if(session('error'))
                    <div class="bg-red-500/20 border border-red-500/50 text-red-200 px-4 py-3 rounded-xl mb-6">
                        {{ session('error') }}
                    </div>
                @endif

                @if(session('message'))
                    <div class="bg-green-500/20 border border-green-500/50 text-green-200 px-4 py-3 rounded-xl mb-6">
                        {{ session('message') }}
                    </div>
                @endif

                <form action="/admin/login" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label for="email" class="block text-sm font-medium text-white mb-2">Email Address</label>
                        <input id="email" name="email" type="email" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-slate-300" placeholder="Enter your email">
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-white mb-2">Password</label>
                        <input id="password" name="password" type="password" required class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-500 text-white placeholder-slate-300" placeholder="Enter your password">
                    </div>

                    <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-6 py-3 rounded-xl font-semibold transition-all duration-300 shadow-lg hover:shadow-xl">
                        Sign In
                    </button>
                </form>

                <!-- Demo Credentials -->
                <div class="mt-8 pt-6 border-t border-white/20">
                    <h3 class="text-sm font-medium text-white mb-4">Demo Credentials:</h3>
                    <div class="space-y-3 text-sm">
                        @foreach($credentials as $cred)
                        <div class="bg-white/5 rounded-lg p-3 cursor-pointer hover:bg-white/10 transition-colors duration-200" onclick="fillCredentials('{{ $cred['email'] }}', '{{ $cred['password'] }}')">
                            <div class="flex justify-between items-center">
                                <div>
                                    <p class="text-blue-200 font-medium">{{ $cred['name'] }}</p>
                                    <p class="text-slate-300">{{ $cred['email'] }}</p>
                                </div>
                                <div class="text-right">
                                    <p class="text-purple-200 text-xs">{{ $cred['role'] }}</p>
                                    <p class="text-slate-400 text-xs">{{ $cred['password'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <p class="text-xs text-slate-400 mt-4">Click any credential above to auto-fill the form</p>
                </div>
            </div>

            <!-- Back to Website -->
            <div class="text-center">
                <a href="/" class="inline-flex items-center text-slate-300 hover:text-white transition-colors duration-300">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Website
                </a>
            </div>
        </div>
    </div>

    <script>
        function fillCredentials(email, password) {
            $('#email').val(email);
            $('#password').val(password);
        }
    </script>
</body>
</html>