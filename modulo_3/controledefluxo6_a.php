<!--Autor: Lizandra Soares de Souza -->
<!--Data: 19 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->



<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
 <body>

    <h2><b>Módulo 3</b></h2>
       <h3><b> Aula 6 - break e continue</b></h3>

               <?php
               //usando continue
              //Ela pula o índice 1 e valor do array1 menor que 0 

               $array1 =[10,20,30,40,-50,60];
                  for($i=0;$i<count($array1);$i++){ 
                     if($i==1){ 
                        continue;
                         }

                     if($array1[$i] < 0){ 
                        break;
                         }       

                        echo "<br><br>";
                        echo "No índice [$i] o valor do array array1 é $array1[$i]";}           

               ?>

    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
