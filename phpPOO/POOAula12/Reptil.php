<?php
require_once './Animal.php';
class Reptil extends Animal{
    private $corEscama;
    public function alimentar() {
        echo "Comendo Vegetais<br>";
    }

    public function emitirSom() {
        echo "Som de Reptil<br>";
    }

    public function locomover() {
        echo "Rastejando<br>";
    }
    public function getCorEscama() {
        return $this->corEscama;
    }

    public function setCorEscama($corEscama): void {
        $this->corEscama = $corEscama;
    }


}
