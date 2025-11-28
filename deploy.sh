#!/bin/bash

echo "=========================================="
echo "Portfolio Website Deployment Script"
echo "=========================================="
echo ""

# Pull latest changes
echo "Pulling latest changes..."
git pull origin main
echo "✓ Changes pulled"

# Install/Update dependencies
echo ""
echo "Updating PHP dependencies..."
composer install --no-dev --optimize-autoloader --no-interaction
echo "✓ PHP dependencies updated"

# Install/Update Node dependencies
echo ""
echo "Updating Node dependencies..."
npm ci
echo "✓ Node dependencies updated"

# Build assets
echo ""
echo "Building production assets..."
npm run build
echo "✓ Assets built"

# Run migrations
echo ""
read -p "Do you want to run migrations? (y/n) " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
    echo "Running migrations..."
    php artisan migrate --force
    echo "✓ Migrations completed"
fi

# Clear and cache
echo ""
echo "Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
echo "✓ Caches optimized"

# Restart Octane
echo ""
echo "Restarting Octane server..."
php artisan octane:reload
echo "✓ Octane reloaded"

echo ""
echo "=========================================="
echo "Deployment completed successfully!"
echo "=========================================="
echo ""

