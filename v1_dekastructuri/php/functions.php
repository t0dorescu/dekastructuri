<?php

    function t($key){
        global $languages;
        $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'ro';
        if (isset($languages[$key][$lang])) {
            return $languages[$key][$lang];
        } else {
            return $key;
        }
    };