# Flowblade Component Preview Server

This directory contains scripts for setting up a local Laravel preview server to view and test Flowblade components.

## Quick Start

### Installation

Run the installation script from the project root to set up the preview server:

```bash
bash preview/install.sh
```

This will:
- Check if Composer is installed
- Install Flowblade package dependencies
- Create a new Laravel project in the `preview` directory
- Configure the Laravel project to use Flowblade package as a local dependency
- Register Flowblade service provider
- Set up preview routes

**Note**: The installation process may take a few minutes as it downloads Laravel and all dependencies.

### Starting the Server

After installation, start the preview server:

```bash
cd preview
php artisan serve
```

Or use the start script:

```bash
bash preview/start.sh
```

Then open your browser to: **http://localhost:8000/preview**

## Directory Structure

```
preview/
├── install.sh          # Installation script
├── start.sh            # Server startup script
├── README.md           # This file
├── .env                # Environment configuration (generated)
├── artisan             # Laravel artisan bootstrap (generated)
├── server.php          # Server bootstrap (generated)
├── app/                # Application directory
├── bootstrap/          # Bootstrap directory
├── config/             # Configuration directory
├── database/           # Database directory
├── public/             # Public assets directory
├── resources/          # Resources directory
├── routes/             # Routes directory
└── storage/            # Storage directory
```

## Features

- **Component Preview**: View all Flowblade components with live previews
- **Search & Filter**: Search components by name or category
- **Code Examples**: View code examples for each component
- **Responsive Design**: Works on desktop, tablet, and mobile devices
- **Dark Mode**: Syntax-highlighted code blocks

## Requirements

- PHP 8.0 or higher
- Composer
- Laravel 9.0 or higher

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, specify a different port:

```bash
bash preview/start.sh 8080
```

### Permission Denied

Make sure the scripts are executable:

```bash
chmod +x preview/install.sh
chmod +x preview/start.sh
```

### Composer Dependencies

If you get dependency errors, run:

```bash
composer install
```

## Notes

- The preview directory is ignored by Git (see `.gitignore`)
- The preview server uses an in-memory SQLite database
- All changes are temporary and will be lost when the server stops
- For production use, see the main documentation

## More Information

For more details about the preview system, see: `docs/preview/README.md`

