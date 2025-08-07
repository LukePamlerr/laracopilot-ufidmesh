@extends('layouts.app')

@section('title', 'Premium Store - Luxury Products & Professional Services')
@section('meta_description', 'Experience premium quality products and professional services with cutting-edge technology. Your trusted partner for luxury and excellence.')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden">
    <!-- Background with Gradient Overlay -->
    <div class="absolute inset-0 bg-gradient-to-br from-premium-black via-secondary-black to-accent-black"></div>
    <div class="absolute inset-0 bg-gradient-to-r from-primary-red/10 to-transparent"></div>
    
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary-red/20 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 bg-secondary-red/10 rounded-full blur-3xl animate-pulse" style="animation-delay: 1s;"></div>
    </div>
    
    <!-- Main Content -->
    <div class="relative z-10 text-center max-w-6xl mx-auto px-4">
        <div class="animate-slide-up">
            <h1 class="text-6xl md:text-8xl font-black mb-6 leading-tight">
                <span class="block text-white">Premium</span>
                <span class="block gradient-text">Excellence</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-300 mb-8 max-w-3xl mx-auto leading-relaxed">
                Experience the pinnacle of luxury with our curated collection of premium products and professional services designed for the most discerning clients.
            </p>
            
            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-6 justify-center mb-12">
                <button class="group bg-gradient-to-r from-primary-red to-secondary-red hover:from-secondary-red hover:to-accent-red text-white px-10 py-4 rounded-xl font-bold text-lg transition-all duration-300 shadow-premium hover:shadow-xl transform hover:-translate-y-1 animate-pulse-red">
                    <span class="flex items-center justify-center space-x-3">
                        <span>Explore Premium Collection</span>
                        <svg class="w-6 h-6 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </span>
                </button>
                <button class="glass-black border border-white/20 text-white px-10 py-4 rounded-xl font-semibold text-lg hover:glass-red hover:border-primary-red/50 transition-all duration-300 transform hover:-translate-y-1">
                    Watch Demo
                </button>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 max-w-4xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">50K+</div>
                    <div class="text-gray-400">Premium Clients</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">99.9%</div>
                    <div class="text-gray-400">Satisfaction Rate</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">24/7</div>
                    <div class="text-gray-400">Premium Support</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold gradient-text mb-2">5★</div>
                    <div class="text-gray-400">Client Reviews</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-primary-red" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"/>
        </svg>
    </div>
</section>

<!-- Premium Features Section -->
<section id="services" class="py-24 bg-gradient-to-b from-premium-black to-secondary-black">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Premium <span class="gradient-text">Services</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Discover our comprehensive suite of premium services designed to exceed your expectations and deliver exceptional results.
            </p>
        </div>
        
        <!-- Features Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">Premium Quality</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Every product undergoes rigorous quality control to ensure it meets our premium standards and exceeds customer expectations.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            <!-- Feature 2 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">Lightning Fast</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Experience unparalleled speed and efficiency with our optimized systems and cutting-edge technology infrastructure.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            <!-- Feature 3 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">Bank-Level Security</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Your data and transactions are protected with military-grade encryption and advanced security protocols.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            <!-- Feature 4 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">24/7 Support</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Our dedicated premium support team is available around the clock to assist you with any questions or concerns.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            <!-- Feature 5 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17v4a2 2 0 002 2h4M15 7l3 3"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">Custom Solutions</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Tailored solutions designed specifically for your unique requirements and business objectives.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
            
            <!-- Feature 6 -->
            <div class="group glass-black rounded-3xl p-8 hover:glass-red transition-all duration-500 hover:-translate-y-3 hover:shadow-premium animate-on-scroll">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-4 group-hover:text-primary-red transition-colors duration-300">Analytics & Insights</h3>
                <p class="text-gray-300 mb-6 leading-relaxed">
                    Comprehensive analytics and actionable insights to help you make informed decisions and optimize performance.
                </p>
                <button class="text-primary-red font-semibold hover:text-secondary-red transition-colors duration-300 flex items-center space-x-2">
                    <span>Learn More</span>
                    <svg class="w-4 h-4 group-hover:translate-x-1 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="py-24 bg-gradient-to-b from-secondary-black to-accent-black">
    <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <!-- Content -->
            <div class="animate-on-scroll">
                <h2 class="text-4xl md:text-6xl font-bold text-white mb-8">
                    About <span class="gradient-text">Excellence</span>
                </h2>
                <p class="text-xl text-gray-300 mb-8 leading-relaxed">
                    We are dedicated to delivering premium products and services that exceed expectations. Our commitment to excellence, innovation, and customer satisfaction has made us a trusted partner for businesses and individuals seeking the highest quality solutions.
                </p>
                
                <!-- Key Points -->
                <div class="space-y-6">
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-red rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">10+ Years of Excellence</h3>
                            <p class="text-gray-300">A decade of delivering premium solutions and building lasting relationships with our clients.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-red rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Global Reach</h3>
                            <p class="text-gray-300">Serving clients worldwide with localized support and global expertise.</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start space-x-4">
                        <div class="w-8 h-8 bg-primary-red rounded-lg flex items-center justify-center flex-shrink-0 mt-1">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-xl font-semibold text-white mb-2">Innovation First</h3>
                            <p class="text-gray-300">Constantly pushing boundaries and adopting cutting-edge technologies.</p>
                        </div>
                    </div>
                </div>
                
                <button class="mt-10 bg-gradient-to-r from-primary-red to-secondary-red hover:from-secondary-red hover:to-accent-red text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-premium hover:shadow-xl transform hover:-translate-y-1">
                    Learn More About Us
                </button>
            </div>
            
            <!-- Visual Element -->
            <div class="relative animate-on-scroll">
                <div class="glass-black rounded-3xl p-8 border border-white/10">
                    <!-- Stats Grid -->
                    <div class="grid grid-cols-2 gap-6">
                        <div class="text-center p-6 glass-red rounded-2xl">
                            <div class="text-4xl font-bold gradient-text mb-2">50K+</div>
                            <div class="text-gray-300">Happy Clients</div>
                        </div>
                        <div class="text-center p-6 glass-red rounded-2xl">
                            <div class="text-4xl font-bold gradient-text mb-2">99.9%</div>
                            <div class="text-gray-300">Uptime</div>
                        </div>
                        <div class="text-center p-6 glass-red rounded-2xl">
                            <div class="text-4xl font-bold gradient-text mb-2">24/7</div>
                            <div class="text-gray-300">Support</div>
                        </div>
                        <div class="text-center p-6 glass-red rounded-2xl">
                            <div class="text-4xl font-bold gradient-text mb-2">150+</div>
                            <div class="text-gray-300">Countries</div>
                        </div>
                    </div>
                </div>
                
                <!-- Floating Elements -->
                <div class="absolute -top-6 -right-6 w-24 h-24 bg-primary-red/20 rounded-full blur-2xl animate-pulse"></div>
                <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-secondary-red/10 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-24 bg-gradient-to-b from-accent-black to-premium-black">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Client <span class="gradient-text">Testimonials</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Hear what our premium clients say about their experience with our services and solutions.
            </p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="glass-black rounded-3xl p-8 border border-white/10 hover:glass-red transition-all duration-500 animate-on-scroll">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                        JS
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-lg">John Smith</h3>
                        <p class="text-gray-400">CEO, Tech Innovations</p>
                    </div>
                </div>
                <div class="flex text-primary-red mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "The premium service exceeded all our expectations. The attention to detail and professional approach made all the difference for our business growth."
                </p>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="glass-black rounded-3xl p-8 border border-white/10 hover:glass-red transition-all duration-500 animate-on-scroll">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                        MJ
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Maria Johnson</h3>
                        <p class="text-gray-400">Director, Global Solutions</p>
                    </div>
                </div>
                <div class="flex text-primary-red mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "Outstanding support and innovative solutions. The team's expertise and dedication to excellence is truly remarkable. Highly recommended!"
                </p>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="glass-black rounded-3xl p-8 border border-white/10 hover:glass-red transition-all duration-500 animate-on-scroll">
                <div class="flex items-center mb-6">
                    <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-full flex items-center justify-center text-white font-bold text-xl mr-4">
                        RB
                    </div>
                    <div>
                        <h3 class="text-white font-semibold text-lg">Robert Brown</h3>
                        <p class="text-gray-400">Founder, Premium Enterprises</p>
                    </div>
                </div>
                <div class="flex text-primary-red mb-4">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                    </svg>
                </div>
                <p class="text-gray-300 leading-relaxed">
                    "A game-changing partnership! Their premium solutions transformed our business operations and delivered results beyond our expectations."
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-24 bg-gradient-to-b from-premium-black to-secondary-black">
    <div class="max-w-7xl mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-6">
                Get In <span class="gradient-text">Touch</span>
            </h2>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                Ready to experience premium excellence? Contact us today and let's discuss how we can help elevate your business.
            </p>
        </div>
        
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
            <!-- Contact Form -->
            <div class="animate-on-scroll">
                <div class="glass-black rounded-3xl p-8 border border-white/10">
                    <h3 class="text-2xl font-bold text-white mb-8">Send Us a Message</h3>
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">First Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent" placeholder="John">
                            </div>
                            <div>
                                <label class="block text-gray-300 text-sm font-medium mb-2">Last Name</label>
                                <input type="text" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent" placeholder="Doe">
                            </div>
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Email Address</label>
                            <input type="email" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent" placeholder="john@example.com">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Phone Number</label>
                            <input type="tel" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent" placeholder="+1 (555) 123-4567">
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Service Interest</label>
                            <select class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent">
                                <option value="">Select a service</option>
                                <option value="premium-products">Premium Products</option>
                                <option value="custom-solutions">Custom Solutions</option>
                                <option value="consultation">Consultation</option>
                                <option value="support">Support Services</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-gray-300 text-sm font-medium mb-2">Message</label>
                            <textarea rows="4" class="w-full px-4 py-3 bg-white/10 border border-white/20 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-primary-red focus:border-transparent" placeholder="Tell us about your project or requirements..."></textarea>
                        </div>
                        <button type="submit" class="w-full bg-gradient-to-r from-primary-red to-secondary-red hover:from-secondary-red hover:to-accent-red text-white px-8 py-4 rounded-xl font-semibold transition-all duration-300 shadow-premium hover:shadow-xl transform hover:-translate-y-1">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
            
            <!-- Contact Information -->
            <div class="animate-on-scroll">
                <!-- Contact Cards -->
                <div class="space-y-6 mb-8">
                    <!-- Phone -->
                    <div class="glass-black rounded-2xl p-6 border border-white/10 hover:glass-red transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-r from-primary-red to-secondary-red rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg">Call Us</h3>
                                <p class="text-gray-300">+1 (555) 123-PREMIUM</p>
                                <p class="text-gray-400 text-sm">Available 24/7</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Email -->
                    <div class="glass-black rounded-2xl p-6 border border-white/10 hover:glass-red transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-r from-primary-red to-secondary-red rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 7.89a2 2 0 002.83 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg">Email Us</h3>
                                <p class="text-gray-300">contact@premiumstore.com</p>
                                <p class="text-gray-400 text-sm">We'll respond within 2 hours</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="glass-black rounded-2xl p-6 border border-white/10 hover:glass-red transition-all duration-300">
                        <div class="flex items-center space-x-4">
                            <div class="w-14 h-14 bg-gradient-to-r from-primary-red to-secondary-red rounded-xl flex items-center justify-center">
                                <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-white font-semibold text-lg">Visit Us</h3>
                                <p class="text-gray-300">123 Premium Avenue</p>
                                <p class="text-gray-400 text-sm">Luxury District, City 12345</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Business Hours -->
                <div class="glass-black rounded-2xl p-6 border border-white/10">
                    <h3 class="text-white font-semibold text-lg mb-4">Business Hours</h3>
                    <div class="space-y-2">
                        <div class="flex justify-between">
                            <span class="text-gray-300">Monday - Friday</span>
                            <span class="text-primary-red">9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Saturday</span>
                            <span class="text-primary-red">10:00 AM - 4:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-300">Sunday</span>
                            <span class="text-primary-red">Closed</span>
                        </div>
                        <div class="border-t border-white/10 pt-2 mt-4">
                            <div class="flex justify-between">
                                <span class="text-gray-300">Premium Support</span>
                                <span class="text-primary-red">24/7 Available</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push('scripts')
<script>
$(document).ready(function() {
    // Animate elements on scroll
    function checkScroll() {
        $('.animate-on-scroll').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();

            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('animate-fade-in');
            }
        });
    }

    // Initial check
    checkScroll();
    
    // Check on scroll
    $(window).scroll(checkScroll);
    
    // Form submission
    $('form').on('submit', function(e) {
        e.preventDefault();
        
        // Show success message
        $(this).html(`
            <div class="text-center py-8">
                <div class="w-16 h-16 bg-gradient-to-r from-primary-red to-secondary-red rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-white mb-2">Message Sent!</h3>
                <p class="text-gray-300">Thank you for your message. We'll get back to you within 2 hours.</p>
            </div>
        `);
    });
});
</script>
@endpush
@endsection