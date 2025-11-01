<?php

namespace Flowblade\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Illuminate\Http\Request;

/**
 * Preview Controller
 *
 * Handles component preview requests and displays component documentation.
 *
 * @package Flowblade\Http\Controllers
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
            'button' => ['name' => 'Button', 'category' => 'button', 'description' => 'A versatile button component'],
            'card' => ['name' => 'Card', 'category' => 'data-display', 'description' => 'A card container component'],
            'input' => ['name' => 'Input', 'category' => 'form', 'description' => 'A text input component'],
            'select' => ['name' => 'Select', 'category' => 'form', 'description' => 'A select dropdown component'],
            'modal' => ['name' => 'Modal', 'category' => 'overlay', 'description' => 'A modal dialog component'],
            'alert' => ['name' => 'Alert', 'category' => 'feedback', 'description' => 'An alert component'],
            'table' => ['name' => 'Table', 'category' => 'data-display', 'description' => 'A table component'],
            'badge' => ['name' => 'Badge', 'category' => 'data-display', 'description' => 'A badge component'],
            'spinner' => ['name' => 'Spinner', 'category' => 'feedback', 'description' => 'A loading spinner component'],
            'navbar' => ['name' => 'Navbar', 'category' => 'navigation', 'description' => 'A navigation bar component'],
            'sidebar' => ['name' => 'Sidebar', 'category' => 'navigation', 'description' => 'A sidebar component'],
            'box' => ['name' => 'Box', 'category' => 'layout', 'description' => 'A basic container component'],
            'flex' => ['name' => 'Flex', 'category' => 'layout', 'description' => 'A flexbox layout component'],
            'grid' => ['name' => 'Grid', 'category' => 'layout', 'description' => 'A CSS grid layout component'],
            'heading' => ['name' => 'Heading', 'category' => 'typography', 'description' => 'A heading component'],
            'text' => ['name' => 'Text', 'category' => 'typography', 'description' => 'A text component'],
            'link' => ['name' => 'Link', 'category' => 'typography', 'description' => 'A link component'],
            'icon' => ['name' => 'Icon', 'category' => 'media', 'description' => 'An icon component'],
            'avatar' => ['name' => 'Avatar', 'category' => 'data-display', 'description' => 'An avatar component'],
            'checkbox' => ['name' => 'Checkbox', 'category' => 'form', 'description' => 'A checkbox component'],
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

