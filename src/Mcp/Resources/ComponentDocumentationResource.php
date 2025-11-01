<?php

namespace Flowblade\Mcp\Resources;

/**
 * Component Documentation Resource
 *
 * This resource provides access to Flowblade component documentation.
 *
 * @package Flowblade\Mcp\Resources
 */
class ComponentDocumentationResource
{
    /**
     * The resource's name.
     */
    protected string $name = 'component-documentation';

    /**
     * The resource's description.
     */
    protected string $description = 'Provides access to Flowblade component documentation and usage guides.';

    /**
     * Get the resource's name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the resource's description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the resource's URI template.
     */
    public function getUriTemplate(): string
    {
        return 'flowblade://components/{component}';
    }

    /**
     * Get the resource's MIME type.
     */
    public function getMimeType(): string
    {
        return 'text/markdown';
    }

    /**
     * Get the resource content.
     */
    public function getContent(string $uri): ?string
    {
        // Extract component name from URI
        if (preg_match('/flowblade:\/\/components\/(.+)/', $uri, $matches)) {
            $component = $matches[1];
            return $this->getComponentDocumentation($component);
        }

        return null;
    }

    /**
     * Get documentation for a specific component.
     */
    protected function getComponentDocumentation(string $component): ?string
    {
        $docs = [
            'button' => <<<'DOC'
# Button Component

The Button component is a versatile button element that supports multiple variants, sizes, and states.

## Basic Usage

```blade
<x-button>Click me</x-button>
```

## Properties

- **variant**: The button variant (primary, secondary, success, warning, danger, info, light, dark)
- **size**: The button size (xs, sm, md, lg, xl)
- **disabled**: Whether the button is disabled
- **loading**: Whether the button is in loading state
- **icon**: Icon to display in the button
- **href**: URL to navigate to when clicked

## Examples

### Primary Button
```blade
<x-button variant="primary">Primary</x-button>
```

### Disabled Button
```blade
<x-button disabled>Disabled</x-button>
```

### Button with Icon
```blade
<x-button icon="check">Save</x-button>
```

## Documentation

See `docs/components/button.md` for more information.
DOC,
            'card' => <<<'DOC'
# Card Component

The Card component is a container for grouping related content.

## Basic Usage

```blade
<x-card>
    <x-card-header>Card Title</x-card-header>
    <x-card-body>Card content goes here</x-card-body>
    <x-card-footer>Card footer</x-card-footer>
</x-card>
```

## Properties

- **variant**: The card variant (default, outlined, elevated)
- **size**: The card size (sm, md, lg)
- **padding**: The card padding (none, sm, md, lg)
- **rounded**: The card border radius (none, sm, md, lg, full)
- **shadow**: The card shadow (none, sm, md, lg)

## Documentation

See `docs/components/card.md` for more information.
DOC,
            'input' => <<<'DOC'
# Input Component

The Input component is a text input field for form submissions.

## Basic Usage

```blade
<x-input name="email" type="email" placeholder="Enter your email" />
```

## Properties

- **type**: The input type (text, email, password, number, etc.)
- **placeholder**: Placeholder text
- **disabled**: Whether the input is disabled
- **readonly**: Whether the input is read-only
- **size**: The input size (sm, md, lg)
- **variant**: The input variant (default, underline)
- **error**: Error message to display

## Documentation

See `docs/components/input-group.md` for more information.
DOC,
            'select' => <<<'DOC'
# Select Component

The Select component is a dropdown for selecting from multiple options.

## Basic Usage

```blade
<x-select name="country" :options="$countries" />
```

## Properties

- **options**: Array of options
- **multiple**: Whether multiple selection is allowed
- **disabled**: Whether the select is disabled
- **size**: The select size (sm, md, lg)
- **placeholder**: Placeholder text

## Documentation

See `docs/components/select.md` for more information.
DOC,
            'modal' => <<<'DOC'
# Modal Component

The Modal component displays content in a dialog box.

## Basic Usage

```blade
<x-modal title="Modal Title">
    Modal content goes here
</x-modal>
```

## Properties

- **title**: Modal title
- **size**: Modal size (sm, md, lg, xl)
- **centered**: Whether the modal is centered
- **backdrop**: Backdrop type (static, dynamic)
- **closeButton**: Whether to show close button

## Dependencies

- Alpine.js

## Documentation

See `docs/components/modal.md` for more information.
DOC,
            'alert' => <<<'DOC'
# Alert Component

The Alert component displays alert messages to users.

## Basic Usage

```blade
<x-alert type="info">This is an info alert</x-alert>
```

## Properties

- **type**: Alert type (info, success, warning, error)
- **title**: Alert title
- **dismissible**: Whether the alert can be dismissed
- **icon**: Icon to display

## Documentation

See `docs/components/alert.md` for more information.
DOC,
        ];

        return $docs[$component] ?? null;
    }
}

