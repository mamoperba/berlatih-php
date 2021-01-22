<?php
    class animal{
        public $name;
        public $legs = 2;
        public $cold_blood = 'false';

        public function __construct ($name){
            $this -> name = $name;
        }
    }
?>