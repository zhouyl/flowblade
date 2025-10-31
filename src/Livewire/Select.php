<?php

declare(strict_types=1);

namespace Flowblade\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

/**
 * Livewire Select Component
 *
 * Enhanced select component with search, multi-select, and dynamic option loading.
 * Provides server-side option management and filtering.
 *
 * Usage:
 * <livewire:select wire:model="selectedValue" :options="$options" />
 */
class Select extends Component
{
    /**
     * Selected value(s)
     *
     * @var mixed
     */
    public mixed $value = null;

    /**
     * Available options
     *
     * @var array
     */
    public array $options = [];

    /**
     * Search query
     *
     * @var string
     */
    public string $search = '';

    /**
     * Whether to allow multiple selections
     *
     * @var bool
     */
    public bool $multiple = false;

    /**
     * Whether to enable search functionality
     *
     * @var bool
     */
    public bool $searchable = false;

    /**
     * Whether the select is disabled
     *
     * @var bool
     */
    public bool $disabled = false;

    /**
     * Whether the select is required
     *
     * @var bool
     */
    public bool $required = false;

    /**
     * Whether the select has validation errors
     *
     * @var bool
     */
    public bool $invalid = false;

    /**
     * Label text
     *
     * @var string|null
     */
    public ?string $label = null;

    /**
     * Placeholder text
     *
     * @var string|null
     */
    public ?string $placeholder = 'Choose an option';

    /**
     * Size: sm, md, lg
     *
     * @var string
     */
    public string $size = 'md';

    /**
     * Variant: default, underline
     *
     * @var string
     */
    public string $variant = 'default';

    /**
     * Helper text below the select
     *
     * @var string|null
     */
    public ?string $helperText = null;

    /**
     * Error message text
     *
     * @var string|null
     */
    public ?string $errorText = null;

    /**
     * Whether the dropdown is open
     *
     * @var bool
     */
    public bool $isOpen = false;

    /**
     * Mount the component
     *
     * @param mixed $value
     * @param array $options
     * @return void
     */
    public function mount(mixed $value = null, array $options = []): void
    {
        $this->value = $value;
        $this->options = $options;
    }

    /**
     * Toggle dropdown
     *
     * @return void
     */
    public function toggleDropdown(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    /**
     * Open dropdown
     *
     * @return void
     */
    public function openDropdown(): void
    {
        $this->isOpen = true;
    }

    /**
     * Close dropdown
     *
     * @return void
     */
    public function closeDropdown(): void
    {
        $this->isOpen = false;
        $this->search = '';
    }

    /**
     * Select option
     *
     * @param mixed $optionValue
     * @return void
     */
    public function selectOption(mixed $optionValue): void
    {
        if ($this->multiple) {
            if (!is_array($this->value)) {
                $this->value = [];
            }

            if (in_array($optionValue, $this->value)) {
                $this->value = array_filter(
                    $this->value,
                    fn($v) => $v !== $optionValue
                );
            } else {
                $this->value[] = $optionValue;
            }
        } else {
            $this->value = $optionValue;
            $this->closeDropdown();
        }
    }

    /**
     * Clear selection
     *
     * @return void
     */
    public function clearSelection(): void
    {
        $this->value = $this->multiple ? [] : null;
    }

    /**
     * Get filtered options
     *
     * @return array
     */
    #[Computed]
    public function filteredOptions(): array
    {
        if (!$this->searchable || empty($this->search)) {
            return $this->options;
        }

        $search = strtolower($this->search);

        return array_filter(
            $this->options,
            fn($option) => str_contains(
                strtolower((string)($option['label'] ?? $option)),
                $search
            )
        );
    }

    /**
     * Get selected label(s)
     *
     * @return string
     */
    #[Computed]
    public function selectedLabel(): string
    {
        if ($this->value === null || $this->value === '') {
            return $this->placeholder ?? '';
        }

        if ($this->multiple && is_array($this->value)) {
            $labels = array_map(
                fn($v) => $this->getOptionLabel($v),
                $this->value
            );
            return implode(', ', array_filter($labels));
        }

        return $this->getOptionLabel($this->value);
    }

    /**
     * Get option label by value
     *
     * @param mixed $value
     * @return string
     */
    private function getOptionLabel(mixed $value): string
    {
        foreach ($this->options as $option) {
            if (($option['value'] ?? $option) === $value) {
                return $option['label'] ?? (string)$value;
            }
        }

        return (string)$value;
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('flowblade::livewire.select');
    }
}

