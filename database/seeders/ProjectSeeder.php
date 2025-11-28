<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'E-Commerce Platform',
                'slug' => 'e-commerce-platform',
                'description' => 'A full-featured e-commerce platform built with Laravel and Vue.js',
                'long_description' => 'Developed a comprehensive e-commerce solution featuring user authentication, product management, shopping cart, payment integration with Stripe, order tracking, and an admin dashboard. The platform handles thousands of products and processes hundreds of orders daily with excellent performance.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Redis', 'Stripe API', 'TailwindCSS'],
                'github_url' => 'https://github.com/username/ecommerce-platform',
                'live_url' => 'https://ecommerce-demo.example.com',
                'featured' => true,
                'completed_at' => now()->subMonths(2),
                'order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'Task Management System',
                'slug' => 'task-management-system',
                'description' => 'A collaborative task management tool with real-time updates',
                'long_description' => 'Built a real-time task management system allowing teams to collaborate effectively. Features include task boards, drag-and-drop interface, real-time notifications using Laravel Echo and Pusher, file attachments, comments, and detailed analytics. Supports multiple projects and team roles.',
                'technologies' => ['Laravel', 'React', 'PostgreSQL', 'Redis', 'Pusher', 'Docker'],
                'github_url' => 'https://github.com/username/task-manager',
                'live_url' => 'https://tasks-demo.example.com',
                'featured' => true,
                'completed_at' => now()->subMonths(4),
                'order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Social Media Analytics Dashboard',
                'slug' => 'social-media-analytics',
                'description' => 'Analytics dashboard for tracking social media metrics',
                'long_description' => 'Created a powerful analytics dashboard that integrates with multiple social media platforms (Twitter, Facebook, Instagram) to provide comprehensive insights. Features beautiful data visualizations using Chart.js, scheduled reports, and custom metric tracking.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Chart.js', 'Social Media APIs'],
                'github_url' => 'https://github.com/username/social-analytics',
                'featured' => true,
                'completed_at' => now()->subMonths(5),
                'order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Portfolio Website Builder',
                'slug' => 'portfolio-builder',
                'description' => 'SaaS platform for creating beautiful portfolio websites',
                'long_description' => 'Developed a SaaS platform that allows users to create stunning portfolio websites without coding. Features include drag-and-drop builder, customizable templates, custom domain support, analytics, and SEO optimization tools.',
                'technologies' => ['Laravel', 'Livewire', 'MySQL', 'TailwindCSS', 'AWS S3'],
                'github_url' => 'https://github.com/username/portfolio-builder',
                'live_url' => 'https://portfolio-builder.example.com',
                'featured' => false,
                'completed_at' => now()->subMonths(7),
                'order' => 4,
                'is_published' => true,
            ],
            [
                'title' => 'Restaurant Ordering System',
                'slug' => 'restaurant-ordering',
                'description' => 'Online ordering system for restaurants with QR menu',
                'long_description' => 'Built a contactless ordering system for restaurants featuring QR code menus, real-time order management, kitchen display system, payment processing, and customer feedback collection. Helped restaurants adapt to post-pandemic dining.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'Stripe', 'QR Codes'],
                'github_url' => 'https://github.com/username/restaurant-ordering',
                'featured' => false,
                'completed_at' => now()->subMonths(8),
                'order' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'Learning Management System',
                'slug' => 'learning-management-system',
                'description' => 'LMS platform for online courses and student management',
                'long_description' => 'Comprehensive learning management system with course creation tools, video hosting, quizzes, assignments, progress tracking, certificates, and payment integration. Supports multiple instructors and thousands of students.',
                'technologies' => ['Laravel', 'Vue.js', 'MySQL', 'AWS S3', 'Vimeo API'],
                'github_url' => 'https://github.com/username/lms',
                'live_url' => 'https://lms-demo.example.com',
                'featured' => false,
                'completed_at' => now()->subMonths(10),
                'order' => 6,
                'is_published' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
