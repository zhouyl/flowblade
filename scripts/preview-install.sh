#!/bin/bash

# Flowblade Component Preview Server Installation Script
# This script creates a Laravel preview project for Flowblade components
# Requirements: PHP 8.3+, Composer, Laravel 11+

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

# Check PHP version
PHP_VERSION=$(php -r 'echo PHP_VERSION;')
PHP_MAJOR=$(php -r 'echo PHP_MAJOR_VERSION;')
PHP_MINOR=$(php -r 'echo PHP_MINOR_VERSION;')

if [ "$PHP_MAJOR" -lt 8 ] || ([ "$PHP_MAJOR" -eq 8 ] && [ "$PHP_MINOR" -lt 3 ]); then
    echo "❌ Error: PHP 8.3 or higher is required. Current version: $PHP_VERSION"
    exit 1
fi

echo "✅ PHP version: $PHP_VERSION"
echo ""

# Check if preview directory already exists
if [ -d "preview/vendor" ]; then
    echo "⚠️  Preview project already exists."
    echo "   To reinstall, run: rm -rf preview && bash scripts/preview-install.sh"
    echo ""
    echo "📖 To start the preview server:"
    echo "   bash scripts/preview-start.sh"
    exit 0
fi

# Install Flowblade package dependencies first
if [ ! -d "vendor" ]; then
    echo "📦 Installing Flowblade package dependencies..."
    composer install --no-dev --optimize-autoloader
    echo ""
fi

# Remove preview directory if it exists
if [ -d "preview" ]; then
    echo "📁 Removing existing preview directory..."
    rm -rf preview
fi

# Create Laravel preview project
echo "📦 Creating Laravel preview project..."
composer create-project laravel/laravel preview --prefer-dist --no-interaction

echo ""
echo "⚙️  Configuring preview project..."

# Change to preview directory
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
file_put_contents("composer.json", json_encode($composer, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
'

# Install Flowblade package
echo "📦 Installing Flowblade package..."
composer require mellivora/flowblade:@dev --no-interaction

# Update .env file
echo "⚙️  Updating .env configuration..."
sed -i.bak 's/APP_NAME=Laravel/APP_NAME="Flowblade Preview"/' .env
rm -f .env.bak

# Register Flowblade service provider in bootstrap/app.php
echo "📝 Registering Flowblade service provider..."
php -r '
$bootstrap = file_get_contents("bootstrap/app.php");
// Add service provider
$search = "->create();";
$replace = "->withProviders([\n        \Flowblade\FlowbladeServiceProvider::class,\n    ])\n    ->create();";
$bootstrap = str_replace($search, $replace, $bootstrap);
file_put_contents("bootstrap/app.php", $bootstrap);
'

# Update bootstrap/app.php to load Flowblade preview routes
echo "📝 Setting up preview routes..."
php -r '
$bootstrap = file_get_contents("bootstrap/app.php");
// Add routes configuration
$search = "->withRouting(";
$replace = "->withRouting(\n        then: function () {\n            // Load Flowblade preview routes\n            \$previewRoutesPath = base_path(\"../routes/preview.php\");\n            if (file_exists(\$previewRoutesPath)) {\n                require \$previewRoutesPath;\n            }\n        },";
$bootstrap = str_replace($search, $replace, $bootstrap);
file_put_contents("bootstrap/app.php", $bootstrap);
'

cd ..

echo ""
echo "✅ Installation complete!"
echo ""
echo "📖 Next steps:"
echo "1. bash scripts/preview-start.sh"
echo "2. Open: http://localhost:8000/preview"
echo ""
echo "For more information, see: docs/preview.md"

