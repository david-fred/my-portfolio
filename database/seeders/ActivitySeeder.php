<?php

namespace Database\Seeders;

use App\Models\Activity;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $activities = [
            [
                'title' => 'Senior Full Stack Developer',
                'organization' => 'Tech Innovations Inc.',
                'description' => 'Leading development of enterprise-level web applications using Laravel, Vue.js, and AWS. Managing a team of 5 developers, conducting code reviews, and implementing best practices for scalable architecture.',
                'role' => 'Senior Developer',
                'start_date' => now()->subYears(2),
                'end_date' => null,
                'is_current' => true,
                'location' => 'San Francisco, CA',
                'url' => 'https://techinnovations.example.com',
                'order' => 1,
                'is_published' => true,
            ],
            [
                'title' => 'Full Stack Developer',
                'organization' => 'Digital Solutions Ltd.',
                'description' => 'Developed and maintained multiple client projects using Laravel, React, and PostgreSQL. Implemented CI/CD pipelines and reduced deployment time by 60%. Collaborated with cross-functional teams to deliver high-quality solutions.',
                'role' => 'Full Stack Developer',
                'start_date' => now()->subYears(4),
                'end_date' => now()->subYears(2),
                'is_current' => false,
                'location' => 'New York, NY',
                'url' => 'https://digitalsolutions.example.com',
                'order' => 2,
                'is_published' => true,
            ],
            [
                'title' => 'Web Developer Intern',
                'organization' => 'Startup Hub',
                'description' => 'Assisted in building web applications and APIs. Learned best practices in software development, version control with Git, and agile methodologies. Contributed to multiple projects and gained hands-on experience with modern web technologies.',
                'role' => 'Intern',
                'start_date' => now()->subYears(5),
                'end_date' => now()->subYears(4)->addMonths(6),
                'is_current' => false,
                'location' => 'Remote',
                'order' => 3,
                'is_published' => true,
            ],
            [
                'title' => 'Open Source Contributor',
                'organization' => 'Laravel Framework',
                'description' => 'Active contributor to the Laravel ecosystem. Submitted bug fixes, feature enhancements, and documentation improvements. Engaged with the community through forums and helped other developers troubleshoot issues.',
                'role' => 'Contributor',
                'start_date' => now()->subYears(3),
                'end_date' => null,
                'is_current' => true,
                'location' => 'Remote',
                'url' => 'https://github.com/laravel/laravel',
                'order' => 4,
                'is_published' => true,
            ],
            [
                'title' => 'Tech Conference Speaker',
                'organization' => 'LaravelConf 2023',
                'description' => 'Delivered a talk on "Building Scalable Applications with Laravel Octane" to an audience of 500+ developers. Shared insights on performance optimization and best practices for high-traffic applications.',
                'role' => 'Speaker',
                'start_date' => now()->subMonths(8),
                'end_date' => now()->subMonths(8),
                'is_current' => false,
                'location' => 'Austin, TX',
                'url' => 'https://laravelconf.example.com',
                'order' => 5,
                'is_published' => true,
            ],
            [
                'title' => 'Volunteer Developer',
                'organization' => 'Code for Good Initiative',
                'description' => 'Volunteered to build web applications for non-profit organizations. Helped create a donation management system and a volunteer coordination platform, making a positive impact in the community.',
                'role' => 'Volunteer',
                'start_date' => now()->subYears(1),
                'end_date' => null,
                'is_current' => true,
                'location' => 'San Francisco, CA',
                'url' => 'https://codeforgood.example.com',
                'order' => 6,
                'is_published' => true,
            ],
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}
