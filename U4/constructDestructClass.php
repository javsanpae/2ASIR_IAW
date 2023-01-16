<?php

    class constructDestruct {
        public $name;
        public $height;
        public $weight;

        function __construct($_name, $_height, $_weight) {
            $this -> name = $_name;
            $this -> height = $_height;
            $this -> weight = $_height;
        }

        public function imcCalculation() {
            return round($this -> weight / pow($this -> height, 2), 2);
        }
    }

?>