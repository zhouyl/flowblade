#!/bin/bash

# Flowblade Component Preview Server Installation Script
# This script creates a Laravel preview project for Flowblade components

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

# Check if preview directory already exists
if [ -d "preview/vendor" ]; then
    echo "⚠️  Preview project already exists. Skipping installation."
    echo "   To reinstall, delete the preview directory and run this script again."
    echo ""
    echo "📖 To start the preview server:"
    echo "   cd preview && php artisan serve"
    echo "   Then open: http://localhost:8000/preview"
    exit 0
fi

# Install Flowblade package dependencies first
if [ ! -d "vendor" ]; then
    echo "📦 Installing Flowblade package dependencies..."
    composer install --no-dev --optimize-autoloader
    echo ""
fi

# Create Laravel preview project
echo "📦 Creating Laravel preview project..."
composer create-project laravel/laravel preview --prefer-dist --no-interaction

echo ""
echo "⚙️  Configuring preview project..."

# Add Flowblade package as a local repository
cd preview

# Update composer.json to include Flowblade package
echo "📝 Adding Flowblade package to composer.json..."
php -r '
$composer = json_decode(file_get_contents("composer.json"), true);
$composer["repositories"] = [
    [
        "type" => "path",
        "url" => "../",
        "options" => [
            "symlink" => true
        ]
    ]
];
$composer["require"]["flowblade/flowblade"] = "@dev";
file_put_contents("composer.json", json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
'

# Install Flowblade package
echo "📦 Installing Flowblade package..."
composer require flowblade/flowblade:@dev --no-interaction

# Update .env file
echo "⚙️  Updating .env configuration..."
sed -i.bak 's/APP_NAME=Laravel/APP_NAME="Flowblade Preview"/' .env
rm -f .env.bak

# Register Flowblade service provider in config/app.php
echo "📝 Registering Flowblade service provider..."
php -r '
$config = file_get_contents("config/app.php");
$search = "App\Providers\RouteServiceProvider::class,";
$replace = "App\Providers\RouteServiceProvider::class,\n        Flowblade\FlowbladeServiceProvider::class,";
$config = str_replace($search, $replace, $config);
file_put_contents("config/app.php", $config);
'

# Create a route file that includes Flowblade preview routes
echo "📝 Setting up preview routes..."
cat > routes/preview.php << 'EOF'
<?php

// Include Flowblade preview routes
$previewRoutesPath = base_path('../routes/preview.php');
if (file_exists($previewRoutesPath)) {
    require $previewRoutesPath;
}
EOF

# Update RouteServiceProvider to load preview routes
php -r '
$provider = file_get_contents("app/Providers/RouteServiceProvider.php");
$search = "Route::middleware('\''web'\'')";
$replace = "// Load Flowblade preview routes\n        if (file_exists(base_path('\''routes/preview.php'\''))) {\n            require base_path('\''routes/preview.php'\'');\n        }\n\n        Route::middleware('\''web'\'')";
$provider = str_replace($search, $replace, $provider);
file_put_contents("app/Providers/RouteServiceProvider.php", $provider);
'

cd ..

echo ""
echo "✅ Installation complete!"
echo ""
echo "📖 Next steps:"
echo "1. cd preview"
echo "2. php artisan serve"
echo "3. Open: http://localhost:8000/preview"
echo ""
echo "For more information, see: preview/README.md"

