<?php

    class TextController
    {
        var $text, $formated_text;
        function set_text($new_text){

            $this->text = $new_text;

        }
        function get_text(){

            return $this->text;

        }
        function fix_text(){

            $clean_string_text = preg_replace('/[^\w\s]+/u', " ", $this->text);
            $remove_numbers = preg_replace('/[0-9]+/', " ", $clean_string_text);
            $explode_text = explode(' ', $remove_numbers);
            $remove_breaks = preg_replace( "/\r|\n/", "", $explode_text);
            $explode_fixed = array_values(array_map('strtolower', array_filter($remove_breaks)));
            $this->formated_text = $explode_fixed;

        }
        function get_fix(){

            return $this->formated_text;
            
        }
    }