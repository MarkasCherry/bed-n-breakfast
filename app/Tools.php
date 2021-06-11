<?php

namespace App;

class Tools
{
    public static function displayPrice($price, $decimal = 2): string
    {
        return '¥' . number_format(round($price, 2), $decimal, '.', '');
    }
}
