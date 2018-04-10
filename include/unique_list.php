<?php

function top_founder($soundex_array, $most_used, $times_used, $top_place){
    $storage = array();
    foreach ($soundex_array as $key => $row){
        $top_index_id = 0;
 
        $array_soundex[$key] = $row['soundex'];
        $array_text[$key] = $row['text'];

        if($array_soundex[$key] === $most_used[$top_place]){
            if ($top_index_id < $times_used[$most_used[$top_place]]) {
                $top_soundex_id = array('id' => $array_soundex[$key]);
                $top_soundex_name = array('name' => $array_text[$key]);
                $top_index_id++;
                array_push($storage, $top_soundex_name['name']);
            }
            else if($top_index_id >= $times_used[$most_used[$top_place]]){
                $top_place++;
                $top_index_id = 0;
            }
        }
    }

    $top = array_unique($storage);
    foreach ($top as $single) {
    echo "<pre>";
    echo $single;
    echo "</pre>";
    }
}

for ($i=0; $i < 3 ; $i++) { 
    top_founder($soundex, $top_value, $values, $i);
}
