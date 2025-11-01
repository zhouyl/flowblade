# Flowblade Component Preview

The Flowblade Component Preview system provides an interactive web interface for browsing, searching, and previewing all available Flowblade components.

## Overview

The preview system includes:

1. **Component Browser** - Browse all 98+ components organized by category
2. **Search Functionality** - Search components by name or description
3. **Category Filtering** - Filter components by category
4. **Component Details** - View detailed information about each component
5. **Code Examples** - See usage examples for each component
6. **Responsive Design** - Works on desktop, tablet, and mobile devices

## Installation

The preview routes are automatically loaded when you install Flowblade. No additional configuration is required.

### Manual Route Registration

If you need to manually register the preview routes, add this to your `routes/web.php`:

```php
require base_path('vendor/mellivora/flowblade/routes/preview.php');
```

## Accessing the Preview

Once installed, access the component preview at:

```
http://localhost:8000/preview
```

## Features

### 1. Home Page

The home page provides:
- Quick links to browse components
- Search functionality
- Category overview
- Key features of Flowblade
- Getting started guide

**Route**: `/preview`

### 2. All Components

Browse all available components in a grid layout with:
- Component name and description
- Category badge
- Category icon
- Direct link to component details

**Route**: `/preview/components`

### 3. Category View

View all components in a specific category:
- Category name and description
- All components in the category
- Links to other categories

**Route**: `/preview/category/{category}`

Available categories:
- `layout` - Layout and container components
- `button` - Button and action components
- `data-display` - Data display components
- `navigation` - Navigation and menu components
- `form` - Form input components
- `overlay` - Modal and overlay components
- `feedback` - Alert and feedback components
- `typography` - Text and typography components
- `media` - Image and media components

### 4. Component Details

View detailed information about a specific component:
- Component preview
- Basic usage example
- Properties table
- Multiple usage examples
- Related components

**Route**: `/preview/component/{component}`

### 5. Search

Search for components by name or description:
- Real-time search results
- Relevance scoring
- Category filtering
- Direct links to component details

**Route**: `/preview/search?q={query}`

## Navigation

### Sidebar Navigation

The sidebar provides:
- Quick access to home page
- All components link
- Search box
- Category links
- Responsive mobile menu

### Breadcrumbs

Each page includes breadcrumbs for easy navigation:
- Home
- Current page
- Related pages

## Customization

### Styling

The preview uses Tailwind CSS for styling. To customize the appearance:

1. Publish the views:
```bash
php artisan vendor:publish --tag=flowblade-views
```

2. Edit the preview views in `resources/views/vendor/flowblade/preview/`

### Adding Custom Components

To add custom components to the preview:

1. Extend the `PreviewController`:
```php
namespace App\Http\Controllers;

use Flowblade\Http\Controllers\PreviewController as BaseController;

class PreviewController extends BaseController
{
    protected function getAllComponents(): array
    {
        $components = parent::getAllComponents();
        
        // Add your custom components
        $components['my-component'] = [
            'name' => 'My Component',
            'category' => 'custom',
            'description' => 'My custom component',
        ];
        
        return $components;
    }
}
```

2. Register your controller in `routes/web.php`:
```php
Route::get('/preview', [App\Http\Controllers\PreviewController::class, 'index']);
// ... other routes
```

## API Endpoints

The preview system provides the following endpoints:

| Endpoint | Method | Description |
|----------|--------|-------------|
| `/preview` | GET | Home page |
| `/preview/components` | GET | All components |
| `/preview/component/{component}` | GET | Component details |
| `/preview/category/{category}` | GET | Components by category |
| `/preview/search` | GET | Search components |

## Query Parameters

### Search Endpoint

- `q` - Search query (required)

Example:
```
/preview/search?q=button
```

## Troubleshooting

### Preview Routes Not Working

1. Ensure Flowblade is properly installed:
```bash
composer require mellivora/flowblade
```

2. Clear the route cache:
```bash
php artisan route:clear
```

3. Check that the routes are loaded in `routes/web.php`

### Styling Issues

1. Ensure Tailwind CSS is properly configured
2. Run `npm run dev` to compile CSS
3. Clear the browser cache

### Components Not Showing

1. Verify the component name is correct
2. Check that the component is registered in the ServiceProvider
3. Ensure the component class exists

## Best Practices

1. **Use the search feature** - Quickly find components by name or functionality
2. **Browse by category** - Discover related components
3. **Check examples** - Review code examples before using components
4. **Read documentation** - Each component has detailed documentation
5. **Test locally** - Test components in your application before deploying

## Performance

The preview system is optimized for performance:

- Lazy loading of component information
- Efficient search algorithm
- Minimal database queries
- Client-side filtering and sorting

## Security

The preview routes are public by default. To restrict access:

1. Add authentication middleware:
```php
Route::middleware(['auth'])->group(function () {
    require base_path('vendor/mellivora/flowblade/routes/preview.php');
});
```

2. Or use a custom middleware:
```php
Route::middleware(['custom-auth'])->group(function () {
    require base_path('vendor/mellivora/flowblade/routes/preview.php');
});
```

## Support

For issues or questions:

1. Check the [Flowblade documentation](../README.md)
2. Review the [component documentation](../components/README.md)
3. Open an issue on [GitHub](https://github.com/zhouyl/flowblade/issues)

## License

The Flowblade Component Preview is open-source software licensed under the MIT license.

