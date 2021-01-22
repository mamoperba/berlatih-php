<?php
    require_once ("animal.php");

    class frog extends Animal{
        public $legs = 4;
        public function jump()
        {
            echo "hop hop";
        }
    }
?>