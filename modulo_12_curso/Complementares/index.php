<?php
    /* class Calculadora{
        public function somar($a, $b){
            return $a + $b;
        }
        public function dividir($a, $b){
            return $a / $b;
        }

        public function multiplicar($a, $b){
            return $a * $b;
        }

        public function subtrair($a, $b){
            return $a - $b;
        }
    }

    $calculos = new Calculadora();
    Echo $calculos->multiplicar(10,30) ."<br>";
    Echo $calculos->dividir(10,5)."<br>";
    Echo $calculos->subtrair(10,2)."<br>";
    Echo $calculos->somar(10,30)."<br>"; 

    class Task{
        public $title;
        public $description;
        public $completed;

        public function markAsCompleted(){
            $this->completed = true;
        }
        public function markAsIncomplete(){
            $this->completed = false;
        }
        public function getTitle(){
            return $this->title;
        }
        public function getDescription(){
            return $this->description;
        }   
        public function isCompleted(){
            return $this->completed;
        }
    }

    $chamada = new Task	();
    $chamada->title = "O Rato que roeu";
    $chamada->description = "é sobre um rato que roeu a roupa do rei de roma";
    $chamada->completed = true;

    $chamada->markAsIncompleted();
    echo $chamada->isCompleted()? "Verdade" : "falso";


    class Contact
    {
        public $name;
        public $email;
        public $phone;

        public function getName(){
            return $this->name;
        }
        public function getEmail(){
            return $this->email;
        }
        public function getPhone(){
            return $this->phone;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setPhone($phone){
            $this->phone = $phone;
        }

    }

    $contato = new Contact();
    $contato->name = "Danilo";
    $contato->email = "DanilinhodaZl@gmail.com";
    $contato->phone = "11952377610";

    Echo $contato->name . "<br>";
    Echo $contato->email . "<br>"; 
    Echo $contato->phone . "<br>";

    $contato->setEmail("DanilinhoSUrfistinho@ig.com");
    $contato->setPhone("119983825874");
    Echo $contato->email . "<br>"; 
    Echo $contato->phone . "<br>";*/



     class Passenger{    
        public $name;
        public $age;
        public $seatNumber;

        public function getName(){
            return $this->name;
        }
        public function getAge(){
            return $this->age;
        }
        public function getSeatNumber(){
            return $this->seatNumber;
        }   
        public function setSeatNumber($seatNumber){
            $this->seatNumber = $seatNumber;
        }
     }

     $passageiro = new Passenger();
     $passageiro->name = "Danilo";
     $passageiro->age = 29;
     $passageiro->seatNumber = "255";

     echo $passageiro->getName() . "<br>";
     echo $passageiro->getAge() . "<br>";
     echo $passageiro->getSeatNumber() . "<br>";
    

     $passageiro->setSeatNumber("366");

     echo $passageiro->getSeatNumber() . "<br>";











?>