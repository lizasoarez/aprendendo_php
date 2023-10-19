<!--Autor: Lizandra Soares de Souza -->
<!--Data: 12 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->
<!--Exercício com uma versão que usa array_reverse -->


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
 <body>

    <h2><b>Módulo 3</b></h2>
      <h3><b>Aula 3- Comando "for" - Array ordem inversa</b></h3>

               <?php

               //Esse foi um jeito muito simples e curioso de resolver o problema,mas não é o correto

               $array1 =[10,20,30,40,50,60,70];
               $array2 = array_reverse($array1); 

                  for($i=0;$i<count($array2);$i++){             

                  echo "No índice [$i] o valor do array array1 é $array2[$i]";
                  echo "<br>";                  
               }
                  echo "<hr>";
                  echo "O valor de count(array1) é:".count($array2);

                  echo "<hr>";
                  echo "O primeiro elemento do array1 é: $array2[0]";
                  echo "<hr>";
               $ultimo = count($array2) -1;
                  echo "O último elemento do array1 é: $array2[$ultimo]";
                  echo "<br>";

              ?>

   <p><a href="index.php">Menu</a></p>   

 </body>
</html>
