<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Component Prefix
    |--------------------------------------------------------------------------
    |
    | This value determines the prefix for all Flowblade components.
    | By default, components are registered without a prefix (e.g., <x-button>).
    | You can set a prefix like 'fb' to use <x-fb.button> instead.
    |
    | Examples: '' (no prefix), 'fb', 'flow'
    |
    */
    'prefix' => env('FLOWBLADE_PREFIX', ''),

    /*
    |--------------------------------------------------------------------------
    | Default Color Scheme
    |--------------------------------------------------------------------------
    |
    | The default color scheme for components.
    | Available: primary, secondary, success, warning, danger, info, gray
    |
    */
    'default_color' => 'primary',

    /*
    |--------------------------------------------------------------------------
    | Default Size
    |--------------------------------------------------------------------------
    |
    | The default size for components.
    | Available: 2xs, xs, sm, md, lg, xl, 2xl, 3xl, 4xl
    |
    */
    'default_size' => 'md',

    /*
    |--------------------------------------------------------------------------
    | Color Mappings
    |--------------------------------------------------------------------------
    |
    | Map semantic color names to Tailwind CSS color classes.
    | You can customize these to match your design system.
    |
    | Note: Color configurations are loaded from config/flowblade/colors.php
    |
    */
    ...(require __DIR__ . '/flowblade/colors.php'),

    /*
    |--------------------------------------------------------------------------
    | Component Color Variants
    |--------------------------------------------------------------------------
    |
    | Define color variants for components with multiple visual styles.
    |
    */
    'component_colors' => [
        'badge' => [
            'solid' => [
                'primary' => 'bg-blue-600 text-white',
                'secondary' => 'bg-gray-600 text-white',
                'success' => 'bg-green-600 text-white',
                'warning' => 'bg-yellow-600 text-white',
                'danger' => 'bg-red-600 text-white',
                'info' => 'bg-cyan-600 text-white',
                'gray' => 'bg-gray-600 text-white',
            ],
            'subtle' => [
                'primary' => 'bg-blue-100 text-blue-800',
                'secondary' => 'bg-gray-100 text-gray-800',
                'success' => 'bg-green-100 text-green-800',
                'warning' => 'bg-yellow-100 text-yellow-800',
                'danger' => 'bg-red-100 text-red-800',
                'info' => 'bg-cyan-100 text-cyan-800',
                'gray' => 'bg-gray-100 text-gray-800',
            ],
            'outline' => [
                'primary' => 'border border-blue-600 text-blue-600',
                'secondary' => 'border border-gray-600 text-gray-600',
                'success' => 'border border-green-600 text-green-600',
                'warning' => 'border border-yellow-600 text-yellow-600',
                'danger' => 'border border-red-600 text-red-600',
                'info' => 'border border-cyan-600 text-cyan-600',
                'gray' => 'border border-gray-600 text-gray-600',
            ],
        ],
        'tag' => [
            'solid' => [
                'primary' => 'bg-blue-600 text-white',
                'secondary' => 'bg-gray-600 text-white',
                'success' => 'bg-green-600 text-white',
                'warning' => 'bg-yellow-600 text-white',
                'danger' => 'bg-red-600 text-white',
                'info' => 'bg-cyan-600 text-white',
                'gray' => 'bg-gray-600 text-white',
            ],
            'subtle' => [
                'primary' => 'bg-blue-100 text-blue-800',
                'secondary' => 'bg-gray-100 text-gray-800',
                'success' => 'bg-green-100 text-green-800',
                'warning' => 'bg-yellow-100 text-yellow-800',
                'danger' => 'bg-red-100 text-red-800',
                'info' => 'bg-cyan-100 text-cyan-800',
                'gray' => 'bg-gray-100 text-gray-800',
            ],
            'outline' => [
                'primary' => 'border border-blue-600 text-blue-600',
                'secondary' => 'border border-gray-600 text-gray-600',
                'success' => 'border border-green-600 text-green-600',
                'warning' => 'border border-yellow-600 text-yellow-600',
                'danger' => 'border border-red-600 text-red-600',
                'info' => 'border border-cyan-600 text-cyan-600',
                'gray' => 'border border-gray-600 text-gray-600',
            ],
        ],
        'alert' => [
            'info' => [
                'solid' => 'bg-blue-600 text-white border-blue-600',
                'subtle' => 'bg-blue-50 text-blue-900 border-blue-200',
                'left-accent' => 'bg-blue-50 text-blue-900 border-l-4 border-l-blue-600 border-blue-200',
                'top-accent' => 'bg-blue-50 text-blue-900 border-t-4 border-t-blue-600 border-blue-200',
                'icon' => 'text-blue-600',
            ],
            'success' => [
                'solid' => 'bg-green-600 text-white border-green-600',
                'subtle' => 'bg-green-50 text-green-900 border-green-200',
                'left-accent' => 'bg-green-50 text-green-900 border-l-4 border-l-green-600 border-green-200',
                'top-accent' => 'bg-green-50 text-green-900 border-t-4 border-t-green-600 border-green-200',
                'icon' => 'text-green-600',
            ],
            'warning' => [
                'solid' => 'bg-yellow-600 text-white border-yellow-600',
                'subtle' => 'bg-yellow-50 text-yellow-900 border-yellow-200',
                'left-accent' => 'bg-yellow-50 text-yellow-900 border-l-4 border-l-yellow-600 border-yellow-200',
                'top-accent' => 'bg-yellow-50 text-yellow-900 border-t-4 border-t-yellow-600 border-yellow-200',
                'icon' => 'text-yellow-600',
            ],
            'danger' => [
                'solid' => 'bg-red-600 text-white border-red-600',
                'subtle' => 'bg-red-50 text-red-900 border-red-200',
                'left-accent' => 'bg-red-50 text-red-900 border-l-4 border-l-red-600 border-red-200',
                'top-accent' => 'bg-red-50 text-red-900 border-t-4 border-t-red-600 border-red-200',
                'icon' => 'text-red-600',
            ],
        ],
        'code' => [
            'primary' => 'bg-blue-100 text-blue-800',
            'secondary' => 'bg-gray-100 text-gray-800',
            'success' => 'bg-green-100 text-green-800',
            'warning' => 'bg-yellow-100 text-yellow-800',
            'danger' => 'bg-red-100 text-red-800',
            'info' => 'bg-cyan-100 text-cyan-800',
            'gray' => 'bg-gray-100 text-gray-800',
        ],
        'mark' => [
            'primary' => 'bg-blue-200 text-blue-900',
            'secondary' => 'bg-gray-200 text-gray-900',
            'success' => 'bg-green-200 text-green-900',
            'warning' => 'bg-yellow-200 text-yellow-900',
            'danger' => 'bg-red-200 text-red-900',
            'info' => 'bg-cyan-200 text-cyan-900',
            'gray' => 'bg-gray-200 text-gray-900',
        ],
        'blockquote' => [
            'primary' => 'border-blue-500',
            'secondary' => 'border-gray-500',
            'success' => 'border-green-500',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-500',
            'info' => 'border-cyan-500',
            'gray' => 'border-gray-400',
        ],
        'separator' => [
            'primary' => 'border-blue-600',
            'secondary' => 'border-gray-600',
            'success' => 'border-green-600',
            'warning' => 'border-yellow-500',
            'danger' => 'border-red-600',
            'info' => 'border-cyan-600',
            'gray' => 'border-gray-200',
        ],
        'list' => [
            'bg' => 'bg-white',
            'border' => 'border-gray-200',
            'text' => 'text-gray-900',
            'dark_bg' => 'dark:bg-gray-700',
            'dark_border' => 'dark:border-gray-600',
            'dark_text' => 'dark:text-white',
        ],
        'list_item' => [
            'border' => 'border-gray-200',
            'dark_border' => 'dark:border-gray-600',
            'active_bg' => 'bg-blue-700',
            'active_text' => 'text-white',
            'active_dark_bg' => 'dark:bg-gray-800',
            'hover_bg' => 'hover:bg-gray-100',
            'hover_text' => 'hover:text-blue-700',
            'focus_ring' => 'focus:ring-blue-700',
            'focus_text' => 'focus:text-blue-700',
            'dark_hover_bg' => 'dark:hover:bg-gray-600',
            'dark_hover_text' => 'dark:hover:text-white',
            'dark_focus_ring' => 'dark:focus:ring-gray-500',
            'dark_focus_text' => 'dark:focus:text-white',
            'disabled_bg' => 'bg-gray-100',
            'dark_disabled_bg' => 'dark:bg-gray-600',
            'dark_disabled_text' => 'dark:text-gray-400',
        ],
        'card' => [
            'elevated' => 'bg-white shadow-md border border-gray-200',
            'outline' => 'bg-white border border-gray-300',
            'filled' => 'bg-gray-50 border border-gray-200',
            'ghost' => 'bg-transparent',
        ],
        'card_header' => [
            'border' => 'border-b',
            'border_color' => 'border-gray-200',
        ],
        'card_footer' => [
            'border' => 'border-t',
            'border_color' => 'border-gray-200',
        ],
        'footer' => [
            'bg' => 'bg-gray-100',
            'border' => 'border-t border-gray-200',
            'dark_bg' => 'dark:bg-gray-900',
            'dark_border' => 'dark:border-gray-800',
        ],
        'close_button' => [
            'text' => 'text-gray-400',
        ],
        'tags_input' => [
            'border' => 'border-gray-300',
            'bg' => 'bg-white',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Size Mappings
    |--------------------------------------------------------------------------
    |
    | Define size variants for components.
    |
    | Note: Size configurations are loaded from config/flowblade/sizes.php
    |
    */
    ...(require __DIR__ . '/flowblade/sizes.php'),

    /*
    |--------------------------------------------------------------------------
    | Effects Configuration (Rounded, Shadows, Events)
    |--------------------------------------------------------------------------
    |
    | Define border radius variants, shadow variants, and event styles.
    |
    | Note: Effect configurations are loaded from config/flowblade/effects.php
    |
    */
    ...(require __DIR__ . '/flowblade/effects.php'),

    /*
    |--------------------------------------------------------------------------
    | Alpine.js Integration
    |--------------------------------------------------------------------------
    |
    | Enable or disable Alpine.js integration for interactive components.
    |
    */
    'alpine_enabled' => true,

    /*
    |--------------------------------------------------------------------------
    | Iconify Configuration
    |--------------------------------------------------------------------------
    |
    | Configuration for Iconify icon integration.
    |
    */
    'iconify' => [
        'enabled' => true,
        'default_size' => '1.2em',
        'cdn' => 'https://cdn.jsdelivr.net/npm/@iconify/iconify@latest/dist/iconify.min.js',
    ],
];
