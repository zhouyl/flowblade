<?php

declare(strict_types=1);

namespace Flowblade\Livewire;

use Livewire\Component;
use Livewire\Attributes\Computed;
use Carbon\Carbon;

/**
 * Livewire Datepicker Component
 *
 * Enhanced datepicker component with date selection, validation, and formatting.
 * Provides server-side date management and validation.
 *
 * Usage:
 * <livewire:datepicker wire:model="selectedDate" />
 */
class Datepicker extends Component
{
    /**
     * Selected date
     *
     * @var string|null
     */
    public ?string $value = null;

    /**
     * Current month being displayed
     *
     * @var string
     */
    public string $currentMonth = '';

    /**
     * Date format
     *
     * @var string
     */
    public string $format = 'Y-m-d';

    /**
     * Display format
     *
     * @var string
     */
    public string $displayFormat = 'd/m/Y';

    /**
     * Minimum date (YYYY-MM-DD)
     *
     * @var string|null
     */
    public ?string $minDate = null;

    /**
     * Maximum date (YYYY-MM-DD)
     *
     * @var string|null
     */
    public ?string $maxDate = null;

    /**
     * Disabled dates (array of YYYY-MM-DD)
     *
     * @var array
     */
    public array $disabledDates = [];

    /**
     * Whether the datepicker is open
     *
     * @var bool
     */
    public bool $isOpen = false;

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
    public ?string $placeholder = 'Select a date';

    /**
     * Whether the datepicker is disabled
     *
     * @var bool
     */
    public bool $disabled = false;

    /**
     * Whether the datepicker is required
     *
     * @var bool
     */
    public bool $required = false;

    /**
     * Whether the datepicker has validation errors
     *
     * @var bool
     */
    public bool $invalid = false;

    /**
     * Error message text
     *
     * @var string|null
     */
    public ?string $errorText = null;

    /**
     * Mount the component
     *
     * @param string|null $value
     * @return void
     */
    public function mount(?string $value = null): void
    {
        $this->value = $value;
        $this->currentMonth = now()->format('Y-m');
    }

    /**
     * Toggle datepicker
     *
     * @return void
     */
    public function toggleDatepicker(): void
    {
        $this->isOpen = !$this->isOpen;
    }

    /**
     * Open datepicker
     *
     * @return void
     */
    public function openDatepicker(): void
    {
        $this->isOpen = true;
    }

    /**
     * Close datepicker
     *
     * @return void
     */
    public function closeDatepicker(): void
    {
        $this->isOpen = false;
    }

    /**
     * Select date
     *
     * @param string $date
     * @return void
     */
    public function selectDate(string $date): void
    {
        $this->value = $date;
        $this->closeDatepicker();
    }

    /**
     * Clear date
     *
     * @return void
     */
    public function clearDate(): void
    {
        $this->value = null;
    }

    /**
     * Go to previous month
     *
     * @return void
     */
    public function previousMonth(): void
    {
        $this->currentMonth = Carbon::createFromFormat('Y-m', $this->currentMonth)
            ->subMonth()
            ->format('Y-m');
    }

    /**
     * Go to next month
     *
     * @return void
     */
    public function nextMonth(): void
    {
        $this->currentMonth = Carbon::createFromFormat('Y-m', $this->currentMonth)
            ->addMonth()
            ->format('Y-m');
    }

    /**
     * Get calendar days for current month
     *
     * @return array
     */
    #[Computed]
    public function calendarDays(): array
    {
        $date = Carbon::createFromFormat('Y-m', $this->currentMonth);
        $firstDay = $date->copy()->startOfMonth();
        $lastDay = $date->copy()->endOfMonth();

        $days = [];
        $currentDate = $firstDay->copy()->startOfWeek();

        while ($currentDate <= $lastDay) {
            $days[] = [
                'date' => $currentDate->format('Y-m-d'),
                'day' => $currentDate->day,
                'isCurrentMonth' => $currentDate->format('Y-m') === $this->currentMonth,
                'isSelected' => $currentDate->format('Y-m-d') === $this->value,
                'isDisabled' => $this->isDateDisabled($currentDate->format('Y-m-d')),
                'isToday' => $currentDate->isToday(),
            ];

            $currentDate->addDay();
        }

        return $days;
    }

    /**
     * Check if date is disabled
     *
     * @param string $date
     * @return bool
     */
    private function isDateDisabled(string $date): bool
    {
        if ($this->minDate && $date < $this->minDate) {
            return true;
        }

        if ($this->maxDate && $date > $this->maxDate) {
            return true;
        }

        return in_array($date, $this->disabledDates);
    }

    /**
     * Get formatted selected date
     *
     * @return string
     */
    #[Computed]
    public function formattedDate(): string
    {
        if (!$this->value) {
            return $this->placeholder ?? '';
        }

        return Carbon::createFromFormat('Y-m-d', $this->value)
            ->format($this->displayFormat);
    }

    /**
     * Render the component
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('flowblade::livewire.datepicker');
    }
}

