<?php
if (!function_exists('format_money')) {
    function format_money ($number, $dec_point = ".", $thousands_sep = ",")
    {
        $data = preg_replace("/\\".$dec_point."00$/", "", number_format($number, 2, $dec_point, $thousands_sep));
        return $data;
    }
}

?>
