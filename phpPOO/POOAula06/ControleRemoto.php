<?php
require_once './Controlador.php';
class ControleRemoto implements Controlador {
    private $volume;
    private $ligado;
    private $tocando;
    
    //Metodos Especiais
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }
    private function getVolume() {
        return $this->volume;
    }

    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function setVolume($volume): void {
        $this->volume = $volume;
    }

    private function setLigado($ligado): void {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando): void {
        $this->tocando = $tocando;
    }

    public function abrirMenu() {
        print "<br>MENU";
        print "<br>Ligado: " . $this->getLigado();
        print "<br>Tocando: " . $this->getTocando();
        print "<br>Volume: " . $this->getVolume();
        for ($c = 1; $c <= $this->getVolume(); $c+=10){
            print "<b> |</b>";
        }
        print "<br>";
    }
    public function desligar() {
        $this->setLigado(false);
    }

    public function desligarMudo() {
        if($this->getLigado()&& $this->getVolume()<=0){
            $this->setVolume(50);
       
        }   
        }

    public function fecharMenu() {
        print "<br>Fechando MENU";
    }

    public function ligar() {
        $this->setLigado(true);
    }

    public function ligarMudo() {
        if($this->getLigado()&& $this->getVolume()> 0){
            $this->setVolume(0);
        }
    }

    public function maisVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()+5);
            }else{
                print "<br>ERRO! Nao posso aumentar o volume";      
                }
    }

    public function menosVolume() {
        if($this->getLigado()){
            $this->setVolume($this->getVolume()-5);
           }else{
               print "<br>ERRO! Nao posso diminuir o volume";
           }
    }

    public function pause() {
        if($this->getLigado() && !$this->getTocando()){
            $this->setTocando(false);
        }
    }

    public function play() {
        if($this->getLigado()&& $this->getTocando()){
            $this->setTocando(true);
        }
    }

}
