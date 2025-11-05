<?php

declare(strict_types=1);

namespace Flowblade\Livewire;

use Livewire\Component;

/**
 * Livewire SearchInput Component
 *
 * Search input component with real-time search, debouncing, and result filtering.
 * Provides server-side search management and result handling.
 *
 * Usage:
 * <livewire:search-input wire:model.live.debounce.500ms="search" />
 */
class SearchInput extends Component
{
    /**
     * Search query
     *
     * @var string
     */
    public string $query = '';

    /**
     * Search results
     *
     * @var array
     */
    public array $results = [];

    /**
     * Whether search is loading
     *
     * @var bool
     */
    public bool $isLoading = false;

    /**
     * Input size: xs, sm, md, lg, xl
     *
     * @var string
     */
    public string $size = 'md';

    /**
     * Input variant: outline, filled, flushed
     *
     * @var string
     */
    public string $variant = 'outline';

    /**
     * Whether input is disabled
     *
     * @var bool
     */
    public bool $disabled = false;

    /**
     * Whether field is required
     *
     * @var bool
     */
    public bool $required = false;

    /**
     * Whether field has validation errors
     *
     * @var bool
     */
    public bool $invalid = false;

    /**
     * Whether field is read-only
     *
     * @var bool
     */
    public bool $readonly = false;

    /**
     * Placeholder text
     *
     * @var null|string
     */
    public ?string $placeholder = null;

    /**
     * Whether to show clear button
     *
     * @var bool
     */
    public bool $showClear = true;

    /**
     * Minimum characters to trigger search
     *
     * @var int
     */
    public int $minChars = 1;

    /**
     * Maximum results to display
     *
     * @var int
     */
    public int $maxResults = 10;

    /**
     * Whether results dropdown is open
     *
     * @var bool
     */
    public bool $isOpen = false;

    /**
     * Updated query
     *
     * @return void
     */
    public function updatedQuery(): void
    {
        if (strlen($this->query) < $this->minChars) {
            $this->results = [];
            $this->isOpen = false;

            return;
        }

        $this->isLoading = true;
        $this->isOpen = true;

        // Dispatch event for parent component to handle search
        $this->dispatch('search', query: $this->query);
    }

    /**
     * Set results
     *
     * @param array $results
     *
     * @return void
     */
    public function setResults(array $results): void
    {
        $this->results = array_slice($results, 0, $this->maxResults);
        $this->isLoading = false;
    }

    /**
     * Select result
     *
     * @param mixed $result
     *
     * @return void
     */
    public function selectResult(mixed $result): void
    {
        $this->query = $result['label'] ?? (string) $result;
        $this->results = [];
        $this->isOpen = false;

        $this->dispatch('result-selected', result: $result);
    }

    /**
     * Clear search
     *
     * @return void
     */
    public function clearSearch(): void
    {
        $this->query = '';
        $this->results = [];
        $this->isOpen = false;

        $this->dispatch('search-cleared');
    }

    /**
     * Open results dropdown
     *
     * @return void
     */
    public function openResults(): void
    {
        if (!empty($this->results)) {
            $this->isOpen = true;
        }
    }

    /**
     * Close results dropdown
     *
     * @return void
     */
    public function closeResults(): void
    {
        $this->isOpen = false;
    }

    /**
     * Get highlighted query
     *
     * @param string $text
     *
     * @return string
     */
    public function highlightQuery(string $text): string
    {
        if (empty($this->query)) {
            return $text;
        }

        $pattern = '/('.preg_quote($this->query, '/').')/i';

        return preg_replace($pattern, '<mark>$1</mark>', $text);
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('flowblade::livewire.search-input');
    }
}
