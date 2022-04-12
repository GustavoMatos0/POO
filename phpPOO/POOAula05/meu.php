<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'bancomeu.php';
        $c1 = new bancomeu();
        $c1->abrirConta("CC");
        $c1->setNome("Gustavo");
        $c1->setNumConta(666666666666);
        print_r($c1);
        $c1->depositar(500);
        print_r($c1);
        $c1->pagarMensal();
        print_r($c1);
        $c1->sacar(538);
        print_r($c1);
        $c1->fecharConta();
        print_r($c1);
        $c2 = new bancomeu();
        print_r($c2);
        ?>
        </pre>
    </body>
</html>
