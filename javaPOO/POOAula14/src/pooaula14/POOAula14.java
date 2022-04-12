package pooaula14;
public class POOAula14 {
    public static void main(String[] args) {
        Video v[] = new Video[3];
        v[0] = new Video("Aula 1 de POO");
        v[1] = new Video("Aula 12 de PHP");
        v[2] = new Video("Aula 10 de HTML");
        
        Gafanhoto g[] = new Gafanhoto[2];
        g[0] = new Gafanhoto("Jubileu","M",22,"juba");
        g[1] =  new Gafanhoto("Creuza","F",12,"creuzita");
        
        Visualizacao vis[] =new Visualizacao[5];
        vis[0] = new Visualizacao(g[0], v[2]);
        vis[0].avaliar(87.0f);
        System.out.println(vis[0].toString());
        System.out.println("");
        vis[1] = new Visualizacao(g[0],v[1]);
        vis[1].avaliar();
        System.out.println(vis[1].toString());

    }
    
}
