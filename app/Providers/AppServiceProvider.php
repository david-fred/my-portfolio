<?php

namespace App\Providers;

use App\Models\SiteSetting;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->mergeSiteSettingsIntoConfig();
    }

    protected function mergeSiteSettingsIntoConfig(): void
    {
        if (! Schema::hasTable('site_settings')) {
            return;
        }

        $s = SiteSetting::query()->first();
        if (! $s) {
            return;
        }

        config([
            'portfolio.name' => $s->name,
            'portfolio.tagline' => $s->tagline,
            'portfolio.bio' => $s->bio,
            'portfolio.profile_photo' => $s->profile_photo,
            'portfolio.contact.email' => $s->contact_email,
            'portfolio.contact.phone' => $s->contact_phone,
            'portfolio.contact.location' => $s->contact_location,
            'portfolio.social.github' => $s->social_github,
            'portfolio.social.linkedin' => $s->social_linkedin,
            'portfolio.social.twitter' => $s->social_twitter,
            'portfolio.social.substack' => $s->social_substack,
            'portfolio.available' => $s->available,
            'portfolio.availability_text' => $s->availability_text,
            'portfolio.seo.title' => $s->seo_title,
            'portfolio.seo.description' => $s->seo_description,
            'portfolio.seo.keywords' => $s->seo_keywords,
            'portfolio.features.blog' => $s->feature_blog,
            'portfolio.features.contact_form' => $s->feature_contact_form,
            'portfolio.features.analytics' => $s->feature_analytics,
            'portfolio.resume.file' => $s->resume_file,
            'portfolio.resume.summary' => $s->resume_summary,
            'portfolio.resume.skills' => $s->resume_skills,
            'portfolio.resume.experiences' => $s->resume_experiences,
            'portfolio.resume.education' => $s->resume_education,
            'portfolio.resume.certifications' => $s->resume_certifications,
        ]);
    }
}
