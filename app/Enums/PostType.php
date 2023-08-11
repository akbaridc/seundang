<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PostType extends Enum
{
    const FAQ               = 'FAQ';
    const HELP              = 'HELP';
    const PRIVACY_POLICY    = 'PRIVACY_POLICY';
    const TERM_CONDITION    = 'TERM_CONDITION';
    const YOUTUBE           = 'YOUTUBE';

    public static function getDescription($value): string
    {
        $result = '';
        if ($value === self::FAQ) {
            $result = 'FAQ';
        } elseif ($value === self::HELP) {
            $result = 'Bantuan';
        } elseif ($value === self::PRIVACY_POLICY) {
            $result = 'Kebijakan Privasi';
        } elseif ($value === self::YOUTUBE) {
            $result = 'Youtube';
        } elseif ($value === self::TERM_CONDITION) {
            $result = 'Term & Condition';
        }
        return $result;
    }

    public static function asOptions()
    {
        $options = [];
        foreach (self::asSelectArray() as $key => $value) {
            array_push($options, ['value' => $key, 'label' => $value]);
        }
        return $options;
    }
}
