<?php

/**
 * Flowblade Effects Configuration
 *
 * This file contains effect-related configurations for Flowblade components.
 * It includes rounded variants, shadow variants, and event styles.
 */

return [
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
    | Event Styles (Focus, Hover, Active)
    |--------------------------------------------------------------------------
    |
    | Define consistent event styles for interactive components.
    |
    */
    'events' => [
        'focus' => [
            'outline' => 'focus:outline-none',
            'ring' => 'focus:ring-2',
            'ring_offset' => 'focus:ring-offset-0',
            'ring_color' => 'focus:ring-blue-500',
        ],
        'hover' => [
            'opacity' => 'hover:opacity-90',
            'bg_opacity' => 'hover:bg-opacity-90',
        ],
        'active' => [
            'opacity' => 'active:opacity-75',
            'scale' => 'active:scale-95',
        ],
    ],
];

