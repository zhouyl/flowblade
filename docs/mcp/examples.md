# Flowblade MCP Server Examples

This document provides practical examples of using the Flowblade MCP Server with AI assistants.

## Example 1: List All Components

**User Request**: "What components does Flowblade provide?"

**AI Action**: Calls `list-components` tool without parameters

**Response**:
```json
{
  "status": "success",
  "total": 98,
  "components": [
    {
      "name": "box",
      "category": "layout",
      "description": "A basic container component"
    },
    {
      "name": "button",
      "category": "button",
      "description": "A primary button component"
    },
    {
      "name": "card",
      "category": "data-display",
      "description": "A card container component"
    },
    ...
  ]
}
```

**AI Response**: "Flowblade provides 98 components organized into 9 categories: Layout, Button, Data Display, Navigation, Form, Overlay, Feedback, Typography, and Media."

## Example 2: Filter Components by Category

**User Request**: "Show me all form components"

**AI Action**: Calls `list-components` tool with `category="form"`

**Response**:
```json
{
  "status": "success",
  "total": 28,
  "components": [
    {
      "name": "input",
      "category": "form",
      "description": "A text input component"
    },
    {
      "name": "textarea",
      "category": "form",
      "description": "A textarea component"
    },
    {
      "name": "checkbox",
      "category": "form",
      "description": "A checkbox component"
    },
    ...
  ]
}
```

**AI Response**: "Flowblade has 28 form components including input, textarea, checkbox, radio, select, datepicker, and more."

## Example 3: Get Component Details

**User Request**: "How do I use the button component?"

**AI Action**: Calls `get-component-info` tool with `component="button"`

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
      "loading": "Whether the button is in loading state",
      "icon": "Icon to display in the button",
      "href": "URL to navigate to when clicked"
    },
    "documentation": "docs/components/button.md",
    "dependencies": []
  }
}
```

**AI Response**: "The button component is used with the `<x-button>` tag. It supports multiple variants (primary, secondary, success, warning, danger, info, light, dark) and sizes (xs, sm, md, lg, xl). You can also add icons, disable it, or make it a link by providing an href."

## Example 4: Search for Components

**User Request**: "I need a component for date selection"

**AI Action**: Calls `search-components` tool with `query="date"`

**Response**:
```json
{
  "status": "success",
  "query": "date",
  "total": 3,
  "results": [
    {
      "name": "datepicker",
      "description": "A datepicker component",
      "category": "form",
      "score": 100
    },
    {
      "name": "date-range-picker",
      "description": "A date range picker component",
      "category": "form",
      "score": 100
    },
    {
      "name": "inline-datepicker",
      "description": "An inline datepicker component",
      "category": "form",
      "score": 100
    }
  ]
}
```

**AI Response**: "For date selection, Flowblade provides three components:
1. **datepicker** - A standard date picker component
2. **date-range-picker** - For selecting a date range
3. **inline-datepicker** - An inline date picker that doesn't require a modal"

## Example 5: Search for Functionality

**User Request**: "What components can I use for displaying data?"

**AI Action**: Calls `search-components` tool with `query="display"`

**Response**:
```json
{
  "status": "success",
  "query": "display",
  "total": 10,
  "results": [
    {
      "name": "table",
      "description": "A table component",
      "category": "data-display",
      "score": 50
    },
    {
      "name": "card",
      "description": "A card container component",
      "category": "data-display",
      "score": 50
    },
    {
      "name": "data-list",
      "description": "A data list component",
      "category": "data-display",
      "score": 50
    },
    ...
  ]
}
```

**AI Response**: "For displaying data, you can use:
- **table** - For tabular data
- **card** - For grouped content
- **data-list** - For key-value pairs
- **timeline** - For chronological data
- **tree-view** - For hierarchical data"

## Example 6: Get Component Documentation

**User Request**: "Show me the button component documentation"

**AI Action**: Accesses resource `flowblade://components/button`

**Response**:
```markdown
# Button Component

The Button component is a versatile button element that supports multiple variants, sizes, and states.

## Basic Usage

\`\`\`blade
<x-button>Click me</x-button>
\`\`\`

## Properties

- **variant**: The button variant (primary, secondary, success, warning, danger, info, light, dark)
- **size**: The button size (xs, sm, md, lg, xl)
- **disabled**: Whether the button is disabled
- **loading**: Whether the button is in loading state
- **icon**: Icon to display in the button
- **href**: URL to navigate to when clicked

## Examples

### Primary Button
\`\`\`blade
<x-button variant="primary">Primary</x-button>
\`\`\`

### Disabled Button
\`\`\`blade
<x-button disabled>Disabled</x-button>
\`\`\`

### Button with Icon
\`\`\`blade
<x-button icon="check">Save</x-button>
\`\`\`
```

**AI Response**: "Here's the button component documentation with examples..."

## Example 7: Component Recommendation

**User Request**: "I need to build a form with validation. What components should I use?"

**AI Action**: 
1. Calls `search-components` with `query="form"`
2. Calls `get-component-info` for relevant components

**AI Response**: "For building a form with validation, I recommend using these Flowblade components:

1. **field** - Wrapper component for form fields with label and error display
2. **input** - Text input for basic text fields
3. **textarea** - For multi-line text input
4. **select** - For dropdown selections
5. **checkbox** - For boolean options
6. **radio** - For single selection from multiple options
7. **button** - For form submission

Example structure:
\`\`\`blade
<form>
  <x-field label="Email" error="$errors->first('email')">
    <x-input name="email" type="email" />
  </x-field>
  
  <x-field label="Message">
    <x-textarea name="message" />
  </x-field>
  
  <x-button type="submit">Submit</x-button>
</form>
\`\`\`"

## Example 8: Component Comparison

**User Request**: "What's the difference between modal and drawer?"

**AI Action**: 
1. Calls `get-component-info` for `modal`
2. Calls `get-component-info` for `drawer`

**AI Response**: "Both modal and drawer are overlay components, but they have different use cases:

**Modal**:
- Displays content in a centered dialog box
- Blocks interaction with the page behind it
- Best for important information or confirmations
- Supports different sizes (sm, md, lg, xl)

**Drawer**:
- Slides in from the side of the screen
- Also blocks interaction with the page
- Better for navigation or settings
- Takes up less screen space than modal

Choose modal for important dialogs and drawer for side navigation or settings panels."

## Integration with Claude

To use these examples with Claude or other AI assistants:

1. Configure the MCP server in your AI client settings
2. Provide the server URL and authentication credentials
3. The AI will automatically have access to all tools and resources
4. Ask questions about Flowblade components naturally

## Best Practices

1. **Be specific**: Use component names or functionality keywords in your queries
2. **Ask for examples**: Request code examples for better understanding
3. **Check dependencies**: Ask about component dependencies before using
4. **Read documentation**: Always review the full documentation for complex components
5. **Test locally**: Test components in your application before deploying

## Troubleshooting

### "Component not found" error

- Verify the component name is correct
- Use the search tool to find similar components
- Check the component list for available components

### Missing component information

- The component might be new or recently added
- Check the Flowblade documentation directly
- Open an issue on GitHub if information is missing

### Authentication errors

- Verify your API credentials
- Check that the MCP server is properly configured
- Ensure your authentication token is valid

## Support

For more information:

1. Read the [MCP Server documentation](./README.md)
2. Check the [setup guide](./setup.md)
3. Review [Flowblade documentation](../README.md)
4. Open an issue on [GitHub](https://github.com/zhouyl/flowblade/issues)

