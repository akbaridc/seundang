<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class PaymentStatus extends Enum
{
    const WAITING       = "WAITING";
    const PAID          = "PAID";
    const NEED_CONFIRM  = "NEED_CONFIRM";
    const EXPIRED       = "EXPIRED";
    const REJECTED       = "REJECTED";

    public static function getDescription($value): string
    {
        $result = '';
        if ($value === self::WAITING) {
            $result = 'Menunggu Pembayaran';
        } elseif ($value === self::PAID) {
            $result = 'Sudah Dibayar';
        } elseif ($value === self::NEED_CONFIRM) {
            $result = 'Perlu Konfirmasi';
        } elseif ($value === self::EXPIRED) {
            $result = 'Kadaluarsa';
        } elseif ($value === self::REJECTED) {
            $result = 'Ditolak';
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
