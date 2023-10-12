<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
 <body>

    <h2><b>Módulo 3</b></h2>
       <h3><b>Aula 2 - Comando "for"</b></h3>

               <?php

               $array1 =[10,20,30,40,50,60,70];
                  for($i=0;$i<count($array1);$i++){             

                  echo "No índice [$i] o valor do array array1 é $array1[$i]";
                  echo "<br>";                  
               }
                  echo "<hr>";
                  echo "O valor de count(array1) é:".count($array1);

                  echo "<hr>";
                  echo "O primeiro elemento do array1 é: $array1[0]";
                  echo "<hr>";
               $ultimo = count($array1) -1;
                  echo "O último elemento do array1 é: $array1[$ultimo]";
                  echo "<br>";

              ?>

    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
