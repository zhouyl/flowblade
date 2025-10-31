# CodeBlock

CodeBlock component for displaying multi-line code snippets with syntax highlighting. Ideal for documentation and tutorials. Perfect for code examples, documentation, and technical content.

## Basic Usage

```blade
<x-code-block language="php">
$name = 'John';
echo "Hello, $name!";
</x-code-block>
```

## Props

| Prop | Type | Default | Description |
|------|------|---------|-------------|
| `language` | `string` | `'plaintext'` | Programming language for syntax highlighting |
| `showLineNumbers` | `boolean` | `true` | Show line numbers |
| `copyable` | `boolean` | `true` | Show copy button |

CodeBlock also supports all common style props for flexible styling.

## Supported Languages

- `php`, `javascript`, `typescript`, `python`, `ruby`, `java`, `csharp`, `cpp`, `c`, `go`, `rust`, `sql`, `html`, `css`, `scss`, `json`, `xml`, `yaml`, `bash`, `shell`, `plaintext`

## Examples

### PHP Code

```blade
<x-code-block language="php">
namespace App\Models;

class User extends Model
{
    protected $fillable = ['name', 'email'];
}
</x-code-block>
```

### JavaScript Code

```blade
<x-code-block language="javascript">
const greeting = (name) => {
    return `Hello, ${name}!`;
};

console.log(greeting('World'));
</x-code-block>
```

### HTML Code

```blade
<x-code-block language="html">
<div class="container">
    <h1>Welcome</h1>
    <p>This is a sample HTML code block.</p>
</div>
</x-code-block>
```

### Without Line Numbers

```blade
<x-code-block language="bash" showLineNumbers="false">
npm install
npm run dev
</x-code-block>
```

### Non-copyable

```blade
<x-code-block language="plaintext" copyable="false">
This is a read-only code block
</x-code-block>
```

### In Documentation

```blade
<x-card>
    <x-card-header>
        <x-heading size="lg">Example Usage</x-heading>
    </x-card-header>
    
    <x-card-body>
        <x-text class="mb-4">
            Here's how to use the component:
        </x-text>
        
        <x-code-block language="blade">
<x-button>Click me</x-button>
        </x-code-block>
    </x-card-body>
</x-card>
```

## Accessibility

The CodeBlock component:
- Uses semantic HTML structure
- Supports keyboard navigation (Tab, Enter)
- Works with screen readers
- Provides copy functionality
- Maintains code formatting
- Announces code content to screen readers
- Supports proper ARIA attributes for code blocks

