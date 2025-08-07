<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'hero' => [
                'title' => 'Transform Your Business Today',
                'subtitle' => 'Innovative solutions for modern enterprises',
                'cta_primary' => 'Get Started',
                'cta_secondary' => 'Learn More'
            ],
            'features' => [
                [
                    'icon' => 'rocket',
                    'title' => 'Fast Performance',
                    'description' => 'Lightning-fast solutions that scale with your business needs'
                ],
                [
                    'icon' => 'shield',
                    'title' => 'Secure & Reliable',
                    'description' => 'Enterprise-grade security with 99.9% uptime guarantee'
                ],
                [
                    'icon' => 'users',
                    'title' => 'Expert Support',
                    'description' => '24/7 dedicated support from our team of experts'
                ],
                [
                    'icon' => 'chart',
                    'title' => 'Analytics Driven',
                    'description' => 'Make data-driven decisions with comprehensive analytics'
                ]
            ],
            'stats' => [
                ['number' => '10,000+', 'label' => 'Happy Clients'],
                ['number' => '99.9%', 'label' => 'Uptime'],
                ['number' => '24/7', 'label' => 'Support'],
                ['number' => '50+', 'label' => 'Countries']
            ],
            'testimonials' => [
                [
                    'name' => 'Sarah Johnson',
                    'position' => 'CEO, TechCorp',
                    'content' => 'This platform transformed our business operations completely.',
                    'rating' => 5
                ],
                [
                    'name' => 'Michael Chen',
                    'position' => 'CTO, StartupXYZ',
                    'content' => 'Outstanding service and incredible results for our team.',
                    'rating' => 5
                ],
                [
                    'name' => 'Emma Davis',
                    'position' => 'Director, Enterprise Inc',
                    'content' => 'The best investment we made for our company growth.',
                    'rating' => 5
                ]
            ]
        ];

        return view('welcome', compact('data'));
    }
}