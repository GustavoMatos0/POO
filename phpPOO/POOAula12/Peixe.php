<?php
require_once './Animal.php';
class Peixe extends Animal{
    private $corEscama;
    
    public function alimentar() {
        echo "Comendo Substancias<br>";
    }

    public function emitirSom() {
        echo "Peixe nao faz som<br>";
    }

    public function locomover() {
        echo "Nadando<br>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }
    
    public function soltarBolha(){
        echo "Soltando Bolha<br>";
    }


}
