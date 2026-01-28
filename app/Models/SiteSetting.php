<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'name',
        'tagline',
        'bio',
        'profile_photo',
        'contact_email',
        'contact_phone',
        'contact_location',
        'social_github',
        'social_linkedin',
        'social_twitter',
        'social_substack',
        'available',
        'availability_text',
        'seo_title',
        'seo_description',
        'seo_keywords',
        'feature_blog',
        'feature_contact_form',
        'feature_analytics',
        'resume_summary',
        'resume_skills',
        'resume_experiences',
        'resume_education',
        'resume_certifications',
        'resume_file',
    ];

    protected $casts = [
        'available' => 'boolean',
        'feature_blog' => 'boolean',
        'feature_contact_form' => 'boolean',
        'feature_analytics' => 'boolean',
        'resume_skills' => 'array',
        'resume_experiences' => 'array',
        'resume_education' => 'array',
        'resume_certifications' => 'array',
    ];

    public static function instance(): self
    {
        $settings = static::query()->first();

        if (! $settings) {
            $settings = static::query()->create([
                'name' => config('portfolio.name'),
                'tagline' => config('portfolio.tagline'),
                'bio' => config('portfolio.bio'),
                'contact_email' => config('portfolio.contact.email'),
                'contact_phone' => config('portfolio.contact.phone'),
                'contact_location' => config('portfolio.contact.location'),
                'social_github' => config('portfolio.social.github'),
                'social_linkedin' => config('portfolio.social.linkedin'),
                'social_twitter' => config('portfolio.social.twitter'),
                'social_substack' => config('portfolio.social.substack'),
                'available' => config('portfolio.available'),
                'availability_text' => config('portfolio.availability_text'),
                'seo_title' => config('portfolio.seo.title'),
                'seo_description' => config('portfolio.seo.description'),
                'seo_keywords' => config('portfolio.seo.keywords'),
                'feature_blog' => config('portfolio.features.blog'),
                'feature_contact_form' => config('portfolio.features.contact_form'),
                'feature_analytics' => config('portfolio.features.analytics'),
            ]);
        }

        return $settings;
    }
}
