/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package aula02;

/**
 *
 * @author User
 */
public class Aula02 {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
       /* Caneta c1 = new Caneta();
        c1.cor = "Azul";
        c1.ponta = 0.5f;
        c1.modelo = "BIC";
        c1.tampar();
        c1.status();
        c1.rabiscar();
        System.out.println("");
        
        Caneta c2 = new Caneta();
        c2.status();
        c2.cor = "Preta";
        c2.destampar();
        c2.rabiscar();
       */
       Isqueiro x1 = new Isqueiro();
       x1.cor = "Rosa";
       x1.carga = 50;
       x1.marca = "BIC";
       x1.medida = 2.5f;
       x1.tamanho = "Pequeno";
       x1.naoaceso();
       x1.status();
       x1.acender();
       
       System.out.println("");
        
       Isqueiro x2 = new Isqueiro();
       x2.cor = "Vermelho";
       x2.carga = 0;
       x2.marca = "Diabo";
       x2.tamanho = "Grande";
       x2.medida = 5f;
       x2.aceso();
       x2.status();
       
    }
    
}
