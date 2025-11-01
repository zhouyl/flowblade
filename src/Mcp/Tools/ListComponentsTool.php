<?php

namespace Flowblade\Mcp\Tools;

use Flowblade\FlowbladeServiceProvider;

/**
 * List Components Tool
 *
 * This tool lists all available Flowblade components with their basic information.
 *
 * @package Flowblade\Mcp\Tools
 */
class ListComponentsTool
{
    /**
     * The tool's name.
     */
    protected string $name = 'list-components';

    /**
     * The tool's title.
     */
    protected string $title = 'List Flowblade Components';

    /**
     * The tool's description.
     */
    protected string $description = 'Lists all available Flowblade components with their names, categories, and basic information.';

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
            'category' => [
                'type' => 'string',
                'description' => 'Optional: Filter components by category (layout, button, data-display, navigation, form, overlay, feedback, typography, media)',
                'enum' => ['layout', 'button', 'data-display', 'navigation', 'form', 'overlay', 'feedback', 'typography', 'media'],
            ],
        ];
    }

    /**
     * Handle the tool request.
     */
    public function handle(array $arguments = []): array
    {
        $category = $arguments['category'] ?? null;
        $components = $this->getComponentsList();

        if ($category) {
            $components = array_filter($components, function ($component) use ($category) {
                return $component['category'] === $category;
            });
        }

        return [
            'status' => 'success',
            'total' => count($components),
            'components' => array_values($components),
        ];
    }

    /**
     * Get all components organized by category.
     */
    protected function getComponentsList(): array
    {
        return [
            // Layout Components
            'box' => ['name' => 'box', 'category' => 'layout', 'description' => 'A basic container component'],
            'container' => ['name' => 'container', 'category' => 'layout', 'description' => 'A responsive container component'],
            'center' => ['name' => 'center', 'category' => 'layout', 'description' => 'Centers content using flexbox'],
            'absolute-center' => ['name' => 'absolute-center', 'category' => 'layout', 'description' => 'Centers content using absolute positioning'],
            'flex' => ['name' => 'flex', 'category' => 'layout', 'description' => 'A flexbox layout component'],
            'grid' => ['name' => 'grid', 'category' => 'layout', 'description' => 'A CSS grid layout component'],
            'simple-grid' => ['name' => 'simple-grid', 'category' => 'layout', 'description' => 'A simplified grid layout'],
            'stack' => ['name' => 'stack', 'category' => 'layout', 'description' => 'A flexible stack layout'],
            'hstack' => ['name' => 'hstack', 'category' => 'layout', 'description' => 'A horizontal stack layout'],
            'vstack' => ['name' => 'vstack', 'category' => 'layout', 'description' => 'A vertical stack layout'],
            'wrap' => ['name' => 'wrap', 'category' => 'layout', 'description' => 'A wrapping layout component'],
            'separator' => ['name' => 'separator', 'category' => 'layout', 'description' => 'A visual separator component'],
            'spacer' => ['name' => 'spacer', 'category' => 'layout', 'description' => 'A flexible spacer component'],
            'group' => ['name' => 'group', 'category' => 'layout', 'description' => 'A grouping container component'],
            'aspect-ratio' => ['name' => 'aspect-ratio', 'category' => 'layout', 'description' => 'Maintains aspect ratio for content'],
            'scroll-area' => ['name' => 'scroll-area', 'category' => 'layout', 'description' => 'A scrollable area component'],
            'footer' => ['name' => 'footer', 'category' => 'layout', 'description' => 'A footer layout component'],
            'jumbotron' => ['name' => 'jumbotron', 'category' => 'layout', 'description' => 'A large hero section component'],
            'divider' => ['name' => 'divider', 'category' => 'layout', 'description' => 'A visual divider component'],

            // Button Components
            'button' => ['name' => 'button', 'category' => 'button', 'description' => 'A primary button component'],
            'icon-button' => ['name' => 'icon-button', 'category' => 'button', 'description' => 'A button with icon support'],
            'close-button' => ['name' => 'close-button', 'category' => 'button', 'description' => 'A close/dismiss button'],
            'button-group' => ['name' => 'button-group', 'category' => 'button', 'description' => 'A group of buttons'],

            // Data Display Components
            'icon' => ['name' => 'icon', 'category' => 'data-display', 'description' => 'An icon display component'],
            'avatar' => ['name' => 'avatar', 'category' => 'data-display', 'description' => 'An avatar component'],
            'badge' => ['name' => 'badge', 'category' => 'data-display', 'description' => 'A badge component'],
            'card' => ['name' => 'card', 'category' => 'data-display', 'description' => 'A card container component'],
            'card-header' => ['name' => 'card-header', 'category' => 'data-display', 'description' => 'A card header component'],
            'card-body' => ['name' => 'card-body', 'category' => 'data-display', 'description' => 'A card body component'],
            'card-footer' => ['name' => 'card-footer', 'category' => 'data-display', 'description' => 'A card footer component'],
            'data-list' => ['name' => 'data-list', 'category' => 'data-display', 'description' => 'A data list component'],
            'data-list-item' => ['name' => 'data-list-item', 'category' => 'data-display', 'description' => 'A data list item component'],
            'stat' => ['name' => 'stat', 'category' => 'data-display', 'description' => 'A statistic display component'],
            'tag' => ['name' => 'tag', 'category' => 'data-display', 'description' => 'A tag component'],
            'rating' => ['name' => 'rating', 'category' => 'data-display', 'description' => 'A rating component'],
            'color-swatch' => ['name' => 'color-swatch', 'category' => 'data-display', 'description' => 'A color swatch component'],
            'tags-input' => ['name' => 'tags-input', 'category' => 'data-display', 'description' => 'A tags input component'],
            'timeline' => ['name' => 'timeline', 'category' => 'data-display', 'description' => 'A timeline component'],
            'timeline-item' => ['name' => 'timeline-item', 'category' => 'data-display', 'description' => 'A timeline item component'],
            'table' => ['name' => 'table', 'category' => 'data-display', 'description' => 'A table component'],
            'tree-view' => ['name' => 'tree-view', 'category' => 'data-display', 'description' => 'A tree view component'],
            'tree-view-item' => ['name' => 'tree-view-item', 'category' => 'data-display', 'description' => 'A tree view item component'],
            'indicator' => ['name' => 'indicator', 'category' => 'data-display', 'description' => 'An indicator component'],
            'chat-bubble' => ['name' => 'chat-bubble', 'category' => 'data-display', 'description' => 'A chat bubble component'],
            'list' => ['name' => 'list', 'category' => 'data-display', 'description' => 'A list component'],
            'list-item' => ['name' => 'list-item', 'category' => 'data-display', 'description' => 'A list item component'],
            'gallery' => ['name' => 'gallery', 'category' => 'media', 'description' => 'A gallery component'],
            'gallery-item' => ['name' => 'gallery-item', 'category' => 'media', 'description' => 'A gallery item component'],

            // Navigation Components
            'breadcrumb' => ['name' => 'breadcrumb', 'category' => 'navigation', 'description' => 'A breadcrumb navigation component'],
            'breadcrumb-item' => ['name' => 'breadcrumb-item', 'category' => 'navigation', 'description' => 'A breadcrumb item component'],
            'pagination' => ['name' => 'pagination', 'category' => 'navigation', 'description' => 'A pagination component'],
            'tabs' => ['name' => 'tabs', 'category' => 'navigation', 'description' => 'A tabs component'],
            'tabs-list' => ['name' => 'tabs-list', 'category' => 'navigation', 'description' => 'A tabs list component'],
            'tabs-trigger' => ['name' => 'tabs-trigger', 'category' => 'navigation', 'description' => 'A tabs trigger component'],
            'tabs-content' => ['name' => 'tabs-content', 'category' => 'navigation', 'description' => 'A tabs content component'],
            'steps' => ['name' => 'steps', 'category' => 'navigation', 'description' => 'A steps component'],
            'step-item' => ['name' => 'step-item', 'category' => 'navigation', 'description' => 'A step item component'],
            'navbar' => ['name' => 'navbar', 'category' => 'navigation', 'description' => 'A navbar component'],
            'navbar-brand' => ['name' => 'navbar-brand', 'category' => 'navigation', 'description' => 'A navbar brand component'],
            'navbar-toggle' => ['name' => 'navbar-toggle', 'category' => 'navigation', 'description' => 'A navbar toggle component'],
            'navbar-collapse' => ['name' => 'navbar-collapse', 'category' => 'navigation', 'description' => 'A navbar collapse component'],
            'navbar-link' => ['name' => 'navbar-link', 'category' => 'navigation', 'description' => 'A navbar link component'],
            'sidebar' => ['name' => 'sidebar', 'category' => 'navigation', 'description' => 'A sidebar component'],
            'sidebar-item' => ['name' => 'sidebar-item', 'category' => 'navigation', 'description' => 'A sidebar item component'],
            'sidebar-group' => ['name' => 'sidebar-group', 'category' => 'navigation', 'description' => 'A sidebar group component'],
            'sidebar-toggle' => ['name' => 'sidebar-toggle', 'category' => 'navigation', 'description' => 'A sidebar toggle component'],
            'speed-dial' => ['name' => 'speed-dial', 'category' => 'navigation', 'description' => 'A speed dial component'],
            'speed-dial-item' => ['name' => 'speed-dial-item', 'category' => 'navigation', 'description' => 'A speed dial item component'],
            'mega-menu' => ['name' => 'mega-menu', 'category' => 'navigation', 'description' => 'A mega menu component'],
            'mega-menu-column' => ['name' => 'mega-menu-column', 'category' => 'navigation', 'description' => 'A mega menu column component'],
            'mega-menu-item' => ['name' => 'mega-menu-item', 'category' => 'navigation', 'description' => 'A mega menu item component'],

            // Form Components
            'input' => ['name' => 'input', 'category' => 'form', 'description' => 'A text input component'],
            'textarea' => ['name' => 'textarea', 'category' => 'form', 'description' => 'A textarea component'],
            'checkbox' => ['name' => 'checkbox', 'category' => 'form', 'description' => 'A checkbox component'],
            'radio' => ['name' => 'radio', 'category' => 'form', 'description' => 'A radio button component'],
            'switch' => ['name' => 'switch', 'category' => 'form', 'description' => 'A switch/toggle component'],
            'select' => ['name' => 'select', 'category' => 'form', 'description' => 'A select dropdown component'],
            'native-select' => ['name' => 'native-select', 'category' => 'form', 'description' => 'A native select component'],
            'pin-input' => ['name' => 'pin-input', 'category' => 'form', 'description' => 'A PIN input component'],
            'number-input' => ['name' => 'number-input', 'category' => 'form', 'description' => 'A number input component'],
            'field' => ['name' => 'field', 'category' => 'form', 'description' => 'A form field wrapper component'],
            'fieldset' => ['name' => 'fieldset', 'category' => 'form', 'description' => 'A fieldset component'],
            'password-input' => ['name' => 'password-input', 'category' => 'form', 'description' => 'A password input component'],
            'search-input' => ['name' => 'search-input', 'category' => 'form', 'description' => 'A search input component'],
            'input-group' => ['name' => 'input-group', 'category' => 'form', 'description' => 'An input group component'],
            'input-addon' => ['name' => 'input-addon', 'category' => 'form', 'description' => 'An input addon component'],
            'input-element' => ['name' => 'input-element', 'category' => 'form', 'description' => 'An input element component'],
            'editable' => ['name' => 'editable', 'category' => 'form', 'description' => 'An editable component'],
            'file-upload' => ['name' => 'file-upload', 'category' => 'form', 'description' => 'A file upload component'],
            'slider' => ['name' => 'slider', 'category' => 'form', 'description' => 'A slider component'],
            'range-slider' => ['name' => 'range-slider', 'category' => 'form', 'description' => 'A range slider component'],
            'clipboard' => ['name' => 'clipboard', 'category' => 'form', 'description' => 'A clipboard component'],
            'floating-label' => ['name' => 'floating-label', 'category' => 'form', 'description' => 'A floating label component'],
            'floating-textarea' => ['name' => 'floating-textarea', 'category' => 'form', 'description' => 'A floating textarea component'],
            'floating-select' => ['name' => 'floating-select', 'category' => 'form', 'description' => 'A floating select component'],
            'datepicker' => ['name' => 'datepicker', 'category' => 'form', 'description' => 'A datepicker component'],
            'date-range-picker' => ['name' => 'date-range-picker', 'category' => 'form', 'description' => 'A date range picker component'],
            'inline-datepicker' => ['name' => 'inline-datepicker', 'category' => 'form', 'description' => 'An inline datepicker component'],
            'timepicker' => ['name' => 'timepicker', 'category' => 'form', 'description' => 'A timepicker component'],
            'phone-input' => ['name' => 'phone-input', 'category' => 'form', 'description' => 'A phone input component'],

            // Overlay Components
            'tooltip' => ['name' => 'tooltip', 'category' => 'overlay', 'description' => 'A tooltip component'],
            'popover' => ['name' => 'popover', 'category' => 'overlay', 'description' => 'A popover component'],
            'hover-card' => ['name' => 'hover-card', 'category' => 'overlay', 'description' => 'A hover card component'],
            'modal' => ['name' => 'modal', 'category' => 'overlay', 'description' => 'A modal component'],
            'drawer' => ['name' => 'drawer', 'category' => 'overlay', 'description' => 'A drawer component'],
            'menu' => ['name' => 'menu', 'category' => 'overlay', 'description' => 'A menu component'],
            'menu-item' => ['name' => 'menu-item', 'category' => 'overlay', 'description' => 'A menu item component'],
            'menu-divider' => ['name' => 'menu-divider', 'category' => 'overlay', 'description' => 'A menu divider component'],
            'menu-header' => ['name' => 'menu-header', 'category' => 'overlay', 'description' => 'A menu header component'],

            // Feedback Components
            'alert' => ['name' => 'alert', 'category' => 'feedback', 'description' => 'An alert component'],
            'spinner' => ['name' => 'spinner', 'category' => 'feedback', 'description' => 'A spinner/loading component'],
            'progress' => ['name' => 'progress', 'category' => 'feedback', 'description' => 'A progress bar component'],
            'progress-circle' => ['name' => 'progress-circle', 'category' => 'feedback', 'description' => 'A circular progress component'],
            'status' => ['name' => 'status', 'category' => 'feedback', 'description' => 'A status indicator component'],
            'empty' => ['name' => 'empty', 'category' => 'feedback', 'description' => 'An empty state component'],
            'toast' => ['name' => 'toast', 'category' => 'feedback', 'description' => 'A toast notification component'],
            'skeleton' => ['name' => 'skeleton', 'category' => 'feedback', 'description' => 'A skeleton loader component'],
            'banner' => ['name' => 'banner', 'category' => 'feedback', 'description' => 'A banner component'],

            // Typography Components
            'heading' => ['name' => 'heading', 'category' => 'typography', 'description' => 'A heading component'],
            'text' => ['name' => 'text', 'category' => 'typography', 'description' => 'A text component'],
            'link' => ['name' => 'link', 'category' => 'typography', 'description' => 'A link component'],
            'code' => ['name' => 'code', 'category' => 'typography', 'description' => 'An inline code component'],
            'code-block' => ['name' => 'code-block', 'category' => 'typography', 'description' => 'A code block component'],
            'kbd' => ['name' => 'kbd', 'category' => 'typography', 'description' => 'A keyboard key component'],
            'mark' => ['name' => 'mark', 'category' => 'typography', 'description' => 'A mark/highlight component'],
            'em' => ['name' => 'em', 'category' => 'typography', 'description' => 'An emphasis component'],
            'strong' => ['name' => 'strong', 'category' => 'typography', 'description' => 'A strong/bold component'],
            'blockquote' => ['name' => 'blockquote', 'category' => 'typography', 'description' => 'A blockquote component'],
            'highlight' => ['name' => 'highlight', 'category' => 'typography', 'description' => 'A highlight component'],

            // Media Components
            'qrcode' => ['name' => 'qrcode', 'category' => 'media', 'description' => 'A QR code component'],
            'carousel' => ['name' => 'carousel', 'category' => 'media', 'description' => 'A carousel component'],
            'carousel-item' => ['name' => 'carousel-item', 'category' => 'media', 'description' => 'A carousel item component'],
            'video' => ['name' => 'video', 'category' => 'media', 'description' => 'A video component'],

            // Disclosure Components
            'accordion' => ['name' => 'accordion', 'category' => 'overlay', 'description' => 'An accordion component'],
            'accordion-item' => ['name' => 'accordion-item', 'category' => 'overlay', 'description' => 'An accordion item component'],
            'collapsible' => ['name' => 'collapsible', 'category' => 'overlay', 'description' => 'A collapsible component'],
        ];
    }
}

