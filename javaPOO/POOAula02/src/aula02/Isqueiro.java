/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aula02;


public class Isqueiro {
    String tamanho;
    String cor;
    float medida;
    boolean aceso;
    String marca;
    int carga;
    void status(){
        System.out.println("Objeto ISQUEIRO!");
        System.out.println("Cor: " + this.cor);
        System.out.println("Marca: " + this.marca);
        System.out.println("Tamanho: " + this.tamanho);
        System.out.println("Medida: " + this.medida + "cm");
        System.out.println("Esta com carga em "+this.carga+"%");
    }
    
    void acender(){
        if(this.aceso == true){
            System.out.println("O Isqueiro esta aceso.");
        } else{
            System.out.println("Isqueiro apagado.");
        }
    }
    void aceso(){
        aceso = true;
    }
    void naoaceso(){
        aceso = false;
    }
}
