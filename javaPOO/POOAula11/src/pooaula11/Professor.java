package pooaula11;
public class Professor extends Aluno{
    private String especialidade;
    private float salario;

    public String getEspecialidade() {
        return especialidade;
    }

    public void setEspecialidade(String especialidade) {
        this.especialidade = especialidade;
    }

    public float getSalario() {
        return salario;
    }

    public void setSalario(float salario) {
        this.salario = salario;
    }
    
    public float mostrarSalario(){
        return this.salario;
    }
    
    public float receberAumento(float a){
        this.setSalario(this.getSalario()+a);
        return this.salario;
    }    
}
