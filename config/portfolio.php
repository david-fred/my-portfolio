<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Personal Information
    |--------------------------------------------------------------------------
    |
    | Your personal information displayed across the portfolio.
    |
    */

    'name' => env('PORTFOLIO_NAME', 'Your Name'),
    'tagline' => env('PORTFOLIO_TAGLINE', 'Full Stack Developer | UI/UX Enthusiast | Problem Solver'),
    'bio' => env('PORTFOLIO_BIO', 'I craft beautiful, performant, and scalable web applications. Passionate about creating seamless user experiences and clean code.'),
    
    /*
    |--------------------------------------------------------------------------
    | Contact Information
    |--------------------------------------------------------------------------
    |
    | Your contact details displayed on the contact page.
    |
    */

    'contact' => [
        'email' => env('PORTFOLIO_EMAIL', 'your.email@example.com'),
        'phone' => env('PORTFOLIO_PHONE', '+1 (555) 123-4567'),
        'location' => env('PORTFOLIO_LOCATION', 'San Francisco, CA'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Social Media Links
    |--------------------------------------------------------------------------
    |
    | Your social media profile links.
    |
    */

    'social' => [
        'github' => env('PORTFOLIO_GITHUB', 'https://github.com/yourusername'),
        'linkedin' => env('PORTFOLIO_LINKEDIN', 'https://linkedin.com/in/yourusername'),
        'twitter' => env('PORTFOLIO_TWITTER', 'https://twitter.com/yourusername'),
        'dribbble' => env('PORTFOLIO_DRIBBBLE', 'https://dribbble.com/yourusername'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Availability
    |--------------------------------------------------------------------------
    |
    | Whether you're currently available for work.
    |
    */

    'available' => env('PORTFOLIO_AVAILABLE', true),
    'availability_text' => env('PORTFOLIO_AVAILABILITY_TEXT', "I'm currently available for freelance projects and full-time opportunities. Let's build something amazing together!"),

    /*
    |--------------------------------------------------------------------------
    | SEO Settings
    |--------------------------------------------------------------------------
    |
    | Default SEO settings for your portfolio.
    |
    */

    'seo' => [
        'title' => env('PORTFOLIO_SEO_TITLE', 'Your Name - Full Stack Developer'),
        'description' => env('PORTFOLIO_SEO_DESCRIPTION', 'Portfolio of a passionate Full Stack Developer specializing in Laravel, Vue.js, and modern web technologies.'),
        'keywords' => env('PORTFOLIO_SEO_KEYWORDS', 'web developer, full stack developer, laravel, vue.js, php, javascript'),
    ],

    /*
    |--------------------------------------------------------------------------
    | Features
    |--------------------------------------------------------------------------
    |
    | Enable or disable portfolio features.
    |
    */

    'features' => [
        'blog' => env('PORTFOLIO_BLOG_ENABLED', false),
        'contact_form' => env('PORTFOLIO_CONTACT_FORM_ENABLED', true),
        'analytics' => env('PORTFOLIO_ANALYTICS_ENABLED', false),
    ],

];

