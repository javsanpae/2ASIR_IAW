<?php
    class person {
        public $name;
        public $age;

        function showName() {
            return $this -> name;
        }
        function showAge() {
            return $this -> age;
        }
        function __construct($_name, $_age) {
            $this -> name = $_name;
            $this -> age = $_age;
        }
        function __destruct() {
            echo "<h1>Destructing...</h1>";
        }
    }
    
    class sportsman extends person {
        public $weight;
        public $height;

        function showWeight() {
            return $this -> weight;
        }
        function showHeight() {
            return $this -> height;
        }
        function __construct($_name, $_age, $_weight, $_height) {
            parent::__construct($_name, $_age);
            $this -> weight = $_weight;
            $this -> height = $_height;
        }
        function __destruct() {
            echo "<h2>Destructing...</h2>";
        }
    }
?>