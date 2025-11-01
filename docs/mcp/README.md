# Flowblade MCP Server

The Flowblade MCP (Model Context Protocol) Server provides AI clients with comprehensive access to Flowblade component information, documentation, and utilities through the Model Context Protocol.

## Overview

The MCP Server enables AI assistants and language models to:

1. **List all available Flowblade components** - Get a complete inventory of components organized by category
2. **Get detailed component information** - Retrieve properties, usage patterns, and documentation links
3. **Search for components** - Find components by name or functionality
4. **Access component documentation** - Read component guides and usage examples

## Installation

To use the Flowblade MCP Server in your Laravel application:

### 1. Install Laravel MCP

```bash
composer require laravel/mcp
```

### 2. Publish MCP Routes

```bash
php artisan vendor:publish --tag=ai-routes
```

### 3. Register the Flowblade MCP Server

In your `routes/ai.php` file, add:

```php
use Flowblade\Mcp\Servers\FlowbladeServer;
use Laravel\Mcp\Facades\Mcp;

// Register as a web server (HTTP-accessible)
Mcp::web('/mcp/flowblade', FlowbladeServer::class);

// Or register as a local server (command-line)
Mcp::local('flowblade', FlowbladeServer::class);
```

## Available Tools

### 1. List Components

Lists all available Flowblade components with their basic information.

**Tool Name**: `list-components`

**Parameters**:
- `category` (optional): Filter by category (layout, button, data-display, navigation, form, overlay, feedback, typography, media)

**Example**:
```
List all button components
```

**Response**:
```json
{
  "status": "success",
  "total": 4,
  "components": [
    {
      "name": "button",
      "category": "button",
      "description": "A primary button component"
    },
    {
      "name": "icon-button",
      "category": "button",
      "description": "A button with icon support"
    },
    ...
  ]
}
```

### 2. Get Component Info

Retrieves detailed information about a specific component.

**Tool Name**: `get-component-info`

**Parameters**:
- `component` (required): The component name (e.g., "button", "card", "input")

**Example**:
```
Get information about the button component
```

**Response**:
```json
{
  "status": "success",
  "component": {
    "name": "button",
    "category": "button",
    "description": "A versatile button component with multiple variants and sizes",
    "tag": "<x-button>",
    "properties": {
      "variant": "The button variant (primary, secondary, success, warning, danger, info, light, dark)",
      "size": "The button size (xs, sm, md, lg, xl)",
      "disabled": "Whether the button is disabled",
      ...
    },
    "documentation": "docs/components/button.md",
    "dependencies": []
  }
}
```

### 3. Search Components

Searches for components by name or description.

**Tool Name**: `search-components`

**Parameters**:
- `query` (required): Search query (component name or functionality)
- `limit` (optional): Maximum number of results (default: 10)

**Example**:
```
Search for input components
```

**Response**:
```json
{
  "status": "success",
  "query": "input",
  "total": 8,
  "results": [
    {
      "name": "input",
      "description": "A text input component for form fields",
      "category": "form",
      "score": 100
    },
    {
      "name": "input-group",
      "description": "An input group component",
      "category": "form",
      "score": 50
    },
    ...
  ]
}
```

## Available Resources

### Component Documentation

Access component documentation and usage guides.

**Resource URI**: `flowblade://components/{component}`

**MIME Type**: `text/markdown`

**Example**:
```
flowblade://components/button
```

Returns the component documentation in Markdown format.

## Component Categories

Flowblade components are organized into the following categories:

- **Layout**: Box, Container, Flex, Grid, Stack, etc.
- **Button**: Button, IconButton, CloseButton, ButtonGroup
- **Data Display**: Card, Badge, Tag, Avatar, Table, etc.
- **Navigation**: Navbar, Sidebar, Breadcrumb, Pagination, etc.
- **Form**: Input, Select, Checkbox, Radio, Datepicker, etc.
- **Overlay**: Modal, Drawer, Tooltip, Popover, etc.
- **Feedback**: Alert, Toast, Progress, Spinner, etc.
- **Typography**: Heading, Text, Code, Blockquote, etc.
- **Media**: Gallery, Carousel, QRCode, Video, etc.

## Usage Examples

### Example 1: List all form components

```
Use the list-components tool with category="form"
```

### Example 2: Get button component details

```
Use the get-component-info tool with component="button"
```

### Example 3: Search for date-related components

```
Use the search-components tool with query="date"
```

## Authentication

If your MCP server requires authentication, you can protect it using:

### OAuth 2.1 (Recommended)

```php
Mcp::oauthRoutes();

Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:api');
```

### Sanctum

```php
Mcp::web('/mcp/flowblade', FlowbladeServer::class)
    ->middleware('auth:sanctum');
```

## Testing

You can test the MCP server using the MCP Inspector:

```bash
# For web server
php artisan mcp:inspector mcp/flowblade

# For local server
php artisan mcp:inspector flowblade
```

## Integration with AI Assistants

The Flowblade MCP Server is designed to work with AI assistants like Claude, enabling them to:

1. Understand the available Flowblade components
2. Provide accurate component recommendations
3. Generate correct component usage examples
4. Help with component selection based on requirements

## Best Practices

1. **Use specific queries**: When searching for components, use specific keywords related to functionality
2. **Check dependencies**: Review component dependencies (Alpine.js, Livewire, etc.) before using
3. **Read documentation**: Always refer to the component documentation for detailed usage information
4. **Test components**: Test components in your application before deploying to production

## Troubleshooting

### MCP Server not responding

1. Ensure Laravel MCP is properly installed
2. Check that the server is registered in `routes/ai.php`
3. Verify authentication credentials if required
4. Check Laravel logs for errors

### Component information not found

1. Verify the component name is correct
2. Check that the component is available in your Flowblade version
3. Use the search tool to find similar components

## Support

For issues or questions about the Flowblade MCP Server:

1. Check the [Flowblade documentation](../README.md)
2. Review the [component documentation](../components/README.md)
3. Open an issue on [GitHub](https://github.com/zhouyl/flowblade/issues)

## License

The Flowblade MCP Server is open-source software licensed under the MIT license.

