<?php
    class Cachorro
    {
        private $nome;
        private $raca;
        private $idade;
        
        public function __construct($nome, $raca, $idade){
            $this->nome = $nome;
            $this->raca = $raca;
            $this->idade = $idade;
        }
        public function getNome(){
            return $this->nome;
        }
        public function getRaca(){
            return $this->raca;
        }
        public function getidade(){
            return $this->idade;
        }
        public function setnome($nome){
            $this->nome = $nome;
        }
        public function setRaca($raca){
            $this->raca = $raca;
        }
        public function setidade($idade){
            $this->idade = $idade;
        }

        public function adocao() {
            echo "Esse é o $this->nome, da raça $this->raca, e tem $this->idade anos";
        }
    }

    $caramelo = new Cachorro("Caramelo", "Viralata", 10);
    $caramelo->adocao();

?>

