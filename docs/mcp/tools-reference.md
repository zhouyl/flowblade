# Flowblade MCP Tools Reference

This document provides a complete reference for all available MCP tools in the Flowblade MCP Server.

## Overview

The Flowblade MCP Server provides three main tools for interacting with component information:

1. **list-components** - List all available components
2. **get-component-info** - Get detailed information about a component
3. **search-components** - Search for components by name or functionality

## Tool 1: list-components

Lists all available Flowblade components with optional filtering by category.

### Tool Name
```
list-components
```

### Description
Lists all available Flowblade components with their basic information. Supports filtering by category.

### Parameters

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `category` | string | No | Filter by category (layout, button, data-display, navigation, form, overlay, feedback, typography, media) |

### Response Format

```json
{
  "status": "success",
  "total": 98,
  "components": [
    {
      "name": "button",
      "category": "button",
      "description": "A primary button component"
    },
    ...
  ]
}
```

### Response Fields

| Field | Type | Description |
|-------|------|-------------|
| `status` | string | "success" or "error" |
| `total` | integer | Total number of components returned |
| `components` | array | Array of component objects |
| `components[].name` | string | Component name |
| `components[].category` | string | Component category |
| `components[].description` | string | Component description |

### Examples

#### List all components
```
Tool: list-components
Parameters: {}
```

#### List form components
```
Tool: list-components
Parameters: {
  "category": "form"
}
```

#### List layout components
```
Tool: list-components
Parameters: {
  "category": "layout"
}
```

### Available Categories

- **layout** - Layout and container components (19 components)
- **button** - Button components (4 components)
- **data-display** - Data display components (23 components)
- **navigation** - Navigation components (21 components)
- **form** - Form input components (26 components)
- **overlay** - Overlay components (9 components)
- **feedback** - Feedback components (9 components)
- **typography** - Typography components (11 components)
- **media** - Media components (4 components)

## Tool 2: get-component-info

Retrieves detailed information about a specific component.

### Tool Name
```
get-component-info
```

### Description
Retrieves comprehensive information about a specific Flowblade component, including properties, usage, and documentation links.

### Parameters

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `component` | string | Yes | The component name (e.g., "button", "card", "input") |

### Response Format

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

### Response Fields

| Field | Type | Description |
|-------|------|-------------|
| `status` | string | "success" or "error" |
| `component` | object | Component information object |
| `component.name` | string | Component name |
| `component.category` | string | Component category |
| `component.description` | string | Component description |
| `component.tag` | string | Blade component tag |
| `component.properties` | object | Component properties and their descriptions |
| `component.documentation` | string | Path to component documentation |
| `component.dependencies` | array | External dependencies (Alpine.js, Livewire, etc.) |

### Examples

#### Get button component info
```
Tool: get-component-info
Parameters: {
  "component": "button"
}
```

#### Get card component info
```
Tool: get-component-info
Parameters: {
  "component": "card"
}
```

#### Get modal component info
```
Tool: get-component-info
Parameters: {
  "component": "modal"
}
```

### Error Handling

If the component is not found:

```json
{
  "status": "error",
  "message": "Component 'invalid-component' not found"
}
```

## Tool 3: search-components

Searches for components by name or description.

### Tool Name
```
search-components
```

### Description
Searches for Flowblade components by name or description. Useful for finding components that match specific functionality.

### Parameters

| Parameter | Type | Required | Description |
|-----------|------|----------|-------------|
| `query` | string | Yes | Search query (component name or functionality) |
| `limit` | integer | No | Maximum number of results to return (default: 10) |

### Response Format

```json
{
  "status": "success",
  "query": "button",
  "total": 4,
  "results": [
    {
      "name": "button",
      "description": "A primary button component",
      "category": "button",
      "score": 100
    },
    {
      "name": "icon-button",
      "description": "A button with icon support",
      "category": "button",
      "score": 50
    },
    ...
  ]
}
```

### Response Fields

| Field | Type | Description |
|-------|------|-------------|
| `status` | string | "success" or "error" |
| `query` | string | The search query used |
| `total` | integer | Number of results returned |
| `results` | array | Array of matching components |
| `results[].name` | string | Component name |
| `results[].description` | string | Component description |
| `results[].category` | string | Component category |
| `results[].score` | integer | Relevance score (0-100) |

### Scoring

Results are scored based on relevance:

- **100**: Exact name match
- **50**: Name contains query
- **25**: Description contains query

Results are sorted by score in descending order.

### Examples

#### Search for button components
```
Tool: search-components
Parameters: {
  "query": "button"
}
```

#### Search for date-related components
```
Tool: search-components
Parameters: {
  "query": "date"
}
```

#### Search for input components with limit
```
Tool: search-components
Parameters: {
  "query": "input",
  "limit": 5
}
```

#### Search for form components
```
Tool: search-components
Parameters: {
  "query": "form"
}
```

### Error Handling

If the query is empty:

```json
{
  "status": "error",
  "message": "Search query is required"
}
```

## Common Use Cases

### 1. Find a component for a specific task

```
User: "I need a component for displaying a list of items"

AI uses: search-components with query="list"

Response: Returns list, data-list, and other related components
```

### 2. Get all properties of a component

```
User: "What properties does the input component have?"

AI uses: get-component-info with component="input"

Response: Returns all input properties and their descriptions
```

### 3. Find components in a category

```
User: "Show me all navigation components"

AI uses: list-components with category="navigation"

Response: Returns all 21 navigation components
```

### 4. Check component dependencies

```
User: "Does the modal component require any dependencies?"

AI uses: get-component-info with component="modal"

Response: Returns component info including dependencies (Alpine.js)
```

## Best Practices

1. **Use specific queries**: More specific queries return better results
2. **Check dependencies**: Always verify component dependencies before using
3. **Review documentation**: Use get-component-info to understand all properties
4. **Test locally**: Test components in your application before deploying
5. **Use categories**: Use list-components with category filter for browsing

## Error Handling

All tools return a `status` field indicating success or error:

```json
{
  "status": "success",
  ...
}
```

or

```json
{
  "status": "error",
  "message": "Error description"
}
```

Always check the status field before processing the response.

## Rate Limiting

If rate limiting is enabled, you may receive:

```json
{
  "status": "error",
  "message": "Rate limit exceeded"
}
```

Wait before making additional requests.

## Support

For issues or questions:

1. Check the [MCP Server documentation](./README.md)
2. Review the [setup guide](./setup.md)
3. See [usage examples](./examples.md)
4. Open an issue on [GitHub](https://github.com/zhouyl/flowblade/issues)

