<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class GenderType extends Enum
{
    const MALE      = "MALE";
    const FEMALE    = "FEMALE";

    public static function getDescription($value): string
    {
        $result = '';
        if ($value === self::MALE) {
            $result = 'Laki - laki';
        } elseif ($value === self::FEMALE) {
            $result = 'Perempuan';
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
