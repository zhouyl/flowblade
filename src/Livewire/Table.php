<?php

declare(strict_types=1);

namespace Flowblade\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;

/**
 * Livewire Table Component
 *
 * Enhanced table component with sorting, filtering, pagination, and row selection.
 * Provides server-side data management for large datasets.
 *
 * Usage:
 * <livewire:table :columns="['id', 'name', 'email']" :rows="$users" />
 */
class Table extends Component
{
    /**
     * Table columns to display
     *
     * @var array
     */
    public array $columns = [];

    /**
     * Table rows/data
     *
     * @var array
     */
    public array $rows = [];

    /**
     * Current sort column
     *
     * @var string|null
     */
    public ?string $sortBy = null;

    /**
     * Sort direction (asc or desc)
     *
     * @var string
     */
    public string $sortDirection = 'asc';

    /**
     * Current page number
     *
     * @var int
     */
    public int $currentPage = 1;

    /**
     * Items per page
     *
     * @var int
     */
    public int $perPage = 10;

    /**
     * Search query
     *
     * @var string
     */
    public string $search = '';

    /**
     * Selected row IDs
     *
     * @var array
     */
    public array $selectedRows = [];

    /**
     * Table size: xs, sm, md, lg, xl
     *
     * @var string
     */
    public string $size = 'md';

    /**
     * Table variant: simple, striped, bordered
     *
     * @var string
     */
    public string $variant = 'simple';

    /**
     * Enable row hover effect
     *
     * @var bool
     */
    public bool $hover = false;

    /**
     * Enable row selection
     *
     * @var bool
     */
    public bool $selectable = false;

    /**
     * Mount the component
     *
     * @param array $columns
     * @param array $rows
     * @return void
     */
    public function mount(array $columns = [], array $rows = []): void
    {
        $this->columns = $columns;
        $this->rows = $rows;
    }

    /**
     * Sort by column
     *
     * @param string $column
     * @return void
     */
    public function sortBy(string $column): void
    {
        if ($this->sortBy === $column) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortBy = $column;
            $this->sortDirection = 'asc';
        }

        $this->currentPage = 1;
    }

    /**
     * Toggle row selection
     *
     * @param mixed $rowId
     * @return void
     */
    public function toggleRow(mixed $rowId): void
    {
        if (in_array($rowId, $this->selectedRows)) {
            $this->selectedRows = array_filter(
                $this->selectedRows,
                fn($id) => $id !== $rowId
            );
        } else {
            $this->selectedRows[] = $rowId;
        }
    }

    /**
     * Select all rows
     *
     * @return void
     */
    public function selectAll(): void
    {
        $this->selectedRows = array_map(
            fn($row) => $row['id'] ?? null,
            $this->rows
        );
    }

    /**
     * Deselect all rows
     *
     * @return void
     */
    public function deselectAll(): void
    {
        $this->selectedRows = [];
    }

    /**
     * Go to page
     *
     * @param int $page
     * @return void
     */
    public function goToPage(int $page): void
    {
        $this->currentPage = max(1, $page);
    }

    /**
     * Get paginated rows
     *
     * @return array
     */
    #[Computed]
    public function paginatedRows(): array
    {
        $filtered = $this->filterRows();
        $sorted = $this->sortRows($filtered);

        $total = count($sorted);
        $start = ($this->currentPage - 1) * $this->perPage;

        return array_slice($sorted, $start, $this->perPage);
    }

    /**
     * Filter rows based on search query
     *
     * @param array $rows
     * @return array
     */
    private function filterRows(array $rows = []): array
    {
        if (empty($this->search)) {
            return $rows ?: $this->rows;
        }

        $search = strtolower($this->search);

        return array_filter(
            $rows ?: $this->rows,
            function ($row) use ($search) {
                foreach ($row as $value) {
                    if (str_contains(strtolower((string)$value), $search)) {
                        return true;
                    }
                }
                return false;
            }
        );
    }

    /**
     * Sort rows by column
     *
     * @param array $rows
     * @return array
     */
    private function sortRows(array $rows): array
    {
        if (!$this->sortBy) {
            return $rows;
        }

        usort($rows, function ($a, $b) {
            $aVal = $a[$this->sortBy] ?? null;
            $bVal = $b[$this->sortBy] ?? null;

            $comparison = $aVal <=> $bVal;

            return $this->sortDirection === 'asc' ? $comparison : -$comparison;
        });

        return $rows;
    }

    /**
     * Get total pages
     *
     * @return int
     */
    #[Computed]
    public function totalPages(): int
    {
        $total = count($this->filterRows());
        return (int)ceil($total / $this->perPage);
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('flowblade::livewire.table');
    }
}

