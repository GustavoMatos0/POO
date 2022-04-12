<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade,$altura,$peso;
    private $categoria, $vitora, $derrota, $empate;
    
    function apresentar(){
        print "<p>------------------------</p>";
        print "<p>O lutador: ".$this->getNome();
        print " veio de ".$this->getNacionalidade();
        print " tem ".$this->getIdade()." anos e pesa ". $this->getPeso()."Kg";
        print "<br>Ele tem " .$this->getVitora()." vitórias, ";
        print $this->getDerrota()." derrotas e ".$this->getEmpate()." empates.</p>";
        
    }
    function status(){
        print "<p>----------------------</p>";
        print "<p>" . $this->getNome() . " é um peso " . $this->getCategoria();
        print " e ja ganhou ". $this->getVitora()." vezes,";
        print " perdeu ". $this->getDerrota()." vezes e ";
        print " empatou ".$this->getEmpate()." vezes";
    }
    function ganharLuta(){
        $this->setVitora($this->getVitora()+1);
    }
    function perderLuta(){
        $this->setDerrota($this->getDerrota()+1);
    }
    function empatarLuta(){
        $this->setEmpate($this->getEmpate()+1);
    }
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitora, $derrota, $empate) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso); 
        $this->vitora = $vitora;
        $this->derrota = $derrota;
        $this->empate = $empate;
    }
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitora() {
        return $this->vitora;
    }

    public function getDerrota() {
        return $this->derrota;
    }

    public function getEmpate() {
        return $this->empate;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setAltura($altura): void {
        $this->altura = $altura;
    }

    public function setPeso($peso): void {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria(): void {
        if($this->getPeso()<52.2){
            $this->categoria = "Invalido";
        }elseif($this->getPeso()<=70.3){
            $this->categoria = "Leve";
        }elseif($this->getPeso()<=83.9){
            $this->categoria = "Médio";
        }elseif($this->getPeso()<= 120.2){
            $this->categoria = "Pesado";
        }else{
            $this->categoria = "Invalido";
        }
    }

    public function setVitora($vitora): void {
        $this->vitora = $vitora;
    }

    public function setDerrota($derrota): void {
        $this->derrota = $derrota;
    }

    public function setEmpate($empate): void {
        $this->empate = $empate;
    }



}
