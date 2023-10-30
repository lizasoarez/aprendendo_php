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
               //usando break com foreach mostra os positivos 
              
            
               $array1 =[1,2,3,5,6,7,8,-9];
               foreach($array1 as $elemento){
               if($elemento<0) {
                  break;
               }
               echo "<br>";

               print_r($elemento);
            }

               
                           

                      
                          
               ?>







    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
