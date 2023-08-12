<?php


namespace App\Libraries\Helpers;

class CurrencyHelper
{
    function rupiahFormat($value)
    {
        $result =  number_format($value, 0, ',', '.');
        return $result;
    }

    public static function toThousand($value)
    {
        return $value > 0 ? number_format($value, 0, ',', '.') : '-';
    }
}
