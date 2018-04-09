<?php

foreach ($soundex as $key => $row){
    $top_index_id = 0;
    $top_value_amount = count($top_value);

    $max_value = array_count_values($soundex_element);
    rsort($max_value);

    $array_soundex[$key] = $row['soundex'];
    $array_text[$key] = $row['text'];

    if($array_soundex[$key] == $top_value[$top_index_id]){
        if ($top_index_id != $top_value_amount) {
                $top_soundex_id = array('id' => $array_soundex[$key]);
                $top_soundex_name = array('name' => $array_text[$key]);
                $top_index_id++;
                echo "<pre>";
                echo "New element found = " . $top_soundex_name['name'] . " with Soundex id = " . $top_soundex_id['id']; 
                echo "</pre>";
        }
    }
}

/*
 if(in_array($array_soundex[$key], $top_soundex_name)){
                echo "Element is already in top array";
            }
*/