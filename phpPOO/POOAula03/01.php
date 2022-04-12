<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    <body>
        <PRE>
        <?php
          require_once 'caneta.php';
          $c1 = new Caneta();
          $c1->modelo = "BIC Cristal";
          $c1->cor = "Azul";
          //$c1->ponta = 0.5
          //$c1->carga = 99;
          //$c1->tampada = true;
          $c1->rabiscar();
          $c1->destampar();
          print_r($c1);
          ?>
        </PRE>
    </body>
</html>
