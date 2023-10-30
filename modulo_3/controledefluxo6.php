<!--Autor: Lizandra Soares de Souza -->
<!--Data: 19 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->
<!--Exercício proposto na aula 4-->


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
              //Ele pula o índice 3

               $array1 =[10,20,30,40,50,60];
                  for($i=0;$i<count($array1);$i++){ 
                     if($i==3){ 
                        continue;
                         }

                        echo "<br><br>";

                        echo "No índice [$i] o valor do array array1 é $array1[$i]";}

                        echo "<br>";
                        echo "<hr>" ;
                          
                        echo "<p>O break encerra o loop</p><hr>" ;   
                       
                  for($i=0;$i<count($array1);$i++){ 
                     if($i==3){ 
                        break;
                         }

                        echo "<br>";

                        echo "No índice [$i] o valor do array array1 é $array1[$i]";}
            

               ?>



    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
