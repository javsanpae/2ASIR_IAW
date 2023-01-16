<?php

    abstract class flatFigure {
        public $name;

        public function __construct($_name) {
            $this -> name = $_name;
        }
        public function showName() {
            return $this -> name;
        }
        abstract public function returnArea();
        abstract public function returnPerimeter();
    }

    class rectangle extends flatFigure {
        public $length;
        public $width;

        function __construct($_name, $_length, $_width) {
            parent::__construct($_name);
            $this -> length = $_length;
            $this -> width = $_width;
        }
        function returnArea() {
            return $this -> length * $this -> width;
        }
        function returnPerimeter() {
            return $this -> length + $this -> width;
        }
    }

    class square extends flatFigure {
        public $side;
        
        function __construct($_name, $_side) {
            parent::__construct($_name);
            $this -> side = $_side;
        }
        function returnArea() {
            return pow($this -> side, 2);
        }
        function returnPerimeter() {
            return $this -> side * 4;
        }
    }

    class triangle extends flatFigure {
        public $base;
        public $height;
        public $side;

        function __construct($_name, $_base, $_height, $_side) {
            parent::__construct($_name);
            $this -> base = $_base;
            $this -> height = $_height;
            $this -> side = $_side;
        }
        function returnArea() {
            return 0.5 * $this -> base * $this -> height;
        }
        function returnPerimeter() {
            return 3 * $this -> side;
        }
    }

?>