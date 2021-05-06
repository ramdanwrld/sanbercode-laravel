<?php
    class Animal{
        public $name;
        public $cold_blooded="No";
        public $legs=4;
        public function __construct($string){
            $this->name = $string;
        }
    }
?>
