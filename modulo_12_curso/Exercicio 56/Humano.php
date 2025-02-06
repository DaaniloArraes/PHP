<?php

    class Humano
    {
        public const OLHOS = 2;
        private $corDosOlhos;

        public function __construct(String $corDosOlhos){
            $this->corDosOlhos=$corDosOlhos;
        }
        public function getCorDosOlhos(): String{
            return $this->corDosOlhos;
        }
        protected function setCorDosOlhos(String $corDosOlhos): void{
            $this->corDosOlhos=$corDosOlhos;
        }


    }

    class Professor extends Humano 
    {
        public function alterarCorDosOlhos($cor){
            $this->setCorDosOlhos($cor);
        }

    }
    $dema = new Professor("Verde");
    echo $dema->getCorDosOlhos() . "<br>";

    $dema->alterarCorDosOlhos("Vermelho");

    echo $dema->getCorDosOlhos() . "<br>";
