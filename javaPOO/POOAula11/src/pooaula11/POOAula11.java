package pooaula11;

public class POOAula11 {

    public static void main(String[] args) {
        /*Visitante v1 = new Visitante();
        v1.setNome("Joao");
        v1.setSexo("M");
        v1.setIdade(22);
        System.out.println(v1.toString());
        
        Aluno a1 = new Aluno();
        a1.setNome("Claudio");
        a1.setMatricula(1111);
        a1.setCurso("Informatica");
        a1.setIdade(16);
        a1.setSexo("M");
        a1.pagarMensalidade();
        System.out.println(a1.toString());
        System.out.println("");
        Bolsista b1 = new Bolsista();
        b1.setMatricula(1112);
        b1.setNome("Jubileu");
        b1.setBolsa(12.5f);
        b1.setSexo("M");
        b1.pagarMensalidade();
        System.out.println(b1.toString());*/
        Professor p1 = new Professor();
        p1.setNome("Felipe");
        p1.setIdade(33);
        p1.setSexo("M");
        p1.setSalario(2500);
        p1.setEspecialidade("T.1");
        System.out.println(p1.toString());
        System.out.println("Especialidade: "+p1.getEspecialidade());
        System.out.println("Salario atual de "+p1.getNome()+" é "+p1.mostrarSalario());
        System.out.println("Novo salario de "+p1.getNome()+" é "+p1.receberAumento(300)+"R$");
    }

}
