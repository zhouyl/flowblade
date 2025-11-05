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
    echo "   To reinstall, delete the preview directory contents (except scripts) and run this script again."
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

# Backup preview scripts if they exist
if [ -d "preview" ]; then
    echo "📁 Backing up preview scripts..."
    mkdir -p .preview-backup
    cp preview/*.sh .preview-backup/ 2>/dev/null || true
    cp preview/*.md .preview-backup/ 2>/dev/null || true
    rm -rf preview
fi

# Create Laravel preview project
echo "📦 Creating Laravel preview project..."
composer create-project laravel/laravel preview --prefer-dist --no-interaction

# Restore preview scripts
if [ -d ".preview-backup" ]; then
    echo "📁 Restoring preview scripts..."
    cp .preview-backup/*.sh preview/ 2>/dev/null || true
    cp .preview-backup/*.md preview/ 2>/dev/null || true
    chmod +x preview/*.sh
    rm -rf .preview-backup
fi

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
// Add service provider after Application::configure
$search = "->withProviders([";
if (strpos($bootstrap, $search) !== false) {
    // Laravel 11+ style
    $replace = "->withProviders([\n        \Flowblade\FlowbladeServiceProvider::class,";
    $bootstrap = str_replace($search, $replace, $bootstrap);
} else {
    // Fallback: add before ->create()
    $search = "->create();";
    $replace = "->withProviders([\n        \Flowblade\FlowbladeServiceProvider::class,\n    ])\n    ->create();";
    $bootstrap = str_replace($search, $replace, $bootstrap);
}
file_put_contents("bootstrap/app.php", $bootstrap);
'

# Update bootstrap/app.php to load Flowblade preview routes
echo "📝 Setting up preview routes..."
php -r '
$bootstrap = file_get_contents("bootstrap/app.php");
// Add routes configuration
$search = "->withRouting(";
if (strpos($bootstrap, $search) !== false) {
    $replace = "->withRouting(\n        then: function () {\n            // Load Flowblade preview routes\n            \$previewRoutesPath = base_path(\"../routes/preview.php\");\n            if (file_exists(\$previewRoutesPath)) {\n                require \$previewRoutesPath;\n            }\n        },";
    $bootstrap = str_replace($search, $replace, $bootstrap);
    file_put_contents("bootstrap/app.php", $bootstrap);
}
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

