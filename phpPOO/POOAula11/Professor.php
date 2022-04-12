<?php
require_once './Pessoa.php';
class Professor extends Pessoa{
    private $especial;
    private $salario;
     public final function receberAumento($a){
         $this->setSalario($this->getSalario()+ $a);
     }
     
     public final function mostrarSalario(){
         echo "<p>Salario atual de ".$this->getNome()." ".$this->getSalario()."</p>";
     }
     public function getEspecial() {
         return $this->especial;
     }

     public function getSalario() {
         return $this->salario;
     }

     public function setEspecial($especial): void {
         $this->especial = $especial;
     }

     public function setSalario($salario): void {
         $this->salario = $salario;
     }


}
