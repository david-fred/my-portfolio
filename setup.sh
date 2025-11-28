#!/bin/bash

echo "=========================================="
echo "Portfolio Website Setup Script"
echo "=========================================="
echo ""

# Check if .env exists
if [ ! -f .env ]; then
    echo "Creating .env file..."
    cp .env.example .env
    echo "✓ .env file created"
else
    echo "✓ .env file already exists"
fi

# Install PHP dependencies
echo ""
echo "Installing PHP dependencies..."
composer install
echo "✓ PHP dependencies installed"

# Generate application key
echo ""
echo "Generating application key..."
php artisan key:generate
echo "✓ Application key generated"

# Install Node dependencies
echo ""
echo "Installing Node dependencies..."
npm install
echo "✓ Node dependencies installed"

# Build assets
echo ""
echo "Building assets..."
npm run build
echo "✓ Assets built"

# Create database
echo ""
read -p "Do you want to run migrations? (y/n) " -n 1 -r
echo
if [[ $REPLY =~ ^[Yy]$ ]]
then
    echo "Running migrations..."
    php artisan migrate
    echo "✓ Migrations completed"
    
    echo ""
    read -p "Do you want to seed the database with sample data? (y/n) " -n 1 -r
    echo
    if [[ $REPLY =~ ^[Yy]$ ]]
    then
        echo "Seeding database..."
        php artisan db:seed
        echo "✓ Database seeded"
    fi
fi

# Create storage symlink
echo ""
echo "Creating storage symlink..."
php artisan storage:link
echo "✓ Storage symlink created"

# Set permissions
echo ""
echo "Setting permissions..."
chmod -R 755 storage bootstrap/cache
echo "✓ Permissions set"

echo ""
echo "=========================================="
echo "Setup completed successfully!"
echo "=========================================="
echo ""
echo "To start the development server, run:"
echo "  php artisan octane:start --server=swoole --watch"
echo ""
echo "Then visit: http://localhost:8000"
echo ""
echo "For Docker deployment, run:"
echo "  docker-compose up -d --build"
echo ""

