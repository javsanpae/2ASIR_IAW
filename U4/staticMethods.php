<?php

use rectangle as GlobalRectangle;
use triangle as GlobalTriangle;

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
        static function howToArea() {
            return "In order to get the area of a rectangle, you have to multiply the length by the width of the rectangle.";
        }
        static function howToPerimeter() {
            return "In order to get the perimeter of a rectangle, you have to sum the length plus the width of the rectangle.";
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
        static function howToArea() {
            return "In order to get the area of a square, you have to pow by 2 the side of the square.";
        }
        static function howToPerimeter() {
            return "In order to get the perimeter of a square, you have to multiply 4 times the side of the square.";
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
        static function howToArea() {
            return "In order to get the area of a triangle, you have to multiply the height by half of the base.";
        }
        static function howToPerimeter() {
            return "In order to get the perimeter of a triangle, you have to multiply 3 times the side of the triangle.";
        }
    }


    echo rectangle::howToPerimeter();
    echo square::howToPerimeter();
    echo triangle::howToPerimeter();

    echo rectangle::howToArea();
    echo square::howToArea();
    echo triangle::howToArea();
?>