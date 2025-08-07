<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $features = [
            [
                'title' => 'AI-Powered Development',
                'description' => 'Generate complete web applications using advanced ChatGPT integration with intelligent code generation and optimization.',
                'icon' => 'brain',
                'color' => 'from-purple-500 to-indigo-600'
            ],
            [
                'title' => 'GitHub Integration',
                'description' => 'Seamlessly connect with GitHub repositories for automated deployment, version control, and collaborative development.',
                'icon' => 'github',
                'color' => 'from-gray-700 to-gray-900'
            ],
            [
                'title' => 'Supabase Backend',
                'description' => 'Instant backend setup with Supabase integration for databases, authentication, and real-time functionality.',
                'icon' => 'database',
                'color' => 'from-green-500 to-emerald-600'
            ],
            [
                'title' => 'One-Click Deployment',
                'description' => 'Deploy your AI-generated applications instantly with automated CI/CD pipelines and production optimization.',
                'icon' => 'rocket',
                'color' => 'from-orange-500 to-red-600'
            ],
            [
                'title' => 'Smart Templates',
                'description' => 'Access pre-built templates optimized for various industries with AI customization capabilities.',
                'icon' => 'template',
                'color' => 'from-blue-500 to-cyan-600'
            ],
            [
                'title' => 'Real-time Collaboration',
                'description' => 'Work together with your team in real-time with live editing, comments, and version synchronization.',
                'icon' => 'users',
                'color' => 'from-pink-500 to-rose-600'
            ]
        ];

        $testimonials = [
            [
                'name' => 'Sarah Chen',
                'role' => 'CTO at TechStart',
                'content' => 'AI DevStudio reduced our development time by 80%. We built our entire MVP in just 2 days!',
                'avatar' => 'https://images.unsplash.com/photo-1494790108755-2616b612b786?w=150&h=150&fit=crop&crop=face'
            ],
            [
                'name' => 'Marcus Rodriguez',
                'role' => 'Lead Developer at InnovateCorp',
                'content' => 'The GitHub integration is seamless. Our entire workflow is now automated and incredibly efficient.',
                'avatar' => 'https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=150&h=150&fit=crop&crop=face'
            ],
            [
                'name' => 'Emily Watson',
                'role' => 'Founder of AppLaunch',
                'content' => 'From idea to production in hours, not months. This platform is a game-changer for entrepreneurs.',
                'avatar' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=150&h=150&fit=crop&crop=face'
            ]
        ];

        $stats = [
            ['label' => 'Apps Created', 'value' => '10,000+'],
            ['label' => 'Active Developers', 'value' => '5,000+'],
            ['label' => 'GitHub Repos', 'value' => '25,000+'],
            ['label' => 'AI Generations', 'value' => '100,000+']
        ];

        return view('welcome', compact('features', 'testimonials', 'stats'));
    }
}