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
                'category' => 'Web',
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
                'category' => 'DevOps',
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
                'title' => 'Security Audit Tool',
                'slug' => 'security-audit-tool',
                'description' => 'Automated security scanning and vulnerability assessment platform',
                'category' => 'Security',
                'long_description' => 'Developed a comprehensive security auditing tool that scans applications for vulnerabilities, performs penetration testing, and generates detailed security reports. Features include OWASP Top 10 detection, dependency scanning, and compliance checking.',
                'technologies' => ['Python', 'Django', 'PostgreSQL', 'Docker', 'Security APIs'],
                'github_url' => 'https://github.com/username/security-audit',
                'live_url' => 'https://security-audit.example.com',
                'featured' => true,
                'completed_at' => now()->subMonths(5),
                'order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Portfolio Website Builder',
                'slug' => 'portfolio-builder',
                'description' => 'SaaS platform for creating beautiful portfolio websites',
                'category' => 'Web',
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
                'title' => 'CI/CD Pipeline Automation',
                'slug' => 'cicd-pipeline',
                'description' => 'Automated deployment pipeline with Docker and Kubernetes',
                'category' => 'DevOps',
                'long_description' => 'Built a comprehensive CI/CD pipeline solution that automates testing, building, and deployment processes. Features include multi-environment support, automated rollbacks, container orchestration with Kubernetes, and comprehensive monitoring.',
                'technologies' => ['Jenkins', 'Docker', 'Kubernetes', 'Terraform', 'Ansible'],
                'github_url' => 'https://github.com/username/cicd-pipeline',
                'featured' => false,
                'completed_at' => now()->subMonths(8),
                'order' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'Network Monitoring System',
                'slug' => 'network-monitoring',
                'description' => 'Real-time network infrastructure monitoring and alerting',
                'category' => 'DevOps',
                'long_description' => 'Developed a network monitoring system that tracks infrastructure health, performance metrics, and security events. Features include real-time dashboards, automated alerting, log aggregation, and predictive analytics for capacity planning.',
                'technologies' => ['Python', 'Grafana', 'Prometheus', 'InfluxDB', 'Docker'],
                'github_url' => 'https://github.com/username/network-monitoring',
                'live_url' => 'https://network-monitoring.example.com',
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
