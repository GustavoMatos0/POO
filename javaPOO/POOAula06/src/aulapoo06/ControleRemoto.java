package aulapoo06;

public class ControleRemoto implements Contralador {
   private int volume;
   private boolean ligado;
   private boolean tocando;
   
   //Metodos Especiais

    public ControleRemoto() {
        this.volume = 50;
        this.ligado = true;
        this.tocando = false;
    }

    private int getVolume() {
        return volume;
    }

    private void setVolume(int volume) {
        this.volume = volume;
    }

    private boolean isLigado() {
        return ligado;
    }

    private void setLigado(boolean ligado) {
        this.ligado = ligado;
    }

    private boolean isTocando() {
        return tocando;
    }

    private void setTocando(boolean tocando) {
        this.tocando = tocando;
    }
   
    //Metodos Abstratos

    @Override
    public void ligar() {
        this.setLigado(true);
    }

    @Override
    public void desligar() {
        this.setLigado(false);
    }

    @Override
    public void abrirMenu() {
        System.out.println("MENU");
        System.out.println("Ligado: " + this.isLigado());
        System.out.println("Tocando: " + this.isTocando());
        System.out.print("Volume: " + this.getVolume()+" ");
        for (int c = 1; c <= this.getVolume(); c+=10){
            System.out.print("| ");
    }
        System.out.println("");
    }

    @Override
    public void fecharMenu() {
        System.out.println("Fechando Menu");
    }

    @Override
    public void maisVolume() {
        if (this.isLigado() && this.getVolume() < 100){
            this.setVolume(this.getVolume()+5);
        }else{
            System.out.println("Impossivel Aumentar Volume");
        }
    }

    @Override
    public void menosVolume() {
        if(this.isLigado() && this.getVolume() > 0){
            this.setVolume(this.getVolume()-5);
        } else{
            System.out.println("Impossivel Diminuir Volume");
        }
    }

    @Override
    public void ligarMudo() {
        if(this.isLigado() && this.getVolume()>0){
            this.setVolume(0);
        }
    }

    @Override
    public void desligarMudo() {
        if(this.isLigado() && this.getVolume() == 0){
            this.setVolume(50);
        }
    }

    @Override
    public void play() {
          if(this.isLigado() && !this.isTocando()){
              this.setTocando(true);
          }
    }

    @Override
    public void pause() {
     if(this.isLigado() && this.isTocando()){
         this.setTocando(false);
     }
    }
    
    
    
}
