<?php

abstract class Pessoa {

    protected $nome, $sexo;
    protected $idade;
    protected $exp;
    
    public function __construct($nome, $idade,$sexo) {
        $this->nome = $nome;
        $this->sexo = $sexo;
        $this->idade = $idade;
        $this->exp = 0;
    }

    
    protected function ganharXp($n) {
        $this->exp += $n;
    }

    
    public function getNome() {
        return $this->nome;
    }

    public function getSexo() {
        return $this->sexo;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getExp() {
        return $this->exp;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setSexo($sexo): void {
        $this->sexo = $sexo;
    }

    public function setIdade($idade): void {
        $this->idade = $idade;
    }

    public function setExp($exp): void {
        $this->exp = $exp;
    }

}
