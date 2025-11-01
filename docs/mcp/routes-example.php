<?php

/**
 * Example: Flowblade MCP Server Routes Configuration
 *
 * This file demonstrates how to configure the Flowblade MCP Server
 * in your Laravel application's routes/ai.php file.
 *
 * To use this example:
 * 1. Install Laravel MCP: composer require laravel/mcp
 * 2. Publish routes: php artisan vendor:publish --tag=ai-routes
 * 3. Copy the relevant sections to your routes/ai.php file
 */

use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

// ============================================================================
// Example 1: Basic Web Server Registration
// ============================================================================
// This registers the Flowblade MCP Server as an HTTP endpoint
// Accessible at: http://localhost:8000/mcp/flowblade

Mcp::web('/mcp/flowblade', FlowbladeServer::class);

// ============================================================================
// Example 2: Local Server Registration
// ============================================================================
// This registers the Flowblade MCP Server as a local command-line server
// Usage: php artisan mcp:start flowblade

Mcp::local('flowblade', FlowbladeServer::class);

// ============================================================================
// Example 3: Web Server with Authentication (OAuth 2.1)
// ============================================================================
// This protects the MCP server with OAuth 2.1 authentication

Mcp::oauthRoutes();

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:api');

// ============================================================================
// Example 4: Web Server with Sanctum Authentication
// ============================================================================
// This protects the MCP server with Laravel Sanctum

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:sanctum');

// ============================================================================
// Example 5: Web Server with Rate Limiting
// ============================================================================
// This adds rate limiting to prevent abuse

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware(['throttle:mcp']);

// Configure the throttle limit in config/rate-limiting.php:
// 'mcp' => '60,1', // 60 requests per minute

// ============================================================================
// Example 6: Web Server with Multiple Middleware
// ============================================================================
// This combines authentication and rate limiting

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware(['auth:sanctum', 'throttle:mcp']);

// ============================================================================
// Example 7: Custom MCP Server
// ============================================================================
// This demonstrates how to create and register a custom MCP server

namespace App\Mcp\Servers;

use Flowblade\Mcp\Servers\FlowbladeServer;

class CustomFlowbladeServer extends FlowbladeServer
{
    /**
     * Custom instructions for your AI assistant
     */
    protected string $instructions = <<<'INSTRUCTIONS'
You are an AI assistant helping developers use Flowblade components.

Flowblade is a comprehensive Laravel Blade component library with 98+ components
organized into 9 categories: Layout, Button, Data Display, Navigation, Form,
Overlay, Feedback, Typography, and Media.

When helping developers:
1. Always recommend the most appropriate component for their use case
2. Provide code examples using Blade syntax
3. Mention component dependencies (Alpine.js, Livewire, etc.)
4. Suggest related components that might be useful
5. Refer to the component documentation for detailed information

Available tools:
- list-components: List all available components
- get-component-info: Get detailed information about a component
- search-components: Search for components by name or functionality

Available resources:
- flowblade://components/{component}: Access component documentation
INSTRUCTIONS;

    /**
     * Override the version if needed
     */
    protected string $version = '1.0.0';
}

// Register the custom server
Mcp::web('/mcp/flowblade', CustomFlowbladeServer::class)
    ->middleware('auth:sanctum');

// ============================================================================
// Example 8: Multiple MCP Servers
// ============================================================================
// This demonstrates how to register multiple MCP servers

// Flowblade MCP Server
Mcp::web('/mcp/flowblade', FlowbladeServer::class);

// Other MCP servers (if you have them)
// Mcp::web('/mcp/other-service', OtherServiceServer::class);

// ============================================================================
// Example 9: Conditional Registration
// ============================================================================
// This demonstrates how to conditionally register the MCP server

if (config('app.env') === 'local' || config('app.env') === 'testing') {
    // Register MCP server only in local and testing environments
    Mcp::web('/mcp/flowblade', FlowbladeServer::class);
}

// ============================================================================
// Example 10: Testing the MCP Server
// ============================================================================
// After registering the server, you can test it using:

// For web server:
// php artisan mcp:inspector mcp/flowblade

// For local server:
// php artisan mcp:inspector flowblade

// The inspector will provide connection details and allow you to test
// the tools and resources interactively.

// ============================================================================
// Configuration Tips
// ============================================================================

/*
1. AUTHENTICATION:
   - Use OAuth 2.1 for public APIs
   - Use Sanctum for SPA applications
   - Use custom middleware for specific requirements

2. RATE LIMITING:
   - Configure in config/rate-limiting.php
   - Use 'mcp' => '60,1' for 60 requests per minute
   - Adjust based on your needs

3. LOGGING:
   - Enable MCP logging in config/logging.php
   - Monitor logs in storage/logs/laravel.log

4. TESTING:
   - Use php artisan mcp:inspector to test
   - Test with different authentication methods
   - Verify all tools and resources work correctly

5. DEPLOYMENT:
   - Ensure MCP routes are accessible from your AI client
   - Configure CORS if needed
   - Use HTTPS in production
   - Implement proper authentication
   - Monitor performance and rate limiting
*/

// ============================================================================
// Complete Example: Production Setup
// ============================================================================

// Publish MCP routes
// php artisan vendor:publish --tag=ai-routes

// In routes/ai.php:

use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

// Register Flowblade MCP Server with authentication and rate limiting
Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware(['auth:sanctum', 'throttle:mcp']);

// Test the server
// php artisan mcp:inspector mcp/flowblade

// Use with AI client (e.g., Claude):
// 1. Configure MCP server URL: http://your-domain.com/mcp/flowblade
// 2. Add authentication token to headers
// 3. Start using Flowblade components with AI assistance

