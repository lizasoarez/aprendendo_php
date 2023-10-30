<!--Autor: Lizandra Soares de Souza -->
<!--Data: 12 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
<body>

    <h2><b>Módulo 3</b></h2>
       <h3><b>Aula 9 - Operador OR</b></h3>

          <?php
               $array1 =[10,20,30,40,50,60];
               $teste1 =20;
               $teste2 =40;
               foreach($array1 as $elemento){
                print_r($elemento);
                if ($elemento ==$teste1){
                echo "(teste)";}
                if ($elemento ==$teste2){
                echo "(teste)";
                }
                echo "<br>";

               }

           ?>


    <p><a href="index.php">Menu</a></p>   

</body>
</html>
