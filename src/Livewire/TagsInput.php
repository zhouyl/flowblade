<?php

declare(strict_types=1);

namespace Flowblade\Livewire;

use Livewire\Component;

/**
 * Livewire TagsInput Component
 *
 * Interactive input for adding and removing multiple tags with validation.
 * Provides server-side tag management and validation.
 *
 * Usage:
 * <livewire:tags-input wire:model="tags" />
 */
class TagsInput extends Component
{
    /**
     * Array of tags
     *
     * @var array
     */
    public array $tags = [];

    /**
     * Current input value
     *
     * @var string
     */
    public string $input = '';

    /**
     * Form input name for submitted data
     *
     * @var string
     */
    public string $name = 'tags';

    /**
     * Input size: xs, sm, md, lg
     *
     * @var string
     */
    public string $size = 'md';

    /**
     * Tag color: primary, secondary, success, warning, danger, info, gray
     *
     * @var string
     */
    public string $color = 'primary';

    /**
     * Placeholder text for input field
     *
     * @var string
     */
    public string $placeholder = 'Add a tag...';

    /**
     * Maximum number of tags allowed (null for unlimited)
     *
     * @var null|int
     */
    public ?int $maxTags = null;

    /**
     * Whether to allow duplicate tag values
     *
     * @var bool
     */
    public bool $allowDuplicates = false;

    /**
     * Whether input is disabled
     *
     * @var bool
     */
    public bool $disabled = false;

    /**
     * Whether input is read-only
     *
     * @var bool
     */
    public bool $readonly = false;

    /**
     * Character to auto-split input into tags (e.g., ',', ';')
     *
     * @var null|string
     */
    public ?string $separator = null;

    /**
     * Mount the component
     *
     * @param array $tags
     *
     * @return void
     */
    public function mount(array $tags = []): void
    {
        $this->tags = $tags;
    }

    /**
     * Add tag
     *
     * @return void
     */
    public function addTag(): void
    {
        $tag = trim($this->input);

        if (empty($tag)) {
            return;
        }

        // Check max tags limit
        if ($this->maxTags && count($this->tags) >= $this->maxTags) {
            return;
        }

        // Check duplicates
        if (!$this->allowDuplicates && in_array($tag, $this->tags)) {
            return;
        }

        $this->tags[] = $tag;
        $this->input = '';

        $this->dispatch('tags-updated', tags: $this->tags);
    }

    /**
     * Remove tag
     *
     * @param int $index
     *
     * @return void
     */
    public function removeTag(int $index): void
    {
        if (isset($this->tags[$index])) {
            unset($this->tags[$index]);
            $this->tags = array_values($this->tags);

            $this->dispatch('tags-updated', tags: $this->tags);
        }
    }

    /**
     * Clear all tags
     *
     * @return void
     */
    public function clearTags(): void
    {
        $this->tags = [];
        $this->input = '';

        $this->dispatch('tags-updated', tags: $this->tags);
    }

    /**
     * Handle input key down
     *
     * @param string $key
     *
     * @return void
     */
    public function handleKeyDown(string $key): void
    {
        if ($key === 'Enter') {
            $this->addTag();
        } elseif ($key === 'Backspace' && empty($this->input) && !empty($this->tags)) {
            array_pop($this->tags);
            $this->dispatch('tags-updated', tags: $this->tags);
        } elseif ($this->separator && str_contains($this->input, $this->separator)) {
            $parts = explode($this->separator, $this->input);

            foreach ($parts as $part) {
                $tag = trim($part);

                if (!empty($tag)) {
                    if ($this->maxTags && count($this->tags) >= $this->maxTags) {
                        break;
                    }

                    if (!$this->allowDuplicates && in_array($tag, $this->tags)) {
                        continue;
                    }
                    $this->tags[] = $tag;
                }
            }
            $this->input = '';
            $this->dispatch('tags-updated', tags: $this->tags);
        }
    }

    /**
     * Get remaining tag slots
     *
     * @return null|int
     */
    public function getRemainingSlots(): ?int
    {
        if (!$this->maxTags) {
            return null;
        }

        return max(0, $this->maxTags - count($this->tags));
    }

    /**
     * Check if max tags reached
     *
     * @return bool
     */
    public function isMaxTagsReached(): bool
    {
        return $this->maxTags && count($this->tags) >= $this->maxTags;
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('flowblade::livewire.tags-input');
    }
}
