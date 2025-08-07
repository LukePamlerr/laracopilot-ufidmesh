<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Business Platform - Modern Solutions')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <style>
        .gradient-text { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .glass { backdrop-filter: blur(16px); background: rgba(255, 255, 255, 0.1); }
        .animate-float { animation: float 6s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-white">
    <!-- Header -->
    <header class="fixed w-full top-0 z-50 glass border-b border-white/20">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold gradient-text">BusinessPro</span>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="#home" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">Home</a>
                    <a href="#about" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">About</a>
                    <a href="#services" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">Services</a>
                    <a href="#contact" class="text-slate-700 hover:text-blue-600 font-medium transition-colors duration-300">Contact</a>
                    <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white px-4 py-2 rounded-lg font-medium transition-all duration-300 shadow-lg hover:shadow-xl">
                        Admin Panel
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden">
                    <button id="mobile-menu-btn" class="text-slate-700 hover:text-blue-600">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="md:hidden hidden bg-white/95 backdrop-blur-md rounded-2xl mt-2 p-4 shadow-xl border border-white/20">
                <div class="flex flex-col space-y-3">
                    <a href="#home" class="text-slate-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Home</a>
                    <a href="#about" class="text-slate-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">About</a>
                    <a href="#services" class="text-slate-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Services</a>
                    <a href="#contact" class="text-slate-700 hover:text-blue-600 font-medium py-2 transition-colors duration-300">Contact</a>
                    <a href="{{ route('admin.login') }}" class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-4 py-2 rounded-lg font-medium text-center transition-all duration-300 shadow-lg hover:shadow-xl">
                        Admin Panel
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-slate-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4">
            <!-- Four Column Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-8">
                
                <!-- Column 1: Company Info -->
                <div>
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="w-8 h-8 bg-gradient-to-r from-blue-500 to-purple-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <span class="text-lg font-bold">BusinessPro</span>
                    </div>
                    <p class="text-slate-300 text-sm mb-4 leading-relaxed">
                        Empowering businesses with innovative solutions and cutting-edge technology for sustainable growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/></svg>
                        </a>
                        <a href="#" class="w-8 h-8 bg-slate-800 hover:bg-blue-600 rounded-lg flex items-center justify-center transition-colors duration-300">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Home</a></li>
                        <li><a href="#about" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">About Us</a></li>
                        <li><a href="#services" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Services</a></li>
                        <li><a href="#contact" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Contact</a></li>
                        <li><a href="{{ route('admin.login') }}" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Admin Portal</a></li>
                    </ul>
                </div>

                <!-- Column 3: Services -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Business Consulting</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Digital Solutions</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Analytics & Reports</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Support Services</a></li>
                        <li><a href="#" class="text-slate-300 hover:text-white transition-colors duration-300 text-sm">Custom Development</a></li>
                    </ul>
                </div>

                <!-- Column 4: Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold mb-4">Contact Info</h3>
                    <div class="space-y-3">
                        <div class="flex items-start space-x-3">
                            <svg class="w-5 h-5 text-slate-400 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            </svg>
                            <div>
                                <p class="text-slate-300 text-sm">123 Business Avenue</p>
                                <p class="text-slate-300 text-sm">Suite 100, Business City, BC 12345</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                            </svg>
                            <p class="text-slate-300 text-sm">+1 (555) 123-4567</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <svg class="w-5 h-5 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                            <p class="text-slate-300 text-sm">contact@businesspro.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bottom Border and Copyright -->
            <div class="border-t border-slate-700 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <!-- Left: Copyright -->
                    <div class="text-sm text-slate-400 mb-4 md:mb-0">
                        © {{ date('Y') }} BusinessPro. All rights reserved.
                    </div>
                    
                    <!-- Center: Privacy Links -->
                    <div class="flex space-x-6 mb-4 md:mb-0">
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Privacy Policy</a>
                        <a href="#" class="text-slate-400 hover:text-white transition-colors duration-300 text-sm">Terms of Service</a>
                    </div>
                    
                    <!-- Right: LaraCopilot Branding -->
                    <div class="text-sm text-slate-400">
                        Made with ❤️ <span class="text-white font-medium">LaraCopilot</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        $('#mobile-menu-btn').click(function() {
            $('#mobile-menu').toggleClass('hidden');
        });

        // Smooth scrolling
        $('a[href^="#"]').click(function(e) {
            e.preventDefault();
            var target = $($(this).attr('href'));
            if(target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - 80
                }, 800);
            }
        });

        // Header background on scroll
        $(window).scroll(function() {
            if ($(this).scrollTop() > 100) {
                $('header').addClass('bg-white/95');
            } else {
                $('header').removeClass('bg-white/95');
            }
        });
    </script>
</body>
</html>