<?php
    class Car{
        private $id;
        private $brand;
        private $km;
        private $color;

        /*public function __construct($id, $brand, $km, $color){
            $this->id = $id; 
            $this->brand = $brand;
            $this->km = $km;
            $this->color = $color;
        }*/
        public function getId(){
            return $this->id;
        }
        public function getBrand(){
            return $this->brand;
        }
        public function getKm(){
            return $this->km;
        }
        public function getColor(){
            return $this->color;
        }   
        public function setId($id){
            $this->id = $id;
        }
        public function setBrand($brand){
            $this->brand = $brand;
        }
        public function setKm($km){
            $this->km = $km;
        }
        public function setColor($color){
            $this->color = $color;
        }


    }

    interface CarDAOInterface{
        public function create(Car $car);
        public function findAll();
    }
?>