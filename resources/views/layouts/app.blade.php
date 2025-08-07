<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Premium Store - Luxury Products & Services')</title>
    <meta name="description" content="@yield('meta_description', 'Discover premium products and luxury services with our advanced e-commerce platform. Experience excellence in every detail.')">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'premium-black': '#0a0a0a',
                        'secondary-black': '#1a1a1a',
                        'accent-black': '#2a2a2a',
                        'primary-red': '#dc2626',
                        'secondary-red': '#ef4444',
                        'accent-red': '#f87171'
                    },
                    fontFamily: {
                        'sans': ['Inter', 'system-ui', 'sans-serif'],
                    },
                    animation: {
                        'fade-in': 'fadeIn 0.5s ease-in-out',
                        'slide-up': 'slideUp 0.5s ease-out',
                        'pulse-red': 'pulseRed 2s infinite',
                    }
                }
            }
        }
    </script>
    
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- Custom Styles -->
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        
        @keyframes slideUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        
        @keyframes pulseRed {
            0%, 100% { box-shadow: 0 0 0 0 rgba(220, 38, 38, 0.4); }
            50% { box-shadow: 0 0 0 20px rgba(220, 38, 38, 0); }
        }
        
        .glass-black {
            background: rgba(10, 10, 10, 0.8);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        .glass-red {
            background: rgba(220, 38, 38, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(220, 38, 38, 0.2);
        }
        
        .shadow-premium {
            box-shadow: 0 25px 50px -12px rgba(220, 38, 38, 0.25);
        }
        
        .shadow-black {
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.5);
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
    </style>
</head>
<body class="bg-premium-black text-white font-sans antialiased">
    <!-- Navigation -->
    <nav class="fixed w-full top-0 z-50 glass-black border-b border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex items-center space-x-4">
                    <div class="w-12 h-12 bg-gradient-to-r from-primary-red to-secondary-red rounded-xl flex items-center justify-center shadow-premium">
                        <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text">Premium Store</h1>
                        <p class="text-xs text-gray-400">Luxury & Excellence</p>
                    </div>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="text-white hover:text-primary-red transition-colors duration-300 font-medium">Home</a>
                    <a href="/products" class="text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Products</a>
                    <a href="#services" class="text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Services</a>
                    <a href="#about" class="text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">About</a>
                    <a href="#contact" class="text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Contact</a>
                </div>

                <!-- Action Buttons -->
                <div class="flex items-center space-x-4">
                    <!-- Search -->
                    <button class="p-2 text-gray-300 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    
                    <!-- Cart -->
                    <button class="relative p-2 text-gray-300 hover:text-white transition-colors duration-300">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.5 5M7 13l2.5 5m0 0h8"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 w-4 h-4 bg-primary-red rounded-full text-xs flex items-center justify-center">3</span>
                    </button>
                    
                    <!-- Admin Panel Link -->
                    <a href="/admin/login" class="bg-gradient-to-r from-primary-red to-secondary-red hover:from-secondary-red hover:to-accent-red text-white px-6 py-2 rounded-lg font-semibold transition-all duration-300 shadow-premium hover:shadow-xl transform hover:-translate-y-0.5">
                        Admin Panel
                    </a>
                    
                    <!-- Mobile Menu Button -->
                    <button class="md:hidden p-2 text-gray-300 hover:text-white transition-colors duration-300" onclick="toggleMobileMenu()">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden hidden glass-black border-t border-white/10">
            <div class="px-4 py-6 space-y-4">
                <a href="/" class="block text-white hover:text-primary-red transition-colors duration-300 font-medium">Home</a>
                <a href="/products" class="block text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Products</a>
                <a href="#services" class="block text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Services</a>
                <a href="#about" class="block text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">About</a>
                <a href="#contact" class="block text-gray-300 hover:text-primary-red transition-colors duration-300 font-medium">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Premium Footer -->
    <footer class="bg-gradient-to-b from-secondary-black to-premium-black border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
            <!-- Main Footer Content -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                
                <!-- Company Info -->
                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-gradient-to-r from-primary-red to-secondary-red rounded-lg flex items-center justify-center">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold gradient-text">Premium Store</h3>
                            <p class="text-xs text-gray-400">Excellence Redefined</p>
                        </div>
                    </div>
                    <p class="text-gray-300 leading-relaxed">
                        Delivering premium products and exceptional services with cutting-edge technology and unmatched customer experience.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-primary-red rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-premium">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-primary-red rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-premium">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-primary-red rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-premium">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 hover:bg-primary-red rounded-lg flex items-center justify-center transition-all duration-300 hover:shadow-premium">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Quick Links</h3>
                    <ul class="space-y-3">
                        <li><a href="/" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Home</a></li>
                        <li><a href="/products" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Products</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Services</a></li>
                        <li><a href="#about" class="text-gray-300 hover:text-primary-red transition-colors duration-300">About Us</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Contact</a></li>
                        <li><a href="/admin/login" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Admin Panel</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Premium Products</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Custom Solutions</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">24/7 Support</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Express Delivery</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Warranty Service</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-primary-red transition-colors duration-300">Consultation</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold text-white mb-6">Contact Info</h3>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <div class="w-6 h-6 bg-primary-red/20 rounded-lg flex items-center justify-center mt-0.5">
                                <svg class="w-4 h-4 text-primary-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-300">123 Premium Avenue</p>
                                <p class="text-gray-300">Luxury District, City 12345</p>
                            </div>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-primary-red/20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <p class="text-gray-300">+1 (555) 123-PREMIUM</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-primary-red/20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <p class="text-gray-300">contact@premiumstore.com</p>
                        </div>
                        <div class="flex items-center space-x-3">
                            <div class="w-6 h-6 bg-primary-red/20 rounded-lg flex items-center justify-center">
                                <svg class="w-4 h-4 text-primary-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                            </div>
                            <p class="text-gray-300">24/7 Available</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Newsletter Signup -->
            <div class="glass-red rounded-2xl p-8 mb-8">
                <div class="text-center mb-6">
                    <h3 class="text-2xl font-bold text-white mb-2">Stay Updated</h3>
                    <p class="text-gray-200">Get the latest updates on premium products and exclusive offers</p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" placeholder="Enter your email" class="flex-1 px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-300 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent">
                    <button class="bg-gradient-to-r from-primary-red to-secondary-red hover:from-secondary-red hover:to-accent-red text-white px-8 py-3 rounded-lg font-semibold transition-all duration-300 shadow-premium hover:shadow-xl transform hover:-translate-y-0.5">
                        Subscribe
                    </button>
                </div>
            </div>

            <!-- Bottom Section -->
            <div class="border-t border-white/10 pt-8">
                <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                    <!-- Copyright -->
                    <div class="text-gray-400 text-center md:text-left">
                        © {{ date('Y') }} Premium Store. All rights reserved.
                    </div>
                    
                    <!-- Legal Links -->
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-primary-red transition-colors duration-300">Privacy Policy</a>
                        <a href="#" class="text-gray-400 hover:text-primary-red transition-colors duration-300">Terms of Service</a>
                        <a href="#" class="text-gray-400 hover:text-primary-red transition-colors duration-300">Cookie Policy</a>
                    </div>
                    
                    <!-- LaraCopilot Branding -->
                    <div class="text-gray-400 text-center md:text-right">
                        Made with ❤️ by <span class="text-primary-red font-semibold">LaraCopilot</span>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script>
        // Mobile Menu Toggle
        function toggleMobileMenu() {
            const menu = document.getElementById('mobileMenu');
            menu.classList.toggle('hidden');
        }

        // Smooth Scrolling
        $(document).ready(function() {
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if (target.length) {
                    event.preventDefault();
                    $('html, body').stop().animate({
                        scrollTop: target.offset().top - 100
                    }, 1000);
                }
            });

            // Animate elements on scroll
            $(window).scroll(function() {
                $('.animate-on-scroll').each(function() {
                    var elementTop = $(this).offset().top;
                    var elementBottom = elementTop + $(this).outerHeight();
                    var viewportTop = $(window).scrollTop();
                    var viewportBottom = viewportTop + $(window).height();

                    if (elementBottom > viewportTop && elementTop < viewportBottom) {
                        $(this).addClass('animate-fade-in');
                    }
                });
            });
        });
    </script>

    @stack('scripts')
</body>
</html>