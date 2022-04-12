<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body><pre>
            <?php
            require_once './Peixe.php';
            require_once './Mamifero.php';
            require_once './Reptil.php';
            require_once './Ave.php';
            $p1 = new Reptil();
            $p1->setIdade(12);
            $p1->setPeso(0.50);
            print_r($p1);
            $p1->locomover();
            $p1->emitirSom();
            $p1->alimentar();
            ?>
        </pre>
    </body>
</html>
