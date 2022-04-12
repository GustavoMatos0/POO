package aula07poo;
public class Lutador {
    private String nome,categoria,nacionalidade;
    private int idade;
    private float peso, altura;
    private int vitoria,derrota,empate;
    
    
    public void apresentar(){
        System.out.println("--------------------------------");
        System.out.println("Apresentando o Lutador "+this.getNome());
        System.out.println("Nascionalidade: "+this.getNacionalidade());
        System.out.println("Idade: "+ this.getIdade()+" anos");
        System.out.println("Pesando: "+this.getPeso()+"Kg");
        System.out.println(this.getVitoria()+" Vitórias");
        System.out.println(this.getDerrota()+" Derrotas");
        System.out.println(this.getEmpate()+" Empates");
    }
    public void status(){
        System.out.println(this.getNome()+" é um peso "+this.getCategoria());
        System.out.println("Ganhou "+this.getVitoria()+" vezes");
        System.out.println("Perdeu "+this.getDerrota()+" vezes");
        System.out.println("Empatou "+this.getEmpate()+" vezes");
    }
    public void ganharLuta(){
        this.setVitoria(this.getVitoria()+1);
    }
    public void perderLuta(){
        this.setDerrota(this.getDerrota()+1);
    }
    public void empatarLuta(){
        this.setEmpate(this.getEmpate()+1);
    }

    public Lutador(String nome, String nacionalidade, int idade,float altura, float peso, int vitoria, int derrota, int empate) {
        this.nome = nome;
        this.nacionalidade = nacionalidade;
        this.idade = idade;
        this.altura = altura;
        this.setPeso(peso);
        this.vitoria = vitoria;
        this.derrota = derrota;
        this.empate = empate;
    }

    public String getNome() {
        return nome;
    }

    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getCategoria() {
        return categoria;
    }

    private void setCategoria() {
        if(this.getPeso()< 52.2){
            this.categoria = "Invalido";
        }else if(this.peso<= 70.3){
            this.categoria = "Leve";
        }else if(this.peso<= 83.9){
            this.categoria = "Médio";
        }else if(this.peso<= 120.2){
            this.categoria = "Pesado";
        }else{
            this.categoria = "Invalido";
        }
    }

    public String getNacionalidade() {
        return nacionalidade;
    }

    public void setNacionalidade(String nacionalidade) {
        this.nacionalidade = nacionalidade;
    }

    public int getIdade() {
        return idade;
    }

    public void setIdade(int idade) {
        this.idade = idade;
    }

    public float getPeso() {
        return peso;
    }

    public void setPeso(float peso) {
        this.peso = peso;
        this.setCategoria();
    }

    public int getVitoria() {
        return vitoria;
    }

    public void setVitoria(int vitoria) {
        this.vitoria = vitoria;
    }

    public int getDerrota() {
        return derrota;
    }

    public void setDerrota(int derrota) {
        this.derrota = derrota;
    }

    public int getEmpate() {
        return empate;
    }

    public void setEmpate(int empate) {
        this.empate = empate;
    }
    
}
