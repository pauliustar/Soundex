<?php 

foreach($explode_fixed as $element) {
  $soundex_element[] = soundex($element);
}

foreach($explode_fixed as $key => $value){
    $soundex[] = array('soundex' => $soundex_element[$key], 'text' => $value);
}

