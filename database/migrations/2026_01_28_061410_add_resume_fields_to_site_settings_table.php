<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->text('resume_summary')->nullable()->after('feature_analytics');
            $table->json('resume_skills')->nullable()->after('resume_summary');
            $table->json('resume_experiences')->nullable()->after('resume_skills');
            $table->json('resume_education')->nullable()->after('resume_experiences');
            $table->json('resume_certifications')->nullable()->after('resume_education');
        });
    }

    public function down(): void
    {
        Schema::table('site_settings', function (Blueprint $table) {
            $table->dropColumn([
                'resume_summary',
                'resume_skills',
                'resume_experiences',
                'resume_education',
                'resume_certifications',
            ]);
        });
    }
};
