<?php

declare(strict_types=1);

namespace Flowblade\Components\Navigation;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Contracts\Pagination\Paginator as PaginatorContract;
use Illuminate\View\Component;

/**
 * Pagination Component
 *
 * Pagination navigation component for multi-page data sets.
 * Supports Laravel paginator integration and multiple visual variants.
 */
class Pagination extends Component
{
    /**
     * Create a new component instance
     *
     * @param null|LengthAwarePaginator|PaginatorContract $paginator    Laravel paginator instance (auto-extracts page info)
     * @param string                                      $variant      Visual variant: 'simple' (prev/next only), 'default' (numbered), 'verbose' (with item counts)
     * @param string                                      $size         Pagination size: 'xs', 'sm', 'md', 'lg', 'xl'
     * @param int                                         $currentPage  Current active page number
     * @param int                                         $totalPages   Total number of pages available
     * @param int                                         $total        Total number of items across all pages
     * @param int                                         $perPage      Number of items per page
     * @param null|string                                 $prevLabel    Custom label for previous button (null for default)
     * @param null|string                                 $nextLabel    Custom label for next button (null for default)
     * @param bool                                        $showEdges    Whether to show first/last page buttons
     * @param int                                         $siblingCount Number of page buttons to show on each side of current page
     */
    public function __construct(
        LengthAwarePaginator|PaginatorContract|null $paginator = null,
        public string $variant = 'default',
        public string $size = 'md',
        public int $currentPage = 1,
        public int $totalPages = 1,
        public int $total = 0,
        public int $perPage = 10,
        public ?string $prevLabel = null,
        public ?string $nextLabel = null,
        public bool $showEdges = true,
        public int $siblingCount = 1
    ) {
        // If paginator is provided, extract values from it
        if ($paginator !== null) {
            $this->currentPage = $paginator->currentPage();
            $this->perPage = $paginator->perPage();

            // LengthAwarePaginator has total() and lastPage() methods
            if ($paginator instanceof LengthAwarePaginator) {
                $this->total = $paginator->total();
                $this->totalPages = $paginator->lastPage();
            } else {
                // Simple Paginator doesn't know total, use hasMorePages()
                $this->totalPages = $paginator->hasMorePages() ? $this->currentPage + 1 : $this->currentPage;
                $this->total = 0;
            }
        }
    }

    /**
     * Get page range to display with ellipsis for large page counts
     *
     * @return array Array of page numbers and '...' for ellipsis
     */
    public function getPageRange(): array
    {
        if ($this->totalPages <= 7) {
            return range(1, $this->totalPages);
        }

        $leftSibling = max(1, $this->currentPage - $this->siblingCount);
        $rightSibling = min($this->totalPages, $this->currentPage + $this->siblingCount);

        $showLeftDots = $leftSibling > 2;
        $showRightDots = $rightSibling < $this->totalPages - 1;

        if (!$showLeftDots && $showRightDots) {
            $leftRange = range(1, 5);

            return [...$leftRange, '...', $this->totalPages];
        }

        if ($showLeftDots && !$showRightDots) {
            $rightRange = range($this->totalPages - 4, $this->totalPages);

            return [1, '...', ...$rightRange];
        }

        if ($showLeftDots && $showRightDots) {
            $middleRange = range($leftSibling, $rightSibling);

            return [1, '...', ...$middleRange, '...', $this->totalPages];
        }

        return range(1, $this->totalPages);
    }

    /**
     * Get start item number for current page
     *
     * @return int First item number on current page
     */
    public function getStartItem(): int
    {
        return ($this->currentPage - 1) * $this->perPage + 1;
    }

    /**
     * Get end item number for current page
     *
     * @return int Last item number on current page
     */
    public function getEndItem(): int
    {
        return min($this->currentPage * $this->perPage, $this->total);
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.navigation.pagination');
    }
}
