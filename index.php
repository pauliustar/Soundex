<?php

require 'include/sample_text.php';
require 'include/explode_text.php';

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

$number_of_elements = count($explode_fixed);
for ($i=0; $i < $number_of_elements; $i++) { 
    echo("<pre>");
    echo "Word: " . $explode_fixed[$i] . " is a Soundex " . soundex($explode_fixed[$i]);
    echo("</pre>");
}
?>