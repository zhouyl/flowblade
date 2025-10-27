<?php

declare(strict_types=1);

namespace Mellivora\Flowblade\Components\Navigation;

use Illuminate\View\Component;

/**
 * Pagination Component
 *
 * Pagination component for navigating through pages
 */
class Pagination extends Component
{
    /**
     * Create a new component instance
     *
     * @param string      $variant      Variant: simple, default, verbose
     * @param string      $size         Size: xs, sm, md, lg, xl
     * @param int         $currentPage  Current page number
     * @param int         $totalPages   Total number of pages
     * @param int         $total        Total number of items (for verbose variant)
     * @param int         $perPage      Items per page (for verbose variant)
     * @param null|string $prevLabel    Previous button label
     * @param null|string $nextLabel    Next button label
     * @param bool        $showEdges    Show first/last page buttons
     * @param int         $siblingCount Number of sibling pages to show
     */
    public function __construct(
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
    }

    /**
     * Get page range to display
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
     * Get start item number
     */
    public function getStartItem(): int
    {
        return ($this->currentPage - 1) * $this->perPage + 1;
    }

    /**
     * Get end item number
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
