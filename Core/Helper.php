<?php

if (!function_exists('dd')) {
    function dd(...$vars){
        echo '<pre>';
        foreach ($vars as $var) {
            var_dump($var);
        }
        echo '</pre>';
        exit;
    }
}