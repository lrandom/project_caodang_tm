<?php
if (!function_exists('formatMoney')) {
    function formatMoney ($number, $dec_point = ".", $thousands_sep = ",")
    {
        $data = preg_replace("/\\".$dec_point."00$/", "", number_format($number, 2, $dec_point, $thousands_sep));
        return '$'.$data;
    }
}

?>
