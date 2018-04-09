<?php

foreach ($soundex as $key => $row){
    $top_index_id = 0;
    $top_index_text = 0;
    $counter = 0;
    $top_soundex_id = array();
    $top_soundex_name = array();

    $max_value = array_count_values($soundex_element);
    rsort($max_value);

    $array_soundex[$key] = $row['soundex'];
    $array_text[$key] = $row['text'];
    $top_soundex_name[$top_index_text] = $array_text[$key];
    if($array_soundex[$key] === $top_value[$top_index_id]){
        if(array_search($array_text[$key], $top_soundex_name, true) === false){
            $top_soundex_id[$top_index_id] = $array_soundex[$key];
            $top_soundex_name[$top_index_id] = $array_text[$key];
            $counter++;
            if ($counter >= $max_value[$top_index_id]) {
                $top_index_id++;
                $counter = 0;
            }
        }
    }
}

foreach ($top_soundex_name as $name) {
    echo "<pre>";
    echo $name;
    echo "</pre>";
}
