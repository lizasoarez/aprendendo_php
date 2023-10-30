<!--Autor: Lizandra Soares de Souza -->
<!--Data:22 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
<body>

    <h2><b>Módulo 3</b></h2>
       <h3><b>Aula 11 - Operadores AND e NOT</b></h3>

          <?php
               $array1 =[10,20,30,40,50,10,60,2,110,40,20,120,9,1000];
               $testar= true;             
              
               foreach($array1 as $elemento){
                print_r($elemento);
                if (($testar)&&($elemento > 100)){ //exibe todos os valores acima de 100
                echo " (primeira vez que passei de 100)";
                $testar= false; // chegou na condição e exibe até o 100
                }
                echo "<br>";

               }

           ?>


    <p><a href="index.php">Menu</a></p>   

</body>
</html>
