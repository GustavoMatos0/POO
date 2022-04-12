
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
            <?php
            require_once './Visitante.php';
            require_once './Aluno.php';
            require_once './Bolsista.php';
            require_once './Professor.php';
            /*$v1 = new Visitante();
            $v1->setNome("Juvenal");
            $v1->setSexo("M");
            $v1->setIdade(33);
            print_r($v1);
            $a1 = new Aluno();
            $a1->pagarMensal();
            $a1->setNome("Pedro");
            $a1->setMatricula(111111);
            $a1->setSexo("M");
            $a1->setIdade(16);
            $a1->setCurso("Informatica");
            print_r($a1);
            $b1 = new Bolsista();
            $b1->setMatricula(222);
            $b1->setNome("Jubileu");
            $b1->setBolsa(12.5);
            $b1->setCurso("Adm");
            $b1->setIdade(17);
            $b1->pagarMensal();
            print_r($b1);*/
            $p1 = new Professor();
            $p1->setNome("Felipe");
            $p1->setIdade(29);
            $p1->setSexo("M");
            $p1->setEspecial("T.I");
            $p1->setSalario(3000);
            $p1->mostrarSalario();
            $p1->receberAumento(300);
            print_r($p1);
            ?>
        </pre>
    </body>
</html>
