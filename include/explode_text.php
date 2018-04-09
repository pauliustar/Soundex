<?php

$clean_string_text = preg_replace('/[^\w\s]+/u', " ", $string);
$remove_numbers = preg_replace('/[0-9]+/', " ", $clean_string_text);
$explode_text = explode(' ', $remove_numbers);
$explode_fixed = array_values(array_map('strtolower', array_filter($explode_text)));
