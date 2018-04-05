<?php

require 'include/text.php';

$clean_string = preg_replace('/[^A-Za-z0-9\-]/', " ", $string);
$explode = explode(' ', $clean_string);
$explode_fixed = array_filter($explode);
$soundex_element = array();
foreach($explode_fixed as $element) {
  $soundex_element[] = soundex($element);
}
$values = array_count_values($soundex_element);
arsort($values);
$top_soundex = array_slice((array_keys($values)), 0, 5, true);
foreach($top_soundex as $single) {
echo ("<pre>");
echo $single;
echo ("</pre>");
}
?>