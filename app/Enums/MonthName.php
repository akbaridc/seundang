<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class MonthName extends Enum
{
    const JANUARY   = '1';
    const FEBRUARY  = '2';
    const MARCH     = '3';
    const APRIL     = '4';
    const MAY       = '5';
    const JUNE      = '6';
    const JULY      = '7';
    const AUGUST    = '8';
    const SEPTEMBER = '9';
    const OCTOBER   = '10';
    const NOVEMBER  = '11';
    const DECEMBER  = '12';

    public static function getDescription($value): string
    {
        $result = '';
        if ($value === self::JANUARY) {
            $result = 'Januari';
        } elseif ($value === self::FEBRUARY) {
            $result = 'Februari';
        } elseif ($value === self::MARCH) {
            $result = 'Maret';
        } elseif ($value === self::APRIL) {
            $result = 'April';
        } elseif ($value === self::MAY) {
            $result = 'Mei';
        } elseif ($value === self::JUNE) {
            $result = 'Juni';
        } elseif ($value === self::JULY) {
            $result = 'Juli';
        } elseif ($value === self::AUGUST) {
            $result = 'Agustus';
        } elseif ($value === self::SEPTEMBER) {
            $result = 'September';
        } elseif ($value === self::OCTOBER) {
            $result = 'Oktober';
        } elseif ($value === self::NOVEMBER) {
            $result = 'November';
        } elseif ($value === self::DECEMBER) {
            $result = 'Desember';
        }
        return $result;
    }

    public static function getMonth($value): string
    {
        $result = '';
        if ($value === 'Januari') {
            $result = '01';
        } elseif ($value === 'Februari') {
            $result = '02';
        } elseif ($value === 'Maret') {
            $result = '03';
        } elseif ($value === 'April') {
            $result = '04';
        } elseif ($value === 'Mei') {
            $result = '05';
        } elseif ($value === 'Juni') {
            $result = '06';
        } elseif ($value === 'Juli') {
            $result = '07';
        } elseif ($value === 'Agustus') {
            $result = '08';
        } elseif ($value === 'September') {
            $result = '09';
        } elseif ($value === 'Oktober') {
            $result = '10';
        } elseif ($value === 'November') {
            $result = '11';
        } elseif ($value === 'Desember') {
            $result = '12';
        }
        return $result;
    }

    public static function getMonthName($value): string
    {
        $result = '';
        if ($value === '01') {
            $result = 'Januari';
        } elseif ($value === '02') {
            $result = 'Februari';
        } elseif ($value === '03') {
            $result = 'Maret';
        } elseif ($value === '04') {
            $result = 'April';
        } elseif ($value === '05') {
            $result = 'Mei';
        } elseif ($value === '06') {
            $result = 'Juni';
        } elseif ($value === '07') {
            $result = 'Juli';
        } elseif ($value === '08') {
            $result = 'Agustus';
        } elseif ($value === '09') {
            $result = 'September';
        } elseif ($value === '10') {
            $result = 'Oktober';
        } elseif ($value === '11') {
            $result = 'November';
        } elseif ($value === '12') {
            $result = 'Desember';
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
