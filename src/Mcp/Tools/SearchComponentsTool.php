<?php

namespace Flowblade\Mcp\Tools;

/**
 * Search Components Tool
 *
 * This tool searches for Flowblade components by name or description.
 */
class SearchComponentsTool
{
    /**
     * The tool's name.
     */
    protected string $name = 'search-components';

    /**
     * The tool's title.
     */
    protected string $title = 'Search Flowblade Components';

    /**
     * The tool's description.
     */
    protected string $description = 'Searches for Flowblade components by name or description. Useful for finding components that match specific functionality.';

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
            'query' => [
                'type' => 'string',
                'description' => 'Search query (component name or functionality)',
            ],
            'limit' => [
                'type' => 'integer',
                'description' => 'Maximum number of results to return (default: 10)',
            ],
        ];
    }

    /**
     * Handle the tool request.
     */
    public function handle(array $arguments = []): array
    {
        $query = $arguments['query'] ?? '';
        $limit = $arguments['limit'] ?? 10;

        if (empty($query)) {
            return [
                'status' => 'error',
                'message' => 'Search query is required',
            ];
        }

        $results = $this->searchComponents($query, $limit);

        return [
            'status' => 'success',
            'query' => $query,
            'total' => count($results),
            'results' => $results,
        ];
    }

    /**
     * Search components by query.
     */
    protected function searchComponents(string $query, int $limit): array
    {
        $query = strtolower($query);
        $components = $this->getAllComponents();
        $results = [];

        foreach ($components as $name => $info) {
            $score = 0;

            // Exact name match
            if ($name === $query) {
                $score = 100;
            }
            // Name contains query
            elseif (strpos($name, $query) !== false) {
                $score = 50;
            }
            // Description contains query
            elseif (strpos(strtolower($info['description']), $query) !== false) {
                $score = 25;
            }

            if ($score > 0) {
                $results[] = [
                    'name' => $name,
                    'description' => $info['description'],
                    'category' => $info['category'],
                    'score' => $score,
                ];
            }
        }

        // Sort by score descending
        usort($results, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        // Limit results
        return array_slice($results, 0, $limit);
    }

    /**
     * Get all components.
     */
    protected function getAllComponents(): array
    {
        return [
            'box' => ['description' => 'A basic container component', 'category' => 'layout'],
            'container' => ['description' => 'A responsive container component', 'category' => 'layout'],
            'center' => ['description' => 'Centers content using flexbox', 'category' => 'layout'],
            'absolute-center' => ['description' => 'Centers content using absolute positioning', 'category' => 'layout'],
            'flex' => ['description' => 'A flexbox layout component', 'category' => 'layout'],
            'grid' => ['description' => 'A CSS grid layout component', 'category' => 'layout'],
            'simple-grid' => ['description' => 'A simplified grid layout', 'category' => 'layout'],
            'stack' => ['description' => 'A flexible stack layout', 'category' => 'layout'],
            'hstack' => ['description' => 'A horizontal stack layout', 'category' => 'layout'],
            'vstack' => ['description' => 'A vertical stack layout', 'category' => 'layout'],
            'wrap' => ['description' => 'A wrapping layout component', 'category' => 'layout'],
            'separator' => ['description' => 'A visual separator component', 'category' => 'layout'],
            'spacer' => ['description' => 'A flexible spacer component', 'category' => 'layout'],
            'group' => ['description' => 'A grouping container component', 'category' => 'layout'],
            'aspect-ratio' => ['description' => 'Maintains aspect ratio for content', 'category' => 'layout'],
            'scroll-area' => ['description' => 'A scrollable area component', 'category' => 'layout'],
            'footer' => ['description' => 'A footer layout component', 'category' => 'layout'],
            'jumbotron' => ['description' => 'A large hero section component', 'category' => 'layout'],
            'divider' => ['description' => 'A visual divider component', 'category' => 'layout'],
            'button' => ['description' => 'A primary button component', 'category' => 'button'],
            'icon-button' => ['description' => 'A button with icon support', 'category' => 'button'],
            'close-button' => ['description' => 'A close/dismiss button', 'category' => 'button'],
            'button-group' => ['description' => 'A group of buttons', 'category' => 'button'],
            'icon' => ['description' => 'An icon display component', 'category' => 'data-display'],
            'avatar' => ['description' => 'An avatar component', 'category' => 'data-display'],
            'badge' => ['description' => 'A badge component', 'category' => 'data-display'],
            'card' => ['description' => 'A card container component', 'category' => 'data-display'],
            'card-header' => ['description' => 'A card header component', 'category' => 'data-display'],
            'card-body' => ['description' => 'A card body component', 'category' => 'data-display'],
            'card-footer' => ['description' => 'A card footer component', 'category' => 'data-display'],
            'data-list' => ['description' => 'A data list component', 'category' => 'data-display'],
            'data-list-item' => ['description' => 'A data list item component', 'category' => 'data-display'],
            'stat' => ['description' => 'A statistic display component', 'category' => 'data-display'],
            'tag' => ['description' => 'A tag component', 'category' => 'data-display'],
            'rating' => ['description' => 'A rating component', 'category' => 'data-display'],
            'color-swatch' => ['description' => 'A color swatch component', 'category' => 'data-display'],
            'tags-input' => ['description' => 'A tags input component', 'category' => 'data-display'],
            'timeline' => ['description' => 'A timeline component', 'category' => 'data-display'],
            'timeline-item' => ['description' => 'A timeline item component', 'category' => 'data-display'],
            'table' => ['description' => 'A table component', 'category' => 'data-display'],
            'tree-view' => ['description' => 'A tree view component', 'category' => 'data-display'],
            'tree-view-item' => ['description' => 'A tree view item component', 'category' => 'data-display'],
            'indicator' => ['description' => 'An indicator component', 'category' => 'data-display'],
            'chat-bubble' => ['description' => 'A chat bubble component', 'category' => 'data-display'],
            'list' => ['description' => 'A list component', 'category' => 'data-display'],
            'list-item' => ['description' => 'A list item component', 'category' => 'data-display'],
            'gallery' => ['description' => 'A gallery component', 'category' => 'media'],
            'gallery-item' => ['description' => 'A gallery item component', 'category' => 'media'],
            'breadcrumb' => ['description' => 'A breadcrumb navigation component', 'category' => 'navigation'],
            'breadcrumb-item' => ['description' => 'A breadcrumb item component', 'category' => 'navigation'],
            'pagination' => ['description' => 'A pagination component', 'category' => 'navigation'],
            'tabs' => ['description' => 'A tabs component', 'category' => 'navigation'],
            'tabs-list' => ['description' => 'A tabs list component', 'category' => 'navigation'],
            'tabs-trigger' => ['description' => 'A tabs trigger component', 'category' => 'navigation'],
            'tabs-content' => ['description' => 'A tabs content component', 'category' => 'navigation'],
            'steps' => ['description' => 'A steps component', 'category' => 'navigation'],
            'step-item' => ['description' => 'A step item component', 'category' => 'navigation'],
            'navbar' => ['description' => 'A navbar component', 'category' => 'navigation'],
            'navbar-brand' => ['description' => 'A navbar brand component', 'category' => 'navigation'],
            'navbar-toggle' => ['description' => 'A navbar toggle component', 'category' => 'navigation'],
            'navbar-collapse' => ['description' => 'A navbar collapse component', 'category' => 'navigation'],
            'navbar-link' => ['description' => 'A navbar link component', 'category' => 'navigation'],
            'sidebar' => ['description' => 'A sidebar component', 'category' => 'navigation'],
            'sidebar-item' => ['description' => 'A sidebar item component', 'category' => 'navigation'],
            'sidebar-group' => ['description' => 'A sidebar group component', 'category' => 'navigation'],
            'sidebar-toggle' => ['description' => 'A sidebar toggle component', 'category' => 'navigation'],
            'speed-dial' => ['description' => 'A speed dial component', 'category' => 'navigation'],
            'speed-dial-item' => ['description' => 'A speed dial item component', 'category' => 'navigation'],
            'mega-menu' => ['description' => 'A mega menu component', 'category' => 'navigation'],
            'mega-menu-column' => ['description' => 'A mega menu column component', 'category' => 'navigation'],
            'mega-menu-item' => ['description' => 'A mega menu item component', 'category' => 'navigation'],
            'input' => ['description' => 'A text input component', 'category' => 'form'],
            'textarea' => ['description' => 'A textarea component', 'category' => 'form'],
            'checkbox' => ['description' => 'A checkbox component', 'category' => 'form'],
            'radio' => ['description' => 'A radio button component', 'category' => 'form'],
            'switch' => ['description' => 'A switch/toggle component', 'category' => 'form'],
            'select' => ['description' => 'A select dropdown component', 'category' => 'form'],
            'native-select' => ['description' => 'A native select component', 'category' => 'form'],
            'pin-input' => ['description' => 'A PIN input component', 'category' => 'form'],
            'number-input' => ['description' => 'A number input component', 'category' => 'form'],
            'field' => ['description' => 'A form field wrapper component', 'category' => 'form'],
            'fieldset' => ['description' => 'A fieldset component', 'category' => 'form'],
            'password-input' => ['description' => 'A password input component', 'category' => 'form'],
            'search-input' => ['description' => 'A search input component', 'category' => 'form'],
            'input-group' => ['description' => 'An input group component', 'category' => 'form'],
            'input-addon' => ['description' => 'An input addon component', 'category' => 'form'],
            'input-element' => ['description' => 'An input element component', 'category' => 'form'],
            'editable' => ['description' => 'An editable component', 'category' => 'form'],
            'file-upload' => ['description' => 'A file upload component', 'category' => 'form'],
            'slider' => ['description' => 'A slider component', 'category' => 'form'],
            'range-slider' => ['description' => 'A range slider component', 'category' => 'form'],
            'clipboard' => ['description' => 'A clipboard component', 'category' => 'form'],
            'floating-label' => ['description' => 'A floating label component', 'category' => 'form'],
            'floating-textarea' => ['description' => 'A floating textarea component', 'category' => 'form'],
            'floating-select' => ['description' => 'A floating select component', 'category' => 'form'],
            'datepicker' => ['description' => 'A datepicker component', 'category' => 'form'],
            'date-range-picker' => ['description' => 'A date range picker component', 'category' => 'form'],
            'inline-datepicker' => ['description' => 'An inline datepicker component', 'category' => 'form'],
            'timepicker' => ['description' => 'A timepicker component', 'category' => 'form'],
            'phone-input' => ['description' => 'A phone input component', 'category' => 'form'],
            'tooltip' => ['description' => 'A tooltip component', 'category' => 'overlay'],
            'popover' => ['description' => 'A popover component', 'category' => 'overlay'],
            'hover-card' => ['description' => 'A hover card component', 'category' => 'overlay'],
            'modal' => ['description' => 'A modal component', 'category' => 'overlay'],
            'drawer' => ['description' => 'A drawer component', 'category' => 'overlay'],
            'menu' => ['description' => 'A menu component', 'category' => 'overlay'],
            'menu-item' => ['description' => 'A menu item component', 'category' => 'overlay'],
            'menu-divider' => ['description' => 'A menu divider component', 'category' => 'overlay'],
            'menu-header' => ['description' => 'A menu header component', 'category' => 'overlay'],
            'alert' => ['description' => 'An alert component', 'category' => 'feedback'],
            'spinner' => ['description' => 'A spinner/loading component', 'category' => 'feedback'],
            'progress' => ['description' => 'A progress bar component', 'category' => 'feedback'],
            'progress-circle' => ['description' => 'A circular progress component', 'category' => 'feedback'],
            'status' => ['description' => 'A status indicator component', 'category' => 'feedback'],
            'empty' => ['description' => 'An empty state component', 'category' => 'feedback'],
            'toast' => ['description' => 'A toast notification component', 'category' => 'feedback'],
            'skeleton' => ['description' => 'A skeleton loader component', 'category' => 'feedback'],
            'banner' => ['description' => 'A banner component', 'category' => 'feedback'],
            'heading' => ['description' => 'A heading component', 'category' => 'typography'],
            'text' => ['description' => 'A text component', 'category' => 'typography'],
            'link' => ['description' => 'A link component', 'category' => 'typography'],
            'code' => ['description' => 'An inline code component', 'category' => 'typography'],
            'code-block' => ['description' => 'A code block component', 'category' => 'typography'],
            'kbd' => ['description' => 'A keyboard key component', 'category' => 'typography'],
            'mark' => ['description' => 'A mark/highlight component', 'category' => 'typography'],
            'em' => ['description' => 'An emphasis component', 'category' => 'typography'],
            'strong' => ['description' => 'A strong/bold component', 'category' => 'typography'],
            'blockquote' => ['description' => 'A blockquote component', 'category' => 'typography'],
            'highlight' => ['description' => 'A highlight component', 'category' => 'typography'],
            'qrcode' => ['description' => 'A QR code component', 'category' => 'media'],
            'carousel' => ['description' => 'A carousel component', 'category' => 'media'],
            'carousel-item' => ['description' => 'A carousel item component', 'category' => 'media'],
            'video' => ['description' => 'A video component', 'category' => 'media'],
            'accordion' => ['description' => 'An accordion component', 'category' => 'overlay'],
            'accordion-item' => ['description' => 'An accordion item component', 'category' => 'overlay'],
            'collapsible' => ['description' => 'A collapsible component', 'category' => 'overlay'],
        ];
    }
}
