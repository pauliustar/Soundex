<?php

$values = array_count_values($soundex_element);
arsort($values);
$popular = array_slice(array_keys($values), 0, 5, true);

$index = 0;

foreach ($popular as $key) {
    $top_value[$index] = $key;
    $index++;
}