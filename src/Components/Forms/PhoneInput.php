<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Flowblade\Components\Component;
use Flowblade\Support\ComponentHelper;
use Flowblade\Traits\HasStyleProps;

/**
 * PhoneInput Component
 *
 * International phone number input with country code dropdown selector.
 * Includes popular countries with dial codes and flag emojis.
 */
class PhoneInput extends Component
{
    use HasStyleProps;

    /**
     * Create a new component instance
     *
     * @param string $size           Input size: 'sm', 'md', 'lg'
     * @param string $defaultCountry default country code (ISO 3166-1 alpha-2): 'US', 'GB', 'CN', etc
     * @param bool   $disabled       Whether input is disabled
     * @param bool   $invalid        Whether input has validation error
     * @param string $placeholder    Placeholder text for phone number
     * @param string $id             Input element ID (auto-generated if empty)
     * @param mixed  ...$styleProps  All style props (p, m, bg, color, w, h, etc.)
     */
    public function __construct(
        public string $size = 'md',
        public string $defaultCountry = 'US',
        public bool $disabled = false,
        public bool $invalid = false,
        public string $placeholder = '',
        public string $id = '',
        ...$styleProps
    ) {
        if (empty($this->id)) {
            $this->id = 'phone-input-'.uniqid();
        }

        $this->setStyleProps($styleProps);
    }

    /**
     * Get the component classes
     */
    public function classes(): string
    {
        $classes = [];

        // Style props
        $styleClasses = $this->parseStyleProps();

        if ($styleClasses) {
            $classes[] = $styleClasses;
        }

        return ComponentHelper::mergeClasses(...$classes);
    }

    /**
     * Get countries with their dial codes and flag emojis from config
     *
     * @return array<string, array{name: string, code: string, flag: string}>
     */
    public function getCountries(): array
    {
        // Load countries from config file
        $configPath = __DIR__ . '/../../../config/flowblade/countries.php';

        if (file_exists($configPath)) {
            $config = require $configPath;
            return $config['countries'] ?? [];
        }

        // Fallback to a minimal list if config file is not found
        return [
            'US' => ['name' => 'United States', 'code' => '+1', 'flag' => '🇺🇸'],
            'GB' => ['name' => 'United Kingdom', 'code' => '+44', 'flag' => '🇬🇧'],
            'CN' => ['name' => 'China', 'code' => '+86', 'flag' => '🇨🇳'],
        ];
    }

    /**
     * Get the view / contents that represent the component
     */
    public function render()
    {
        return view('flowblade::components.forms.phone-input');
    }
}
