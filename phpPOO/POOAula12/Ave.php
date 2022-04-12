<?php
require_once './Animal.php';
class Ave extends Animal{
    private $corPena;
    
    public function alimentar() {
        echo "Comendo Frutas<br>";
    }

    public function emitirSom() {
        echo "Som de Ave<br>";
    }

    public function locomover() {
        echo "Voando<br>";
    }
    public function getCorPena() {
        return $this->corPena;
    }

    public function setCorPena($corPena): void {
        $this->corPena = $corPena;
    }
    
    public function contruirNinho(){
        echo "Contruindo Ninho<br>";
    }


}
