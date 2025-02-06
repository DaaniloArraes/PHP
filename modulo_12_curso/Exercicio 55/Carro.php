<?php

    class Carro
    {
        private $id;
        private $name;
        private $color;
        private $width;
        public function __construct($id, $name, $color, $width){
            $this->id = $id;
            $this->name = $name;
            $this->color = $color;
            $this->width = $width;
        }
        public function getId(){
            return $this->id;
        }
        public function getName(){
            return $this->name;
        }
        public function getColor(){
            return $this->color;
        }
        public function getWidth(){
            return $this->width;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function setName($name){ 
            $this->name = $name;
        }
        public function setColor($color){
            $this->color = $color;
        }
        public function setWidth($width){
            $this->width = $width;
        }
    }

    $mitsubshi = new Carro(500, "Mitsubish", "Preta", 1.90);

    echo "Isto é um teste de programaçao voltada a objetos, que utiliza o carro" 
        .$mitsubshi->getName().
        ", com o ID de "
        .$mitsubshi->getId().
        ", de cor " 
        .$mitsubshi->getColor(). " <br>";

    $mitsubshi->setColor("Verde");
    $mitsubshi->setId(50 );
    
    echo "Isto é um teste de programaçao voltada a objetos, que utiliza o carro" 
        .$mitsubshi->getName().
        ", com o ID de "
        .$mitsubshi->getId().
        ", de cor " 
        .$mitsubshi->getColor(). " <br>";


?>
