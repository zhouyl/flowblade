#!/bin/bash

# Flowblade Component Preview Server Installation Script
# This script sets up a local Laravel preview server for Flowblade components

set -e

echo "🚀 Flowblade Component Preview Server Installation"
echo "=================================================="
echo ""

# Check if we're in the right directory
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found. Please run this script from the project root."
    exit 1
fi

# Check if composer is installed
if ! command -v composer &> /dev/null; then
    echo "❌ Error: Composer is not installed. Please install Composer first."
    echo "   Visit: https://getcomposer.org/download/"
    exit 1
fi

# Install composer dependencies if vendor directory doesn't exist
if [ ! -d "vendor" ]; then
    echo "📦 Installing Composer dependencies..."
    composer install --no-dev --optimize-autoloader
    echo ""
else
    echo "✅ Composer dependencies already installed"
    echo ""
fi

# Create preview directory structure
echo "📁 Creating preview directory structure..."
mkdir -p preview/app
mkdir -p preview/bootstrap
mkdir -p preview/config
mkdir -p preview/database
mkdir -p preview/public
mkdir -p preview/resources/views
mkdir -p preview/routes
mkdir -p preview/storage/logs
mkdir -p preview/storage/framework/cache
mkdir -p preview/storage/framework/sessions
mkdir -p preview/storage/framework/views

# Create .env file for preview server
echo "⚙️  Creating .env file for preview server..."
cat > preview/.env << 'EOF'
APP_NAME="Flowblade Preview"
APP_ENV=local
APP_KEY=base64:$(php -r 'echo base64_encode(random_bytes(32));')
APP_DEBUG=true
APP_URL=http://localhost:8000

LOG_CHANNEL=stack
LOG_LEVEL=debug

DB_CONNECTION=sqlite
DB_DATABASE=:memory:

CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

MAIL_DRIVER=log
EOF

# Create a simple artisan file for preview server
echo "📝 Creating artisan bootstrap file..."
cat > preview/artisan << 'EOF'
#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

exit($kernel->handle(
    $input = new Symfony\Component\Console\Input\ArgvInput,
    new Symfony\Component\Console\Output\ConsoleOutput
));
EOF

chmod +x preview/artisan

# Create a simple server bootstrap
echo "🔧 Creating server bootstrap file..."
cat > preview/server.php << 'EOF'
<?php

// Flowblade Component Preview Server Bootstrap

$basePath = __DIR__ . '/..';

// Load the Flowblade package
require $basePath . '/vendor/autoload.php';

// Create a simple Laravel app instance
$app = require $basePath . '/bootstrap/app.php';

// Register the Flowblade service provider
$app->register(Flowblade\FlowbladeServiceProvider::class);

// Boot the application
$app->boot();

// Handle the request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);

$response->send();
$kernel->terminate($request, $response);
EOF

echo ""
echo "✅ Installation complete!"
echo ""
echo "📖 Next steps:"
echo "1. Run: php preview/artisan serve"
echo "2. Open: http://localhost:8000/preview"
echo ""
echo "For more information, see: docs/preview/README.md"

