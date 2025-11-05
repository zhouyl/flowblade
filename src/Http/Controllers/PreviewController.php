<?php

namespace Flowblade\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;

/**
 * Preview Controller
 *
 * Handles component preview requests and displays component documentation.
 */
class PreviewController extends Controller
{
    /**
     * Component categories and their information.
     */
    protected array $categories = [
        'layout' => [
            'name' => 'Layout',
            'description' => 'Layout and container components',
            'icon' => '📐',
        ],
        'button' => [
            'name' => 'Button',
            'description' => 'Button and action components',
            'icon' => '🔘',
        ],
        'data-display' => [
            'name' => 'Data Display',
            'description' => 'Components for displaying data',
            'icon' => '📊',
        ],
        'navigation' => [
            'name' => 'Navigation',
            'description' => 'Navigation and menu components',
            'icon' => '🧭',
        ],
        'form' => [
            'name' => 'Form',
            'description' => 'Form input and control components',
            'icon' => '📝',
        ],
        'overlay' => [
            'name' => 'Overlay',
            'description' => 'Modal, drawer, and overlay components',
            'icon' => '🎭',
        ],
        'feedback' => [
            'name' => 'Feedback',
            'description' => 'Alert, toast, and feedback components',
            'icon' => '💬',
        ],
        'typography' => [
            'name' => 'Typography',
            'description' => 'Text and typography components',
            'icon' => '📝',
        ],
        'media' => [
            'name' => 'Media',
            'description' => 'Image, video, and media components',
            'icon' => '🎬',
        ],
    ];

    /**
     * Display the preview index page.
     */
    public function index(): View
    {
        return view('flowblade::preview.index', [
            'categories' => $this->categories,
        ]);
    }

    /**
     * Display all components.
     */
    public function components(): View
    {
        $components = $this->getAllComponents();

        return view('flowblade::preview.components', [
            'components' => $components,
            'categories' => $this->categories,
        ]);
    }

    /**
     * Display a specific component preview.
     */
    public function show(string $component): View
    {
        $componentInfo = $this->getComponentInfo($component);

        if (!$componentInfo) {
            abort(404, "Component '{$component}' not found");
        }

        return view('flowblade::preview.show', [
            'component' => $component,
            'info' => $componentInfo,
            'categories' => $this->categories,
        ]);
    }

    /**
     * Search components.
     */
    public function search(Request $request): View
    {
        $query = $request->query('q', '');
        $results = [];

        if (!empty($query)) {
            $results = $this->searchComponents($query);
        }

        return view('flowblade::preview.search', [
            'query' => $query,
            'results' => $results,
            'categories' => $this->categories,
        ]);
    }

    /**
     * Display components by category.
     */
    public function category(string $category): View
    {
        if (!isset($this->categories[$category])) {
            abort(404, "Category '{$category}' not found");
        }

        $components = $this->getComponentsByCategory($category);

        return view('flowblade::preview.category', [
            'category' => $category,
            'categoryInfo' => $this->categories[$category],
            'components' => $components,
            'categories' => $this->categories,
        ]);
    }

    /**
     * Get all components.
     */
    protected function getAllComponents(): array
    {
        return [
            // Buttons
            'button' => ['name' => 'Button', 'category' => 'button', 'description' => 'A versatile button component with multiple variants and sizes'],
            'button-group' => ['name' => 'Button Group', 'category' => 'button', 'description' => 'Group multiple buttons together'],
            'close-button' => ['name' => 'Close Button', 'category' => 'button', 'description' => 'A close button component for modals and alerts'],
            'icon-button' => ['name' => 'Icon Button', 'category' => 'button', 'description' => 'A button component that displays only an icon'],

            // Data Display
            'avatar' => ['name' => 'Avatar', 'category' => 'data-display', 'description' => 'Display user avatars with initials or images'],
            'badge' => ['name' => 'Badge', 'category' => 'data-display', 'description' => 'A small label component for highlighting information'],
            'card' => ['name' => 'Card', 'category' => 'data-display', 'description' => 'A container component for grouping related content'],
            'chat-bubble' => ['name' => 'Chat Bubble', 'category' => 'data-display', 'description' => 'Display chat messages in a bubble format'],
            'color-swatch' => ['name' => 'Color Swatch', 'category' => 'data-display', 'description' => 'Display color swatches with labels'],
            'data-list' => ['name' => 'Data List', 'category' => 'data-display', 'description' => 'Display data in a list format'],
            'icon' => ['name' => 'Icon', 'category' => 'data-display', 'description' => 'Display SVG icons from Heroicons'],
            'indicator' => ['name' => 'Indicator', 'category' => 'data-display', 'description' => 'Display status indicators'],
            'list' => ['name' => 'List', 'category' => 'data-display', 'description' => 'Display items in a list format'],
            'rating' => ['name' => 'Rating', 'category' => 'data-display', 'description' => 'Display star ratings'],
            'stat' => ['name' => 'Stat', 'category' => 'data-display', 'description' => 'Display statistics with labels and values'],
            'table' => ['name' => 'Table', 'category' => 'data-display', 'description' => 'Display data in a table format'],
            'tag' => ['name' => 'Tag', 'category' => 'data-display', 'description' => 'Display tags with optional close button'],
            'tags-input' => ['name' => 'Tags Input', 'category' => 'data-display', 'description' => 'Input component for managing tags'],
            'timeline' => ['name' => 'Timeline', 'category' => 'data-display', 'description' => 'Display events in a timeline format'],
            'tree-view' => ['name' => 'Tree View', 'category' => 'data-display', 'description' => 'Display hierarchical data in a tree structure'],

            // Disclosure
            'accordion' => ['name' => 'Accordion', 'category' => 'disclosure', 'description' => 'Collapsible accordion component'],
            'collapsible' => ['name' => 'Collapsible', 'category' => 'disclosure', 'description' => 'A collapsible content component'],

            // Feedback
            'alert' => ['name' => 'Alert', 'category' => 'feedback', 'description' => 'Display alert messages with different types'],
            'banner' => ['name' => 'Banner', 'category' => 'feedback', 'description' => 'Display banner messages'],
            'empty' => ['name' => 'Empty', 'category' => 'feedback', 'description' => 'Display empty state message'],
            'progress' => ['name' => 'Progress', 'category' => 'feedback', 'description' => 'Display progress bars'],
            'progress-circle' => ['name' => 'Progress Circle', 'category' => 'feedback', 'description' => 'Display circular progress indicators'],
            'skeleton' => ['name' => 'Skeleton', 'category' => 'feedback', 'description' => 'Display skeleton loading placeholders'],
            'spinner' => ['name' => 'Spinner', 'category' => 'feedback', 'description' => 'Display loading spinners'],
            'status' => ['name' => 'Status', 'category' => 'feedback', 'description' => 'Display status badges'],
            'toast' => ['name' => 'Toast', 'category' => 'feedback', 'description' => 'Display toast notifications'],

            // Forms
            'checkbox' => ['name' => 'Checkbox', 'category' => 'form', 'description' => 'Checkbox input component'],
            'clipboard' => ['name' => 'Clipboard', 'category' => 'form', 'description' => 'Copy to clipboard component'],
            'datepicker' => ['name' => 'Datepicker', 'category' => 'form', 'description' => 'Date picker component'],
            'editable' => ['name' => 'Editable', 'category' => 'form', 'description' => 'Inline editable text component'],
            'field' => ['name' => 'Field', 'category' => 'form', 'description' => 'Form field wrapper component'],
            'fieldset' => ['name' => 'Fieldset', 'category' => 'form', 'description' => 'Group form fields together'],
            'file-upload' => ['name' => 'File Upload', 'category' => 'form', 'description' => 'File upload input component'],
            'floating-label' => ['name' => 'Floating Label', 'category' => 'form', 'description' => 'Input with floating label'],
            'form' => ['name' => 'Form', 'category' => 'form', 'description' => 'Form wrapper component'],
            'input' => ['name' => 'Input', 'category' => 'form', 'description' => 'Text input component'],
            'input-group' => ['name' => 'Input Group', 'category' => 'form', 'description' => 'Group input with addons'],
            'native-select' => ['name' => 'Native Select', 'category' => 'form', 'description' => 'Native HTML select element'],
            'number-input' => ['name' => 'Number Input', 'category' => 'form', 'description' => 'Number input component'],
            'password-input' => ['name' => 'Password Input', 'category' => 'form', 'description' => 'Password input component'],
            'phone-input' => ['name' => 'Phone Input', 'category' => 'form', 'description' => 'Phone number input component'],
            'pin-input' => ['name' => 'PIN Input', 'category' => 'form', 'description' => 'PIN code input component'],
            'radio' => ['name' => 'Radio', 'category' => 'form', 'description' => 'Radio button component'],
            'range-slider' => ['name' => 'Range Slider', 'category' => 'form', 'description' => 'Range slider component'],
            'search-input' => ['name' => 'Search Input', 'category' => 'form', 'description' => 'Search input with suggestions'],
            'select' => ['name' => 'Select', 'category' => 'form', 'description' => 'Select dropdown component'],
            'slider' => ['name' => 'Slider', 'category' => 'form', 'description' => 'Slider input component'],
            'switch' => ['name' => 'Switch', 'category' => 'form', 'description' => 'Toggle switch component'],
            'textarea' => ['name' => 'Textarea', 'category' => 'form', 'description' => 'Textarea input component'],
            'timepicker' => ['name' => 'Timepicker', 'category' => 'form', 'description' => 'Time picker component'],

            // Layout
            'absolute-center' => ['name' => 'Absolute Center', 'category' => 'layout', 'description' => 'Center content using absolute positioning'],
            'aspect-ratio' => ['name' => 'Aspect Ratio', 'category' => 'layout', 'description' => 'Maintain aspect ratio for content'],
            'box' => ['name' => 'Box', 'category' => 'layout', 'description' => 'Basic container component'],
            'center' => ['name' => 'Center', 'category' => 'layout', 'description' => 'Center content using flexbox'],
            'container' => ['name' => 'Container', 'category' => 'layout', 'description' => 'Responsive container component'],
            'divider' => ['name' => 'Divider', 'category' => 'layout', 'description' => 'Visual divider component'],
            'flex' => ['name' => 'Flex', 'category' => 'layout', 'description' => 'Flexbox layout component'],
            'footer' => ['name' => 'Footer', 'category' => 'layout', 'description' => 'Footer component'],
            'grid' => ['name' => 'Grid', 'category' => 'layout', 'description' => 'CSS grid layout component'],
            'group' => ['name' => 'Group', 'category' => 'layout', 'description' => 'Group related elements'],
            'hstack' => ['name' => 'HStack', 'category' => 'layout', 'description' => 'Horizontal stack layout'],
            'jumbotron' => ['name' => 'Jumbotron', 'category' => 'layout', 'description' => 'Large hero section component'],
            'scroll-area' => ['name' => 'Scroll Area', 'category' => 'layout', 'description' => 'Scrollable area component'],
            'separator' => ['name' => 'Separator', 'category' => 'layout', 'description' => 'Visual separator component'],
            'simple-grid' => ['name' => 'Simple Grid', 'category' => 'layout', 'description' => 'Simple grid layout'],
            'spacer' => ['name' => 'Spacer', 'category' => 'layout', 'description' => 'Add spacing between elements'],
            'stack' => ['name' => 'Stack', 'category' => 'layout', 'description' => 'Stack layout component'],
            'vstack' => ['name' => 'VStack', 'category' => 'layout', 'description' => 'Vertical stack layout'],
            'wrap' => ['name' => 'Wrap', 'category' => 'layout', 'description' => 'Wrap layout component'],

            // Media
            'carousel' => ['name' => 'Carousel', 'category' => 'media', 'description' => 'Image carousel component'],
            'gallery' => ['name' => 'Gallery', 'category' => 'media', 'description' => 'Image gallery component'],
            'image' => ['name' => 'Image', 'category' => 'media', 'description' => 'Image component with lazy loading'],
            'qrcode' => ['name' => 'QR Code', 'category' => 'media', 'description' => 'Generate QR codes'],
            'video' => ['name' => 'Video', 'category' => 'media', 'description' => 'Video player component'],

            // Navigation
            'breadcrumb' => ['name' => 'Breadcrumb', 'category' => 'navigation', 'description' => 'Breadcrumb navigation component'],
            'mega-menu' => ['name' => 'Mega Menu', 'category' => 'navigation', 'description' => 'Large dropdown menu component'],
            'navbar' => ['name' => 'Navbar', 'category' => 'navigation', 'description' => 'Navigation bar component'],
            'pagination' => ['name' => 'Pagination', 'category' => 'navigation', 'description' => 'Pagination component'],
            'sidebar' => ['name' => 'Sidebar', 'category' => 'navigation', 'description' => 'Sidebar navigation component'],
            'speed-dial' => ['name' => 'Speed Dial', 'category' => 'navigation', 'description' => 'Floating action button menu'],
            'steps' => ['name' => 'Steps', 'category' => 'navigation', 'description' => 'Step indicator component'],
            'tabs' => ['name' => 'Tabs', 'category' => 'navigation', 'description' => 'Tabbed content component'],

            // Overlay
            'drawer' => ['name' => 'Drawer', 'category' => 'overlay', 'description' => 'Slide-out drawer component'],
            'hover-card' => ['name' => 'Hover Card', 'category' => 'overlay', 'description' => 'Card that appears on hover'],
            'menu' => ['name' => 'Menu', 'category' => 'overlay', 'description' => 'Dropdown menu component'],
            'modal' => ['name' => 'Modal', 'category' => 'overlay', 'description' => 'Modal dialog component'],
            'popover' => ['name' => 'Popover', 'category' => 'overlay', 'description' => 'Popover component'],
            'tooltip' => ['name' => 'Tooltip', 'category' => 'overlay', 'description' => 'Tooltip component'],

            // Typography
            'blockquote' => ['name' => 'Blockquote', 'category' => 'typography', 'description' => 'Blockquote component'],
            'code' => ['name' => 'Code', 'category' => 'typography', 'description' => 'Inline code component'],
            'code-block' => ['name' => 'Code Block', 'category' => 'typography', 'description' => 'Code block with syntax highlighting'],
            'em' => ['name' => 'Em', 'category' => 'typography', 'description' => 'Emphasized text component'],
            'heading' => ['name' => 'Heading', 'category' => 'typography', 'description' => 'Heading component'],
            'highlight' => ['name' => 'Highlight', 'category' => 'typography', 'description' => 'Highlight text component'],
            'kbd' => ['name' => 'Kbd', 'category' => 'typography', 'description' => 'Keyboard key component'],
            'link' => ['name' => 'Link', 'category' => 'typography', 'description' => 'Link component'],
            'mark' => ['name' => 'Mark', 'category' => 'typography', 'description' => 'Marked text component'],
            'strong' => ['name' => 'Strong', 'category' => 'typography', 'description' => 'Strong text component'],
            'text' => ['name' => 'Text', 'category' => 'typography', 'description' => 'Text component'],
        ];
    }

    /**
     * Get component information.
     */
    protected function getComponentInfo(string $component): ?array
    {
        $components = $this->getAllComponents();

        return $components[$component] ?? null;
    }

    /**
     * Get components by category.
     */
    protected function getComponentsByCategory(string $category): array
    {
        $components = $this->getAllComponents();

        return array_filter($components, function ($component) use ($category) {
            return $component['category'] === $category;
        });
    }

    /**
     * Search components.
     */
    protected function searchComponents(string $query): array
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
                    'info' => $info,
                    'score' => $score,
                ];
            }
        }

        // Sort by score descending
        usort($results, function ($a, $b) {
            return $b['score'] <=> $a['score'];
        });

        return $results;
    }
}
