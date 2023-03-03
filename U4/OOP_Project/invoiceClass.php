<?php

    abstract class main {
        public $name;
        public $nif;
        public $address;

        function __construct($_name, $_nif, $_address) {
            $this -> name = $_name;
            $this -> nif = $_nif;
            $this -> address = $_address;
        }
        function giveName() {
            return $this -> name;
        }
        function giveNIF() {
            return $this -> nif;
        }
        function giveAddr() {
            return $this -> address;
        }

    }

    class invoice extends main {
        public $invNum;
        public $invDate;
        public $serv;
        public $priceNOIVA;

        function __construct($_name, $_nif, $_address, $_invNum, $_invDate, $_serv, $_priceNOIVA) {
            parent::__construct($_name, $_nif, $_address);             
            $this -> invNum = $_invNum;
            $this -> invDate = $_invDate;
            $this -> serv = $_serv;
            $this -> priceNOIVA = $_priceNOIVA;
        }
        function giveInvNum() {
            return $this -> invNum;
        }
        function giveInvDate() {
            return $this -> invDate;
        }
        function giveServ() {
            return $this -> serv;
        }
        function givePriceNoIVA() {
            return $this -> priceNOIVA;
        }
    }

    class plumbing extends main {
        public $increase;
        function __construct($_name, $_nif, $_address, $_increase) {
            parent::__construct($_name, $_nif, $_address);
            $this -> increase = $_increase;
        }
        function giveIncr() {
            return $this -> increase;
        }
    }

    $plumbing = new plumbing('Titanic', '12345678A', '22nd Granola St (Silleiro, Pontevedra)', 10);

?>