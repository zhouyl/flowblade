# Flowblade Component Preview

The Flowblade Component Preview is a local Laravel application that allows you to view and test all Flowblade components in a browser.

## Requirements

- PHP 8.3 or higher
- Composer
- Laravel 11 or higher

## Installation

Run the installation script from the project root:

```bash
bash scripts/preview-install.sh
```

This will:
1. Check PHP version (requires 8.3+)
2. Install Flowblade package dependencies
3. Create a new Laravel 11 project in the `preview` directory
4. Configure the Laravel project to use Flowblade as a local dependency (symlink)
5. Register Flowblade service provider
6. Set up preview routes

**Note**: The installation process may take a few minutes as it downloads Laravel and all dependencies.

## Starting the Preview Server

After installation, start the preview server:

```bash
bash scripts/preview-start.sh
```

Or with custom host and port:

```bash
bash scripts/preview-start.sh 8080 0.0.0.0
```

Then open your browser to: **http://localhost:8000/preview**

## Available Routes

The preview system provides the following routes:

- `/preview` - Preview home page with component categories
- `/preview/components` - List all components
- `/preview/components/{component}` - View specific component details
- `/preview/category/{category}` - Browse components by category
- `/preview/search` - Search components

## Features

### Component Browser

Browse all 139+ Flowblade components organized by category:

- **Buttons**: Button, Button Group, Close Button, Icon Button
- **Data Display**: Avatar, Badge, Card, Table, Timeline, etc.
- **Disclosure**: Accordion, Collapsible
- **Feedback**: Alert, Banner, Progress, Spinner, Toast, etc.
- **Forms**: Input, Select, Checkbox, Radio, File Upload, etc.
- **Layout**: Box, Flex, Grid, Container, Stack, etc.
- **Media**: Image, Video, Carousel, Gallery, QR Code
- **Navigation**: Navbar, Sidebar, Breadcrumb, Pagination, Tabs, etc.
- **Overlay**: Modal, Dialog, Drawer, Popover, Tooltip, etc.
- **Typography**: Heading, Text, Link, Code, Blockquote, etc.

### Component Details

Each component page includes:

- Live component preview
- Basic usage example
- Props reference
- Code examples
- Related components

### Search & Filter

- Search components by name or description
- Filter components by category
- View component statistics

## Directory Structure

```
preview/                    # Laravel preview project (gitignored)
├── app/                   # Laravel application
├── bootstrap/             # Laravel bootstrap
├── config/                # Laravel configuration
├── public/                # Public assets
├── resources/             # Views and assets
├── routes/                # Laravel routes
└── vendor/                # Dependencies (includes Flowblade symlink)

scripts/                   # Preview scripts
├── preview-install.sh    # Installation script
└── preview-start.sh      # Start server script
```

## Troubleshooting

### Port Already in Use

If port 8000 is already in use, specify a different port:

```bash
bash scripts/preview-start.sh 8080
```

### PHP Version Error

The preview requires PHP 8.3 or higher. Check your PHP version:

```bash
php -v
```

### Composer Dependencies

If you get dependency errors, try:

```bash
composer install
```

### Reinstalling

To reinstall the preview project:

```bash
rm -rf preview
bash scripts/preview-install.sh
```

## Development

The preview project uses Flowblade as a local dependency with symlink. Any changes to Flowblade components will be immediately reflected in the preview without reinstalling.

## Notes

- The preview directory is ignored by Git
- The preview uses an in-memory SQLite database
- All changes are temporary and will be lost when the server stops
- For production use, see the main documentation

## Related Documentation

- [Component Documentation](components/) - Individual component docs
- [Installation Guide](../README.md) - Main package installation
- [Contributing Guide](../CONTRIBUTING.md) - How to contribute

