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
       <h3><b> Aula 8 - while e for</b></h3>       

              <?php

                  $array1 =[10,20,30,40,50,60,70];
                  $i=0;

                  while($i<count($array1)){                    
                   if($i==3){
                     $i++;
                     continue;
                      } 
                     echo "O indice [$i] o valor do array é $array1[$i]<br>";
               
                  echo "<br>";

                  $i++;                                  
                      
               }

               ?>


              



    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
