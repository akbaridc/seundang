<?php


namespace App\Libraries\Helpers;

use Illuminate\Support\Str;

class RouteHelper
{
    public static function ImageUrlToDb($value)
    {
        return substr($value, strpos($value, "storage/") + 8, Str::length($value));
    }
}
