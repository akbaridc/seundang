<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class IsActive extends Enum
{
    const NONACTIVE = 0;
    const ACTIVE = 1;

    public static function getDescription($value): string
    {
        $result = '';
        if ($value === self::NONACTIVE) {
            $result = 'Tidak Aktif';
        } elseif ($value === self::ACTIVE) {
            $result = 'Aktif';
        }
        return $result;
    }

    public static function asOptions()
    {
        $options = [];
        foreach (self::asSelectArray() as $key => $value) {
            array_push($options, ['value' => strval($key), 'label' => $value]);
        }
        return $options;
    }
}
