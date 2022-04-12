<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
         require_once 'bancocurso.php';
         $p1 = new bancocurso();
         $p2 = new bancocurso();
         $p1->abrirConta("CC");
         $p1->setNumConta(11111);
         $p1->setDono("Jubileu");
         $p2->abrirConta("CP");
         $p2->setDono("Cleusa");
         $p2->setNumConta(22222);
         
         $p1->depositar(300);
         $p2->depositar(500);
         
         $p2->sacar(1000);
         
         $p1->pagarMensal();
         $p2->pagarMensal();
         $p1->sacar(338);
         $p2->sacar(630);
         $p1->fecharConta();
         $p2->fecharConta();
         
         print_r($p1);
         print_r($p2);
        ?>
        </pre>
    </body>
</html>