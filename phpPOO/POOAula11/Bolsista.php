<?php
require_once './Aluno.php';
class Bolsista extends Aluno{
    private $bolsa;
     public function renovarBolsa(){
         echo "Bolsa de ".$this->getNome()." sendo paga";
     }
     public function getBolsa() {
         return $this->bolsa;
     }

     public function setBolsa($bolsa): void {
         $this->bolsa = $bolsa;
     }
     
     public function pagarMensal() {
         echo "<p>".$this->getNome()." é bolsista, paga com desconto de ".$this->getBolsa()."%</p>";
     }


}
