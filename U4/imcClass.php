<?php
    class IMC {
        public $name;
        public $height;
        public $weight;
        public function imcCalculation() {
            return round($this -> weight / pow($this -> height, 2), 2);
        }
        public function assignName($inputName) {
            $this -> name = $inputName;
        }
        public function assignHeight($inputHeight) {
            $this -> height = $inputHeight;
        }
        public function assignWeight($inputWeight) {
            $this -> weight = $inputWeight;
        }
    }
?>