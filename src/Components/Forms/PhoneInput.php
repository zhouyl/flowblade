<?php

declare(strict_types=1);

namespace Flowblade\Components\Forms;

use Illuminate\View\Component;

/**
 * PhoneInput Component
 *
 * International phone number input with country code dropdown selector.
 * Includes popular countries with dial codes and flag emojis.
 */
class PhoneInput extends Component
{
    /**
     * Create a new component instance
     *
     * @param string $size           Input size: 'sm', 'md', 'lg'
     * @param string $defaultCountry default country code (ISO 3166-1 alpha-2): 'US', 'GB', 'CN', etc
     * @param bool   $disabled       Whether input is disabled
     * @param bool   $invalid        Whether input has validation error
     * @param string $placeholder    Placeholder text for phone number
     * @param string $id             Input element ID (auto-generated if empty)
     */
    public function __construct(
        public string $size = 'md',
        public string $defaultCountry = 'US',
        public bool $disabled = false,
        public bool $invalid = false,
        public string $placeholder = '',
        public string $id = ''
    ) {
        if (empty($this->id)) {
            $this->id = 'phone-input-'.uniqid();
        }
    }

    /**
     * Get popular countries with their dial codes and flag emojis
     *
     * @return array<string, array{name: string, code: string, flag: string}>
     */
    public function getCountries(): array
    {
        return [
            'US' => ['name' => 'United States', 'code' => '+1', 'flag' => '🇺🇸'],
            'GB' => ['name' => 'United Kingdom', 'code' => '+44', 'flag' => '🇬🇧'],
            'CN' => ['name' => 'China', 'code' => '+86', 'flag' => '🇨🇳'],
            'IN' => ['name' => 'India', 'code' => '+91', 'flag' => '🇮🇳'],
            'CA' => ['name' => 'Canada', 'code' => '+1', 'flag' => '🇨🇦'],
            'AU' => ['name' => 'Australia', 'code' => '+61', 'flag' => '🇦🇺'],
            'DE' => ['name' => 'Germany', 'code' => '+49', 'flag' => '🇩🇪'],
            'FR' => ['name' => 'France', 'code' => '+33', 'flag' => '🇫🇷'],
            'JP' => ['name' => 'Japan', 'code' => '+81', 'flag' => '🇯🇵'],
            'KR' => ['name' => 'South Korea', 'code' => '+82', 'flag' => '🇰🇷'],
            'BR' => ['name' => 'Brazil', 'code' => '+55', 'flag' => '🇧🇷'],
            'MX' => ['name' => 'Mexico', 'code' => '+52', 'flag' => '🇲🇽'],
            'ES' => ['name' => 'Spain', 'code' => '+34', 'flag' => '🇪🇸'],
            'IT' => ['name' => 'Italy', 'code' => '+39', 'flag' => '🇮🇹'],
            'RU' => ['name' => 'Russia', 'code' => '+7', 'flag' => '🇷🇺'],
            'NL' => ['name' => 'Netherlands', 'code' => '+31', 'flag' => '🇳🇱'],
            'SE' => ['name' => 'Sweden', 'code' => '+46', 'flag' => '🇸🇪'],
            'NO' => ['name' => 'Norway', 'code' => '+47', 'flag' => '🇳🇴'],
            'DK' => ['name' => 'Denmark', 'code' => '+45', 'flag' => '🇩🇰'],
            'FI' => ['name' => 'Finland', 'code' => '+358', 'flag' => '🇫🇮'],
            'PL' => ['name' => 'Poland', 'code' => '+48', 'flag' => '🇵🇱'],
            'TR' => ['name' => 'Turkey', 'code' => '+90', 'flag' => '🇹🇷'],
            'SA' => ['name' => 'Saudi Arabia', 'code' => '+966', 'flag' => '🇸🇦'],
            'AE' => ['name' => 'UAE', 'code' => '+971', 'flag' => '🇦🇪'],
            'SG' => ['name' => 'Singapore', 'code' => '+65', 'flag' => '🇸🇬'],
            'MY' => ['name' => 'Malaysia', 'code' => '+60', 'flag' => '🇲🇾'],
            'TH' => ['name' => 'Thailand', 'code' => '+66', 'flag' => '🇹🇭'],
            'VN' => ['name' => 'Vietnam', 'code' => '+84', 'flag' => '🇻🇳'],
            'PH' => ['name' => 'Philippines', 'code' => '+63', 'flag' => '🇵🇭'],
            'ID' => ['name' => 'Indonesia', 'code' => '+62', 'flag' => '🇮🇩'],
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
