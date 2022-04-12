<?php
require_once './Pessoa.php';
class Aluno extends Pessoa{
    private $matricula;
    private $curso;
    
    public function pagarMensal(){
        echo "<p>Pagando mensalidade do aluno "."<strong>".$this->getNome()."</strong></p>";
    }
    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatricula($matricula): void {
        $this->matricula = $matricula;
    }

    public function setCurso($curso): void {
        $this->curso = $curso;
    }


}
