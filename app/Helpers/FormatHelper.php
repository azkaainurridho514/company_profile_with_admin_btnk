<?php

use Carbon\Carbon;

if (!function_exists('format_datetime')) {
    /**
     * Format datetime dari Y-m-d H:i:s ke d F Y, H:i
     *
     * @param string $datetime
     * @param string $format
     * @return string
     */
    function format_datetime($datetime, $format = 'd F Y, H:i')
    {
        return Carbon::parse($datetime)->translatedFormat($format);
    }
}

if (!function_exists('formatWhatsapp')) {
    function formatWhatsapp($number) {
        return preg_replace('/^0/', '+62', $number);
    }
}
