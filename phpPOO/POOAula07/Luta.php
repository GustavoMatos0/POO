<?php
require_once './Lutador.php';
class Luta {
    
   private $desafiado;
   private $desafiante;
   private $rounds;
   private $aprovada;
   
   public function marcarLuta($l1,$l2){
       if($l1->getCategoria()== $l2->getCategoria() && $l1 != $l2){
           $this->aprovada = true;
           $this->desafiado = $l1;
           $this->desafiante = $l2;
       }else{
           $this->aprovada = false;
           $this->desafiado = null;
           $this->desafiante = null;
           
       }
   }
   public function lutar(){
       if($this->aprovada){
           print "---DESAFIADO---<br>";
           $this->desafiado->apresentar();
           print "---DESAFIANTE---</br>";
           $this->desafiante->apresentar();
           $vencedor = rand(0,2);
           switch($vencedor){
               case 0:
                   print "<p>Empate</p>";
                   $this->desafiado->empatarLuta();
                   $this->desafiante->empatarLuta();
                   break;
               case 1:
                   print "<p>Vencedor: ". $this->desafiado->getNome()."</p>";
                   print "<p>Perdedor: ". $this->desafiante->getNome()."</p>";
                   $this->desafiado->ganharLuta();
                   $this->desafiante->perderLuta();
                   break;

               case 2:
                   print "<p>Vencedor ". $this->desafiante->getNome()."</p>";
                   print"<p>Perdedor ". $this->desafiado->getNome()."</p>";
                   $this->desafiado->perderLuta();
                   $this->desafiante->ganharLuta();
                   break;
               
           }
       }else{
           print "<p>Luta não pode acontecer!</p>";
       }
   }
   public function getDesafiado(): Lutador {
       return $this->desafiado;
   }

   public function getDesafiante(): Lutador {
       return $this->desafiante;
   }

   public function getRounds() {
       return $this->rounds;
   }

   public function getAprovada() {
       return $this->aprovada;
   }

   public function setDesafiado(Lutador $desafiado): void {
       $this->desafiado = $desafiado;
   }

   public function setDesafiante(Lutador $desafiante): void {
       $this->desafiante = $desafiante;
   }

   public function setRounds($rounds): void {
       $this->rounds = $rounds;
   }

   public function setAprovada($aprovada): void {
       $this->aprovada = $aprovada;
   }


}
