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
- 🎛️ **Admin Panel**: Full-featured Filament admin dashboard for content management
- 📝 **Blog Management**: Complete blog system with rich text editing
- 🖼️ **Gallery**: Image gallery management system
- ⚙️ **Site Settings**: Centralized site configuration management

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
- **Admin Panel**: Filament 4
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
   - Access admin panel at `http://localhost:8000/admin`
   - Default admin credentials: `admin@portfolio.com` / `password`

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

- **User**: Admin users for content management
- **Project**: Portfolio projects
- **Activity**: Professional activities and experiences
- **Contact**: Contact form submissions
- **Blog**: Blog posts with rich content
- **GalleryImage**: Image gallery items
- **SiteSetting**: Site-wide configuration settings

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

## Admin Panel

The application includes a full-featured Filament admin panel for managing all content.

### Access Admin Panel

1. Navigate to `/admin` in your browser
2. Login with admin credentials (default: `admin@portfolio.com` / `password`)

### Admin Features

- **Projects Management**: Create, edit, and manage portfolio projects
- **Activities Management**: Manage professional activities and timeline entries
- **Blog Management**: Create and publish blog posts with rich content
- **Contact Management**: View and manage contact form submissions
- **Gallery Management**: Upload and organize gallery images
- **Site Settings**: Configure site-wide settings including resume information

### Content Management

All content can be managed through the admin panel:
- Projects with images, descriptions, and links
- Activities with timeline display
- Blog posts with featured images and tags
- Gallery images with categories
- Site settings for resume and general configuration

## Customization

### Personal Information

1. Update the hero section in `resources/views/home.blade.php`
2. Update resume data via Admin Panel → Site Settings
3. Update contact information in `resources/views/contact.blade.php`
4. Update social links in `resources/views/layouts/app.blade.php`

### Styling

1. Modify `resources/css/app.css` for custom styles
2. Update color scheme in TailwindCSS classes
3. Customize navigation in `resources/views/layouts/app.blade.php`

### Content

1. Add your projects via Admin Panel → Projects
2. Add your activities via Admin Panel → Activities
3. Manage blog posts via Admin Panel → Blogs
4. Upload gallery images via Admin Panel → Gallery Images
5. Configure site settings via Admin Panel → Site Settings

## Future Enhancements

- [x] Blog section activation
- [x] Admin dashboard for content management
- [x] Image upload functionality
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
- [Filament](https://filamentphp.com)
- [TailwindCSS](https://tailwindcss.com)
- [Swoole](https://www.swoole.co.uk)

## Support

For issues and questions, please open an issue in the repository.

---

Made with ❤️ using Laravel & TailwindCSS
