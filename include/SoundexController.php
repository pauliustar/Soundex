<?php

	class SoundexController extends TextController
	{
		
		var $converted, $converted_array;
		function convert_soundex(){

			foreach($this->get_fix() as $element) {
			  $soundex_element[] = soundex($element);

			}

			foreach($this->get_fix() as $key => $value){
			    $soundex[] = array('soundex' => $soundex_element[$key], 'text' => $value);
			}

			$this->converted = $soundex_element;
			$this->converted_array = $soundex;

		}
		function get_converted(){

			return $this->converted;

		}
		function get_converted_array(){

			return $this->converted_array;
			
		}
	}