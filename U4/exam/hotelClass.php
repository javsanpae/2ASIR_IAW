<?php

    class Reservation {
        public $hotelName = "Heaven Hotel";
        public $hotelLocation = "Foreshore Rd.";
        public $hotelCity = "Port Royal";
        public $hotelCountry = "Jamaica";
        
        const totalRoomsNum = 60;
        const _1adultPricePerNight = 92.50;
        const _2adultsPricePerNight = 150.45;
        const _2to17children = 30.60;
        const breakfastPerPersonPerDay = 10;
        const peoplePerRoom = 3;
        
        public $arrDate;
        public $depDate;
        public $cusName;
        public $roomsNumber;
        public $aduNumber;
        public $babyNumber;
        public $childNumber;
        public $breakfast;

        public function __construct($_arrDate, $_depDate, $_cusName, $_roomsNumber, $_aduNumber, $_babyNumber, $_childNumber, $_breakfast) {
            $this -> arrDate = $_arrDate;
            $this -> depDate = $_depDate;
            $this -> cusName = $_cusName;
            $this -> roomsNumber = $_roomsNumber;
            $this -> aduNumber = $_aduNumber;
            $this -> babyNumber = $_babyNumber;
            $this -> childNumber = $_childNumber;
            $this -> breakfast = $_breakfast;
        }

        public function numberOfDays() {
            $v1 = strtotime($this -> arrDate);
            $v2 = strtotime($this -> depDate);
            return ($v2-$v1)/86400;
        }


        public function totalPrice2() {
            if ($this -> aduNumber % $this -> roomsNumber != 0) {
                
            }
        }

        public function totalPrice() {
            $numberOfDays = $this -> numberOfDays();
            $roomsNumber = $this -> roomsNumber;
            $aduNumber = $this -> aduNumber;
            $babyNumber = $this -> babyNumber;
            $childNumber = $this -> childNumber;
            $totalPeople = $aduNumber+$babyNumber+$childNumber;
            $ppr = Reservation::peoplePerRoom;
            $_1adultRoom = 0;
            $_2adultsRoom = 0;

                                            // caso 1: mas de 2 adultos en una misma habitación
            if($aduNumber >= $ppr and $aduNumber / $roomsNumber > 2) {
                echo "Sorry, there can't be more than 2 adults in a single room; You have to be splitted.";
                for($_2adultsRoom = 0; $aduNumber=0; $_2adultsRoom++) {
                    if ($aduNumber == 1) {
                        $aduNumber--;
                        $_1adultRoom++;
                        break;
                    }
                    $aduNumber = $aduNumber - 2;
                    $_2adultsRoom++;
                }
            }

                                // caso 2: repartir adultos por cada niño que haya
            else if($aduNumber+$babyNumber+$childNumber > $ppr) {
                echo "Sorry, there can only be 2 adults and a child per room. In order to continue, we have to split the adults within the kids and babies.";
                $children = $babyNumber + $childNumber;
                for($_1adultRoom = 0; $aduNumber=0; $_1adultRoom++) {
                    if($aduNumber == 0 and $children > 0) {
                            // caso 2.1. no hay adultos para tanto niño
                        echo "Sorry, there aren't enough adults for that ammount of children.";
                    }
                    if($children == 0 and $aduNumber % 2 == 0) {
                        $_2adultsRoom++;
                        break;
                    }
                    if ($children == 0 and $aduNumber % 2 != 0) {
                        $_1adultRoom;
                        break;
                    }
                    $aduNumber--;
                    $children = $children - 2;
                }
            }

            else {
                if ($this -> aduNumber == 2 and $this -> roomsNumber == 1) {
                    $_2adultsRoom++;
                } else {
                    $_1adultRoom++;
                }
            }
            
            // ahora si, calculamos el valor final
            if ($_2adultsRoom != 0 and $_1adultRoom != 0) {
                return (($_2adultsRoom*Reservation::_2adultsPricePerNight)*($_1adultRoom*Reservation::_1adultPricePerNight))*$numberOfDays;
            } else if ($_2adultsRoom == 0) {
                return ($_1adultRoom*Reservation::_1adultPricePerNight)*$numberOfDays;
            } else {
                return ($_2adultsRoom*Reservation::_2adultsPricePerNight)*$numberOfDays;

            }

        }
    }




?>