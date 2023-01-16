<?php

    class persona{
        public $nombre;
        public $edad; 
        
        public function asignaNombre($nombre_){
        $this->nombre = $nombre_;
        }
        public function devuelveNombre(){
        return $this->nombre;
        }
        public function asignaEdad($edad_){
            $this->edad = $edad_;
        }
        public function devuelveEdad(){
            return $this->edad;
        }                            
    } 

?>