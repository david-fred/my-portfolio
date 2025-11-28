# Quick Start Guide

Get your portfolio up and running in minutes!

## Prerequisites

Ensure you have the following installed:

-   PHP 8.2+
-   Composer
-   Node.js & NPM
-   MySQL 8.0+
-   Docker (optional, for containerized deployment)

## Quick Setup (5 minutes)

### Step 1: Run Setup Script

```bash
chmod +x setup.sh
./setup.sh
```

This script will:

-   Create `.env` file
-   Install PHP dependencies
-   Generate application key
-   Install Node dependencies
-   Build assets
-   Prompt for database migration and seeding

### Step 2: Configure Database

Edit `.env` file with your database credentials:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=portfolio
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 3: Personalize Your Portfolio

Edit `.env` file to add your personal information:

```env
PORTFOLIO_NAME="Your Name"
PORTFOLIO_TAGLINE="Full Stack Developer | UI/UX Enthusiast"
PORTFOLIO_BIO="Your bio here..."
PORTFOLIO_EMAIL="your.email@example.com"
PORTFOLIO_PHONE="+1 (555) 123-4567"
PORTFOLIO_LOCATION="Your Location"
PORTFOLIO_GITHUB="https://github.com/yourusername"
PORTFOLIO_LINKEDIN="https://linkedin.com/in/yourusername"
PORTFOLIO_TWITTER="https://twitter.com/yourusername"
```

### Step 4: Start the Server

```bash
php artisan octane:start --server=swoole --watch
```

Visit: http://localhost:8000

## Docker Setup (Alternative)

If you prefer Docker:

```bash
# Start containers
docker-compose up -d --build

# Run migrations
docker-compose exec app php artisan migrate --seed

# Visit http://localhost
```

## Customization

### Add Your Projects

1. **Via Seeder** (recommended for initial setup):

    - Edit `database/seeders/ProjectSeeder.php`
    - Run `php artisan db:seed --class=ProjectSeeder`

2. **Via Database**:
    - Insert directly into `projects` table
    - Or create an admin panel (future enhancement)

### Add Your Activities

1. **Via Seeder**:

    - Edit `database/seeders/ActivitySeeder.php`
    - Run `php artisan db:seed --class=ActivitySeeder`

2. **Via Database**:
    - Insert directly into `activities` table

### Update Resume

Edit `resources/views/resume.blade.php` to match your:

-   Skills
-   Work experience
-   Education
-   Certifications

### Change Design

-   **Colors**: Modify TailwindCSS classes in views
-   **Layout**: Edit `resources/views/layouts/app.blade.php`
-   **Custom CSS**: Add to `resources/css/app.css`
-   **Rebuild**: Run `npm run build`

## Default Credentials

After seeding, you'll have an admin user:

-   **Email**: admin@portfolio.com
-   **Password**: password

## Common Commands

```bash
# Development
php artisan octane:start --watch

# Build assets (development)
npm run dev

# Build assets (production)
npm run build

# Clear cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Production Deployment

1. Set environment to production:

```env
APP_ENV=production
APP_DEBUG=false
```

2. Run deployment script:

```bash
chmod +x deploy.sh
./deploy.sh
```

3. Or use Docker:

```bash
docker-compose -f docker-compose.yml up -d
```

## Troubleshooting

### Permission Issues

```bash
chmod -R 755 storage bootstrap/cache
```

### Asset Build Errors

```bash
rm -rf node_modules package-lock.json
npm install
npm run build
```

### Database Connection Failed

-   Check MySQL service is running
-   Verify credentials in `.env`
-   Ensure database exists

### Octane Won't Start

```bash
# Install Swoole
pecl install swoole

# Or use RoadRunner
composer require spiral/roadrunner
php artisan octane:install --server=roadrunner
```

## Next Steps

1. ✅ Customize personal information
2. ✅ Add your real projects
3. ✅ Update resume content
4. ✅ Add your profile photos
5. ✅ Configure SEO settings
6. ✅ Set up analytics (optional)
7. ✅ Deploy to production

## Support

For issues and questions:

-   Check `README.md` for detailed documentation
-   Review Laravel documentation: https://laravel.com/docs
-   Review Octane documentation: https://laravel.com/docs/octane

## What's Included

✨ **Features**:

-   Multi-page portfolio (Home, Resume, Projects, Activities, Contact, Blog)
-   Laravel 12 + Octane (Swoole)
-   TailwindCSS v4
-   MySQL database
-   Docker support
-   Contact form with database storage
-   Responsive design
-   SEO optimized
-   Sample data included

🚀 **Performance**:

-   Lightning fast with Laravel Octane
-   Optimized asset pipeline
-   Efficient database queries
-   Production-ready caching

Happy Building! 🎉
