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
    */
    'colors' => [
        'primary' => [
            'bg' => 'bg-blue-600',
            'hover' => 'hover:bg-blue-700',
            'text' => 'text-blue-600',
            'border' => 'border-blue-600',
            'ring' => 'ring-blue-600',
            'focus' => 'focus:ring-blue-500',
        ],
        'secondary' => [
            'bg' => 'bg-gray-600',
            'hover' => 'hover:bg-gray-700',
            'text' => 'text-gray-600',
            'border' => 'border-gray-600',
            'ring' => 'ring-gray-600',
            'focus' => 'focus:ring-gray-500',
        ],
        'success' => [
            'bg' => 'bg-green-600',
            'hover' => 'hover:bg-green-700',
            'text' => 'text-green-600',
            'border' => 'border-green-600',
            'ring' => 'ring-green-600',
            'focus' => 'focus:ring-green-500',
        ],
        'warning' => [
            'bg' => 'bg-yellow-500',
            'hover' => 'hover:bg-yellow-600',
            'text' => 'text-yellow-600',
            'border' => 'border-yellow-500',
            'ring' => 'ring-yellow-500',
            'focus' => 'focus:ring-yellow-500',
        ],
        'danger' => [
            'bg' => 'bg-red-600',
            'hover' => 'hover:bg-red-700',
            'text' => 'text-red-600',
            'border' => 'border-red-600',
            'ring' => 'ring-red-600',
            'focus' => 'focus:ring-red-500',
        ],
        'info' => [
            'bg' => 'bg-cyan-600',
            'hover' => 'hover:bg-cyan-700',
            'text' => 'text-cyan-600',
            'border' => 'border-cyan-600',
            'ring' => 'ring-cyan-600',
            'focus' => 'focus:ring-cyan-500',
        ],
        'gray' => [
            'bg' => 'bg-gray-500',
            'hover' => 'hover:bg-gray-600',
            'text' => 'text-gray-500',
            'border' => 'border-gray-500',
            'ring' => 'ring-gray-500',
            'focus' => 'focus:ring-gray-400',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Size Mappings
    |--------------------------------------------------------------------------
    |
    | Define size variants for components.
    |
    */
    'sizes' => [
        'button' => [
            '2xs' => 'px-1.5 py-0.5 text-xs',
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-3 py-1.5 text-sm',
            'md' => 'px-4 py-2 text-sm',
            'lg' => 'px-5 py-2.5 text-base',
            'xl' => 'px-6 py-3 text-base',
            '2xl' => 'px-7 py-3.5 text-lg',
            '3xl' => 'px-8 py-4 text-xl',
            '4xl' => 'px-10 py-5 text-2xl',
        ],
        'input' => [
            '2xs' => 'px-1.5 py-0.5 text-xs',
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
            '2xl' => 'px-6 py-3.5 text-lg',
            '3xl' => 'px-7 py-4 text-xl',
            '4xl' => 'px-8 py-5 text-2xl',
        ],
        'text' => [
            '2xs' => 'text-xs',
            'xs' => 'text-xs',
            'sm' => 'text-sm',
            'md' => 'text-base',
            'lg' => 'text-lg',
            'xl' => 'text-xl',
            '2xl' => 'text-2xl',
            '3xl' => 'text-3xl',
            '4xl' => 'text-4xl',
        ],
        'icon' => [
            '2xs' => 'w-3 h-3',
            'xs' => 'w-4 h-4',
            'sm' => 'w-5 h-5',
            'md' => 'w-6 h-6',
            'lg' => 'w-8 h-8',
            'xl' => 'w-10 h-10',
            '2xl' => 'w-12 h-12',
            '3xl' => 'w-16 h-16',
            '4xl' => 'w-20 h-20',
        ],
        'icon_button' => [
            '2xs' => 'p-0.5 text-xs',
            'xs' => 'p-1 text-xs',
            'sm' => 'p-1.5 text-sm',
            'md' => 'p-2 text-base',
            'lg' => 'p-2.5 text-lg',
            'xl' => 'p-3 text-xl',
            '2xl' => 'p-3.5 text-2xl',
            '3xl' => 'p-4 text-3xl',
            '4xl' => 'p-5 text-4xl',
        ],
        'spacing' => [
            '2xs' => '0.5',
            'xs' => '1',
            'sm' => '2',
            'md' => '4',
            'lg' => '6',
            'xl' => '8',
            '2xl' => '10',
            '3xl' => '12',
            '4xl' => '16',
        ],
        'close_button' => [
            'xs' => 'p-0.5',
            'sm' => 'p-1',
            'md' => 'p-1.5',
            'lg' => 'p-2',
            'xl' => 'p-2.5',
        ],
        'badge' => [
            'xs' => 'text-xs px-2 py-0.5',
            'sm' => 'text-xs px-2.5 py-0.5',
            'md' => 'text-sm px-3 py-1',
            'lg' => 'text-base px-3.5 py-1',
            'xl' => 'text-lg px-4 py-1.5',
        ],
        'tag' => [
            'xs' => 'text-xs px-2 py-0.5 gap-1',
            'sm' => 'text-xs px-2.5 py-0.5 gap-1',
            'md' => 'text-sm px-3 py-1 gap-1.5',
            'lg' => 'text-base px-3.5 py-1 gap-1.5',
            'xl' => 'text-lg px-4 py-1.5 gap-2',
        ],
        'avatar' => [
            '2xs' => 'w-6 h-6 text-xs',
            'xs' => 'w-8 h-8 text-xs',
            'sm' => 'w-10 h-10 text-sm',
            'md' => 'w-12 h-12 text-base',
            'lg' => 'w-16 h-16 text-lg',
            'xl' => 'w-20 h-20 text-xl',
            '2xl' => 'w-24 h-24 text-2xl',
            '3xl' => 'w-32 h-32 text-3xl',
            '4xl' => 'w-40 h-40 text-4xl',
        ],
        'card' => [
            'xs' => 'p-2',
            'sm' => 'p-3',
            'md' => 'p-4',
            'lg' => 'p-6',
            'xl' => 'p-8',
        ],
        'checkbox' => [
            'sm' => 'h-4 w-4',
            'md' => 'h-5 w-5',
            'lg' => 'h-6 w-6',
        ],
        'radio' => [
            'sm' => 'h-4 w-4',
            'md' => 'h-5 w-5',
            'lg' => 'h-6 w-6',
        ],
        'native_select' => [
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
        ],
        'number_input' => [
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
        ],
        'password_input' => [
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
        ],
        'pin_input' => [
            'sm' => 'w-8 h-8 text-sm',
            'md' => 'w-10 h-10 text-base',
            'lg' => 'w-12 h-12 text-lg',
        ],
        'textarea' => [
            'xs' => 'px-2 py-1 text-xs',
            'sm' => 'px-2.5 py-1.5 text-sm',
            'md' => 'px-3 py-2 text-sm',
            'lg' => 'px-4 py-2.5 text-base',
            'xl' => 'px-5 py-3 text-base',
        ],
        'indicator' => [
            'xs' => 'w-2 h-2',
            'sm' => 'w-2.5 h-2.5',
            'md' => 'w-3 h-3',
            'lg' => 'w-3.5 h-3.5',
            'xl' => 'w-4 h-4',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Rounded Variants
    |--------------------------------------------------------------------------
    |
    | Define border radius variants.
    |
    */
    'rounded' => [
        'none' => 'rounded-none',
        'sm' => 'rounded-sm',
        'md' => 'rounded-md',
        'lg' => 'rounded-lg',
        'xl' => 'rounded-xl',
        'full' => 'rounded-full',
    ],

    /*
    |--------------------------------------------------------------------------
    | Shadow Variants
    |--------------------------------------------------------------------------
    |
    | Define shadow variants.
    |
    */
    'shadows' => [
        'none' => 'shadow-none',
        'sm' => 'shadow-sm',
        'md' => 'shadow-md',
        'lg' => 'shadow-lg',
        'xl' => 'shadow-xl',
    ],

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
