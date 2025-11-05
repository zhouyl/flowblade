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
if [ ! -d "preview/vendor" ]; then
    echo "⚠️  Preview project not found. Running installation..."
    bash preview/install.sh
fi

# Get the port from command line argument or use default
PORT=${1:-8000}
HOST=${2:-127.0.0.1}

echo "📝 Starting server on http://$HOST:$PORT"
echo "🌐 Preview URL: http://$HOST:$PORT/preview"
echo ""
echo "Press Ctrl+C to stop the server"
echo ""

# Change to preview directory and start the Laravel development server
cd preview
php artisan serve --host=$HOST --port=$PORT

