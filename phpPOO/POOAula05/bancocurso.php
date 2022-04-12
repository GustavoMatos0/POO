<<?php

class bancocurso {
    
    //Atributos
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;
    
    
    //Metodos
    public function abrirConta($t){
        $this->setTipo($t);
        $this->setStatus(true);
        if($t == "CC"){
            $this->setSaldo(50);
        }elseif($t == "CP"){
            $this->setSaldo(150);
        }
    }
    public function fecharConta(){
        if($this->getSaldo()>0){
            echo "Conta com dinheiro</br>";
        }elseif($this->getSaldo()<0){
            echo "Conta com débito</br>";
        }else{
            $this->setStatus(false);
        }
    }
    public function depositar($v){
        if($this->getStatus()){
            $this->setSaldo($this->getSaldo() + $v);
        }else{
            echo "Conta Inativa</br>";
        }
    }
    public function sacar($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo($this->getSaldo() - $v);
            }else {
                echo "Saldo insuficiente</br>";
            }
        }else{
                echo "Conta Inativa</br>";
            }
    }
    public function pagarMensal(){
        if ($this->getTipo()=="CC"){
            $v = 12;
        }else if ($this->getTipo()=="CP"){
            $v=20;
        }
        if ($this->getStatus()){
            $this->setSaldo($this->getSaldo()-$v);
        } else {
            echo "ERRO</br>";
        }
    }
    
    //Metodos Especiais
    public function __construct() {
       $this->setSaldo(0);
       $this->setStatus(false);
       echo "<br/>";
    }
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setDono($dono): void {
        $this->dono = $dono;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }


}
?>
