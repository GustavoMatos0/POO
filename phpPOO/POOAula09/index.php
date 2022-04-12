<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            require_once './Pessoa.php';
            require_once './Livro.php';
            $p[0] = new Pessoa("Pedro", 22, "H");
            $p[1] = new Pessoa("Maria", 31, "M");

            $l[0] = new Livro("PHP Basico", "João da Silva", 300, $p[0]);
            $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[1]);
            $l[2] = new Livro("PHP Avançado", "Ana Pauça", 800, $p[1]);
            $l[1]->folhear(300);
            $l[1]->voltarPag();
            $l[1]->voltarPag();
            $l[1]->detalhe();
            
            ?>
        </pre>
    </body>
</html>
