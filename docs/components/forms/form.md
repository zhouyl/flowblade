# Form Component

## Overview

The Form component is a wrapper for form elements with built-in support for validation, error handling, and consistent styling. It automatically handles CSRF tokens, method spoofing, and provides flexible layout options. Perfect for creating secure, accessible forms with minimal configuration.

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `method` | string | 'POST' | HTTP method: 'GET', 'POST', 'PUT', 'PATCH', 'DELETE' |
| `action` | string | '' | Form action URL |
| `novalidate` | boolean | false | Disable HTML5 validation |
| `enctype` | string\|null | null | Form encoding: 'application/x-www-form-urlencoded', 'multipart/form-data' |
| `spacing` | string | 'md' | Spacing between elements: 'xs', 'sm', 'md', 'lg', 'xl' |
| `inline` | boolean | false | Display form elements inline |

## Style Props

The Form component supports all common style props for flexible styling:

- **Spacing**: `p`, `px`, `py`, `pt`, `pr`, `pb`, `pl`, `m`, `mx`, `my`, `mt`, `mr`, `mb`, `ml`
- **Sizing**: `w`, `h`, `minW`, `maxW`, `minH`, `maxH`
- **Colors**: `bg`, `color`, `borderColor`
- **Layout**: `display`, `position`, `zIndex`, `overflow`
- **And more**: See `HasStyleProps` trait documentation

## Basic Usage

```blade
<x-form action="/submit" method="POST">
    <x-input name="email" type="email" placeholder="Email" />
    <x-textarea name="message" placeholder="Message" />
    <x-button type="submit">Submit</x-button>
</x-form>
```

## GET Form

```blade
<x-form action="/search" method="GET">
    <x-input name="q" placeholder="Search..." />
    <x-button type="submit">Search</x-button>
</x-form>
```

## File Upload

```blade
<x-form action="/upload" method="POST" enctype="multipart/form-data">
    <x-file-upload name="file" />
    <x-button type="submit">Upload</x-button>
</x-form>
```

## PUT/PATCH/DELETE Methods

```blade
<x-form action="/user/1" method="PUT">
    <x-input name="name" placeholder="Name" />
    <x-button type="submit">Update</x-button>
</x-form>
```

## Inline Form

```blade
<x-form action="/search" method="GET" :inline="true">
    <x-input name="q" placeholder="Search..." w="full" />
    <x-button type="submit">Search</x-button>
</x-form>
```

## Custom Spacing

```blade
<x-form action="/submit" spacing="lg">
    <x-input name="email" placeholder="Email" />
    <x-input name="password" type="password" placeholder="Password" />
    <x-button type="submit">Login</x-button>
</x-form>
```

## With Validation

```blade
<x-form action="/submit" method="POST">
    <x-field label="Email" error="{{ $errors->first('email') }}">
        <x-input
            name="email"
            type="email"
            placeholder="Email"
            :invalid="$errors->has('email')"
        />
    </x-field>

    <x-field label="Password" error="{{ $errors->first('password') }}">
        <x-input
            name="password"
            type="password"
            placeholder="Password"
            :invalid="$errors->has('password')"
        />
    </x-field>

    <x-button type="submit">Login</x-button>
</x-form>
```

## With Style Props

```blade
<x-form
    action="/submit"
    method="POST"
    p="8"
    bg="white"
    rounded="lg"
    shadow
    maxW="md"
>
    <x-input name="email" placeholder="Email" />
    <x-button type="submit" w="full">Submit</x-button>
</x-form>
```

## Features

- **CSRF Protection**: Automatically includes CSRF token
- **Method Spoofing**: Handles PUT, PATCH, DELETE methods via POST
- **Flexible Layout**: Support for inline and vertical layouts
- **Consistent Spacing**: Configurable spacing between form elements
- **Validation Support**: Works seamlessly with Laravel validation

## Accessibility

The Form component:
- Uses semantic HTML `<form>` element
- Automatically includes CSRF token for security
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides proper form structure for accessibility
- Supports proper ARIA attributes for form validation
- Maintains proper focus management for keyboard users

## Notes

- CSRF token is automatically included for security
- Method spoofing is handled transparently for non-GET/POST methods
- Use `enctype="multipart/form-data"` for file uploads
- Spacing applies to direct child elements
- Combine with Field component for better form organization

