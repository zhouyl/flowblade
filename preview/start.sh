#!/bin/bash

# Flowblade Component Preview Server Start Script
# This script starts the local Laravel preview server

set -e

echo "🚀 Starting Flowblade Component Preview Server"
echo "=============================================="
echo ""

# Check if we're in the right directory
if [ ! -f "composer.json" ]; then
    echo "❌ Error: composer.json not found. Please run this script from the project root."
    exit 1
fi

# Check if preview directory exists
if [ ! -d "preview" ]; then
    echo "⚠️  Preview directory not found. Running installation..."
    bash preview/install.sh
fi

# Check if vendor directory exists
if [ ! -d "vendor" ]; then
    echo "📦 Installing dependencies..."
    composer install
fi

# Get the port from command line argument or use default
PORT=${1:-8000}
HOST=${2:-127.0.0.1}

echo "📝 Starting server on http://$HOST:$PORT"
echo "🌐 Preview URL: http://$HOST:$PORT/preview"
echo ""
echo "Press Ctrl+C to stop the server"
echo ""

# Start the Laravel development server
php artisan serve --host=$HOST --port=$PORT

