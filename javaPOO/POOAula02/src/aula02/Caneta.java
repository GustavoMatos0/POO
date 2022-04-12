/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aula02;

public class Caneta {
    String modelo;
    String cor;
    float ponta;
    int carga;
    boolean tampada;
    void status(){
        System.out.println("Modelo: " + this.modelo);
        System.out.println("Carga: " + this.carga);
        System.out.println("Tamanho da ponta: " + this.ponta);
        System.out.print("Uma caneta " + this.cor);
        System.out.println(" esta tampada? " + this.tampada);
        
    }
    void rabiscar(){
        if (this.tampada == true){
            System.out.println("ERRO! Não posso rabiscar");  
        } else{
            System.out.println("Estou Rabiscando");
        }
    }
    
    void tampar(){
        this.tampada = true;
    }
    
    void destampar(){
        this.tampada = false;
    }
}

