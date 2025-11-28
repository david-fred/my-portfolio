# myPortfolio

My portfolio website built with Laravel Octane/Swoole, Tailwind CSS, Docker, and MySQL.

# Portfolio Website

A modern, multi-page portfolio website built with Laravel 12, Laravel Octane (Swoole), TailwindCSS v4, MySQL, and Docker.

## Features

- ⚡ **Lightning Fast**: Powered by Laravel Octane with Swoole for exceptional performance
- 🎨 **Modern Design**: Beautiful UI built with TailwindCSS v4
- 📱 **Fully Responsive**: Works perfectly on all devices
- 🗄️ **Dynamic Content**: All content stored in MySQL database
- 🐳 **Docker Ready**: Easy deployment with Docker and Docker Compose
- 📧 **Contact Form**: Direct messaging system with database storage
- 🔮 **Future Ready**: Blog section ready for future implementation

## Pages

- **Home**: Hero section with featured projects and recent activities
- **Resume**: Professional experience, skills, education, and certifications
- **Projects**: Showcase of all projects with filtering and detailed views
- **Activities**: Timeline of professional activities and experiences
- **Contact**: Contact form with direct messaging
- **Blog**: Ready for future blog posts

## Tech Stack

- **Backend**: Laravel 12 with Octane (Swoole)
- **Frontend**: TailwindCSS v4, Blade Templates
- **Database**: MySQL 8.0
- **Cache**: Redis
- **Server**: Nginx + Laravel Octane
- **Deployment**: Docker & Docker Compose

## Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js & NPM
- MySQL 8.0
- Docker & Docker Compose (for containerized deployment)

### Local Development

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd myPortfolio
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node dependencies**
   ```bash
   npm install
   ```

4. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database**
   - Update `.env` with your database credentials
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=portfolio
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

6. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Build assets**
   ```bash
   npm run build
   ```

8. **Start Octane server**
   ```bash
   php artisan octane:start --server=swoole --watch
   ```

9. **Visit the application**
   - Open your browser to `http://localhost:8000`

### Docker Deployment

1. **Build and start containers**
   ```bash
   docker-compose up -d --build
   ```

2. **Run migrations and seeders**
   ```bash
   docker-compose exec app php artisan migrate --seed
   ```

3. **Visit the application**
   - Open your browser to `http://localhost`

## Configuration

### Octane

The application is configured to use Swoole as the Octane server. You can modify settings in `config/octane.php`.

To start Octane:
```bash
php artisan octane:start --server=swoole --watch
```

### TailwindCSS

Custom styles are defined in `resources/css/app.css`. Build assets with:
```bash
npm run dev    # Development
npm run build  # Production
```

## Database Structure

### Models

- **User**: Admin users for blog management
- **Project**: Portfolio projects
- **Activity**: Professional activities and experiences
- **Contact**: Contact form submissions
- **Blog**: Future blog posts

### Seeders

Sample data is provided for:
- Projects (6 sample projects)
- Activities (6 sample activities)
- Admin user (email: admin@portfolio.com)

## Deployment

### Production Checklist

1. Set `APP_ENV=production` in `.env`
2. Set `APP_DEBUG=false` in `.env`
3. Configure proper database credentials
4. Run `php artisan config:cache`
5. Run `php artisan route:cache`
6. Run `php artisan view:cache`
7. Ensure storage directory is writable
8. Set up SSL certificate for HTTPS

### Docker Production

1. Update environment variables in `docker-compose.yml`
2. Configure SSL certificates
3. Update nginx configuration for your domain
4. Run `docker-compose up -d`

## Customization

### Personal Information

1. Update the hero section in `resources/views/home.blade.php`
2. Update resume data in `resources/views/resume.blade.php`
3. Update contact information in `resources/views/contact.blade.php`
4. Update social links in `resources/views/layouts/app.blade.php`

### Styling

1. Modify `resources/css/app.css` for custom styles
2. Update color scheme in TailwindCSS classes
3. Customize navigation in `resources/views/layouts/app.blade.php`

### Content

1. Add your projects via database or seeders
2. Add your activities via database or seeders
3. Update the About section as needed

## Future Enhancements

- [ ] Blog section activation
- [ ] Admin dashboard for content management
- [ ] Image upload functionality
- [ ] Advanced search and filtering
- [ ] Social media integration
- [ ] Analytics dashboard
- [ ] Newsletter subscription
- [ ] Multi-language support

## Performance

Laravel Octane with Swoole provides exceptional performance:
- Persistent application state
- Reduced bootstrap overhead
- Concurrent request handling
- WebSocket support ready

## Security

- CSRF protection enabled
- XSS protection
- SQL injection prevention via Eloquent ORM
- Environment variables for sensitive data
- Password hashing with bcrypt

## License

This project is open-sourced software licensed under the MIT license.

## Credits

Built with:
- [Laravel](https://laravel.com)
- [Laravel Octane](https://laravel.com/docs/octane)
- [TailwindCSS](https://tailwindcss.com)
- [Swoole](https://www.swoole.co.uk)

## Support

For issues and questions, please open an issue in the repository.

---

Made with ❤️ using Laravel & TailwindCSS
