<?php

require_once 'include/SoundexController.php';

	class SortingController extends SoundexController
	{
		var $sorted, $top_result;
		function sort(){

			$values = array_count_values($this->get_converted());
			arsort($values);
			$popular = array_slice(array_keys($values), 0, 5, true);

			foreach ($popular as $key) {
			    $top_value[] = $key;

			}

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

				    return $top;
				}

			for ($i=0; $i < 5 ; $i++) { 
			    $data[] = top_founder($this->get_converted_array(), $top_value, $values, $i);
			}

		$this->sorted = $data;
			
		}

		function sorted_top(){

			$i = 0;

			foreach ($this->sorted as $key => $value) {
			    foreach ($value as $key2 => $value2) {
			        if ($i < 5) {
			            $result[] = $value2;
			            $i++;
			        }
			        else
			            break;
			    }
			}

		$this->sorted_top = $result;

		}

		function get_top(){

			return $this->sorted_top;
		
		}
	}