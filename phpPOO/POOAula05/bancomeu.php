<?php

class bancomeu {
    public $numConta;
    protected $tipo;
    private $nome;
    private $saldo;
    private $status;
    private $mensal;
    
    public function __construct() {
        $this->saldo = 0;
        $this->status = false;
    }

        public function getTipo() {
        return $this->tipo;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSaldo($saldo): void {
        $this->saldo = $saldo;
    }

    public function setStatus($status): void {
        $this->status = $status;
    }

        
    public function getNumConta() {
        return $this->numConta;
    }

    public function setNumConta($numConta): void {
        $this->numConta = $numConta;
    }

    
    public function abrirConta($c){
        $this->setTipo($c);
        if($c == "CC"){
            $this->setStatus(true);
            $this->setSaldo(50);
        }else if($c == "CP"){
            $this->setStatus(true);
            $this->setSaldo(150);
        }else{
            echo "Operação invalida";
        }
                
    }
    
    public function fecharConta(){
        if($this->saldo == 0){
        $this->status = false;
        $this->nome = null;
        $this->numConta = null;
        $this->tipo = null;
        }else{
            echo "Operação Invalida";        }
    }
    
    public function depositar($n){
      if($this->getStatus()){
          $this->setSaldo($this->getSaldo()+$n);
      }else{
         echo "<p>ERRO! Metodo Depositar Invalido! Conta inativa!</p>";
      }  
    }
    
    public function sacar($n){
        if($this->getSaldo() && $this->getSaldo()>=$n){
            $this->setSaldo($this->getSaldo() - $n);
        }else{
            echo "<p>ERRO! Metodo Sacar invalido! Nao Contem saldo ou Conta Inativa</p>";
        }
    }
    
    public function pagarMensal(){
        if($this->getTipo()=="CC"){
            $this->mensal = 12; //12 reais
        }else if($this->getTipo()=="CP"){
            $this->mensal = 25;
        }else{
            echo "Operação invalida";
        }
        if($this->getStatus() && $this->getSaldo()>= $this->mensal){
           $this->setSaldo($this->getSaldo() - $this->mensal); 
        }else{
            echo "Impossivel pagar";
        }
    }
}
