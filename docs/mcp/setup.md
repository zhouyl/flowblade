# Flowblade MCP Server Setup Guide

This guide walks you through setting up the Flowblade MCP Server in your Laravel application.

## Prerequisites

- Laravel 11.0+ or 12.0+
- PHP 8.3+
- Composer

## Step 1: Install Laravel MCP

First, install the Laravel MCP package:

```bash
composer require laravel/mcp
```

## Step 2: Publish MCP Routes

Publish the MCP routes file:

```bash
php artisan vendor:publish --tag=ai-routes
```

This creates a `routes/ai.php` file in your application.

## Step 3: Register Flowblade MCP Server

Edit your `routes/ai.php` file and add the Flowblade MCP Server:

```php
<?php

use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

// Register Flowblade MCP Server as a web server
Mcp::web('/mcp/flowblade', FlowbladeServer::class);

// Or register as a local server for command-line usage
Mcp::local('flowblade', FlowbladeServer::class);
```

## Step 4: Configure Authentication (Optional)

If you want to protect your MCP server, add authentication middleware:

### Using OAuth 2.1 (Recommended)

```php
use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::oauthRoutes();

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:api');
```

### Using Sanctum

```php
use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:sanctum');
```

## Step 5: Test the MCP Server

Use the MCP Inspector to test your server:

```bash
# For web server
php artisan mcp:inspector mcp/flowblade

# For local server
php artisan mcp:inspector flowblade
```

The inspector will provide connection details and allow you to test the tools and resources.

## Step 6: Configure Your AI Client

Configure your AI client (e.g., Claude, ChatGPT) to use the Flowblade MCP Server:

### For Web Servers

**Connection Details**:
- **URL**: `http://localhost:8000/mcp/flowblade` (or your application URL)
- **Method**: HTTP POST
- **Headers**: Include authentication headers if required

### For Local Servers

**Command**: `php artisan mcp:start flowblade`

## Usage Examples

### Example 1: List Components

```
User: "What Flowblade components are available for forms?"

AI uses: list-components tool with category="form"

Response: Lists all form components (input, select, checkbox, etc.)
```

### Example 2: Get Component Details

```
User: "How do I use the button component?"

AI uses: get-component-info tool with component="button"

Response: Returns button component properties and usage information
```

### Example 3: Search Components

```
User: "I need a component for date selection"

AI uses: search-components tool with query="date"

Response: Returns datepicker and date-range-picker components
```

## Troubleshooting

### Issue: "Class not found" error

**Solution**: Ensure Flowblade is properly installed:

```bash
composer require mellivora/flowblade
```

### Issue: MCP Server not responding

**Solution**: 
1. Check that Laravel MCP is installed
2. Verify the server is registered in `routes/ai.php`
3. Check Laravel logs: `tail -f storage/logs/laravel.log`

### Issue: Authentication errors

**Solution**:
1. Ensure authentication middleware is properly configured
2. Verify API tokens or OAuth credentials
3. Check that the authenticated user has permission to access the MCP server

## Advanced Configuration

### Custom MCP Server

You can create a custom MCP server that extends the Flowblade server:

```php
<?php

namespace App\Mcp\Servers;

use Flowblade\Mcp\Servers\FlowbladeServer;

class CustomFlowbladeServer extends FlowbladeServer
{
    protected string $instructions = 'Custom instructions for your AI assistant...';
    
    // Add custom tools or resources here
}
```

Then register it:

```php
use App\Mcp\Servers\CustomFlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

Mcp::web('/mcp/flowblade', CustomFlowbladeServer::class);
```

### Rate Limiting

Add rate limiting to your MCP server:

```php
Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware(['throttle:mcp']);
```

Configure the throttle limit in `config/rate-limiting.php`:

```php
'mcp' => '60,1', // 60 requests per minute
```

## Next Steps

1. Read the [MCP Server documentation](./README.md)
2. Explore [component documentation](../components/README.md)
3. Check [Flowblade installation guide](../installation.md)
4. Review [Laravel MCP documentation](https://laravel.com/docs/mcp)

## Support

For issues or questions:

1. Check the [Flowblade GitHub repository](https://github.com/zhouyl/flowblade)
2. Review [Laravel MCP documentation](https://laravel.com/docs/mcp)
3. Open an issue on GitHub

## License

Flowblade is open-source software licensed under the MIT license.

