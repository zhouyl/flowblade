<?php

namespace Flowblade\Mcp\Tools;

/**
 * Get Component Info Tool
 *
 * This tool retrieves detailed information about a specific Flowblade component.
 */
class GetComponentInfoTool
{
    /**
     * The tool's name.
     */
    protected string $name = 'get-component-info';

    /**
     * The tool's title.
     */
    protected string $title = 'Get Component Information';

    /**
     * The tool's description.
     */
    protected string $description = 'Retrieves detailed information about a specific Flowblade component, including its properties, usage, and documentation link.';

    /**
     * Get the tool's name.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get the tool's title.
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Get the tool's description.
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the tool's input schema.
     */
    public function getSchema(): array
    {
        return [
            'component' => [
                'type' => 'string',
                'description' => 'The name of the component to get information about (e.g., "button", "card", "input")',
            ],
        ];
    }

    /**
     * Handle the tool request.
     */
    public function handle(array $arguments = []): array
    {
        $componentName = $arguments['component'] ?? null;

        if (!$componentName) {
            return [
                'status' => 'error',
                'message' => 'Component name is required',
            ];
        }

        $componentInfo = $this->getComponentInfo($componentName);

        if (!$componentInfo) {
            return [
                'status' => 'error',
                'message' => "Component '{$componentName}' not found",
            ];
        }

        return [
            'status' => 'success',
            'component' => $componentInfo,
        ];
    }

    /**
     * Get information about a specific component.
     */
    protected function getComponentInfo(string $componentName): ?array
    {
        $components = $this->getComponentsDatabase();

        return $components[$componentName] ?? null;
    }

    /**
     * Get the components database with detailed information.
     */
    protected function getComponentsDatabase(): array
    {
        return [
            'button' => [
                'name' => 'button',
                'category' => 'button',
                'description' => 'A versatile button component with multiple variants and sizes',
                'tag' => '<x-button>',
                'properties' => [
                    'variant' => 'The button variant (primary, secondary, success, warning, danger, info, light, dark)',
                    'size' => 'The button size (xs, sm, md, lg, xl)',
                    'disabled' => 'Whether the button is disabled',
                    'loading' => 'Whether the button is in loading state',
                    'icon' => 'Icon to display in the button',
                    'href' => 'URL to navigate to when clicked',
                ],
                'documentation' => 'docs/components/button.md',
                'dependencies' => [],
            ],
            'card' => [
                'name' => 'card',
                'category' => 'data-display',
                'description' => 'A card container component for grouping related content',
                'tag' => '<x-card>',
                'properties' => [
                    'variant' => 'The card variant (default, outlined, elevated)',
                    'size' => 'The card size (sm, md, lg)',
                    'padding' => 'The card padding (none, sm, md, lg)',
                    'rounded' => 'The card border radius (none, sm, md, lg, full)',
                    'shadow' => 'The card shadow (none, sm, md, lg)',
                ],
                'documentation' => 'docs/components/card.md',
                'dependencies' => [],
            ],
            'input' => [
                'name' => 'input',
                'category' => 'form',
                'description' => 'A text input component for form fields',
                'tag' => '<x-input>',
                'properties' => [
                    'type' => 'The input type (text, email, password, number, etc.)',
                    'placeholder' => 'Placeholder text',
                    'disabled' => 'Whether the input is disabled',
                    'readonly' => 'Whether the input is read-only',
                    'size' => 'The input size (sm, md, lg)',
                    'variant' => 'The input variant (default, underline)',
                    'error' => 'Error message to display',
                ],
                'documentation' => 'docs/components/input-group.md',
                'dependencies' => [],
            ],
            'select' => [
                'name' => 'select',
                'category' => 'form',
                'description' => 'A select dropdown component',
                'tag' => '<x-select>',
                'properties' => [
                    'options' => 'Array of options',
                    'multiple' => 'Whether multiple selection is allowed',
                    'disabled' => 'Whether the select is disabled',
                    'size' => 'The select size (sm, md, lg)',
                    'placeholder' => 'Placeholder text',
                ],
                'documentation' => 'docs/components/select.md',
                'dependencies' => [],
            ],
            'modal' => [
                'name' => 'modal',
                'category' => 'overlay',
                'description' => 'A modal dialog component',
                'tag' => '<x-modal>',
                'properties' => [
                    'title' => 'Modal title',
                    'size' => 'Modal size (sm, md, lg, xl)',
                    'centered' => 'Whether the modal is centered',
                    'backdrop' => 'Backdrop type (static, dynamic)',
                    'closeButton' => 'Whether to show close button',
                ],
                'documentation' => 'docs/components/modal.md',
                'dependencies' => ['Alpine.js'],
            ],
            'alert' => [
                'name' => 'alert',
                'category' => 'feedback',
                'description' => 'An alert component for displaying messages',
                'tag' => '<x-alert>',
                'properties' => [
                    'type' => 'Alert type (info, success, warning, error)',
                    'title' => 'Alert title',
                    'dismissible' => 'Whether the alert can be dismissed',
                    'icon' => 'Icon to display',
                ],
                'documentation' => 'docs/components/alert.md',
                'dependencies' => [],
            ],
            'table' => [
                'name' => 'table',
                'category' => 'data-display',
                'description' => 'A table component for displaying tabular data',
                'tag' => '<x-table>',
                'properties' => [
                    'striped' => 'Whether to use striped rows',
                    'hover' => 'Whether to show hover effect',
                    'bordered' => 'Whether to show borders',
                    'size' => 'Table size (sm, md, lg)',
                ],
                'documentation' => 'docs/components/table.md',
                'dependencies' => [],
            ],
            'badge' => [
                'name' => 'badge',
                'category' => 'data-display',
                'description' => 'A badge component for labels and tags',
                'tag' => '<x-badge>',
                'properties' => [
                    'variant' => 'Badge variant (solid, subtle, outline)',
                    'color' => 'Badge color (primary, secondary, success, warning, danger, info, gray)',
                    'size' => 'Badge size (sm, md, lg)',
                    'rounded' => 'Border radius (none, sm, md, lg, full)',
                ],
                'documentation' => 'docs/components/badge.md',
                'dependencies' => [],
            ],
            'spinner' => [
                'name' => 'spinner',
                'category' => 'feedback',
                'description' => 'A loading spinner component',
                'tag' => '<x-spinner>',
                'properties' => [
                    'size' => 'Spinner size (sm, md, lg)',
                    'color' => 'Spinner color',
                ],
                'documentation' => 'docs/components/spinner.md',
                'dependencies' => [],
            ],
            'navbar' => [
                'name' => 'navbar',
                'category' => 'navigation',
                'description' => 'A navigation bar component',
                'tag' => '<x-navbar>',
                'properties' => [
                    'sticky' => 'Whether navbar is sticky',
                    'dark' => 'Whether to use dark theme',
                    'fluid' => 'Whether navbar is fluid',
                ],
                'documentation' => 'docs/components/navbar.md',
                'dependencies' => ['Alpine.js'],
            ],
            'sidebar' => [
                'name' => 'sidebar',
                'category' => 'navigation',
                'description' => 'A sidebar navigation component',
                'tag' => '<x-sidebar>',
                'properties' => [
                    'collapsible' => 'Whether sidebar is collapsible',
                    'width' => 'Sidebar width',
                    'dark' => 'Whether to use dark theme',
                ],
                'documentation' => 'docs/components/sidebar.md',
                'dependencies' => ['Alpine.js'],
            ],
        ];
    }
}
