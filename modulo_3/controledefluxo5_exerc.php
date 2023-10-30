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
       <h3><b> Aula 5 - Comandos if dentro do for- Exercício</b></h3>

               <?php
               //exibir apenas os elementos do array menos os do indice =3
              

               $array1 =[10,20,30,40,50,60];
                  for($i=0;$i<count($array1);$i++){ 
                     if($i!=3){
                        echo "No índice [$i] o valor do array array1 é $array1[$i]";}
                        echo "<br><br>";
                     }
               //exibir todos os elementos maiores que 20
                        echo "<br>"; 
                        echo "<hr>";
                        echo "Elementos do array maiores que 20";
                        echo "<hr>";
                  for($i=0;$i<count($array1);$i++){
                     if($array1[$i]>20){echo "No índice [$i] o valor do array é $array1[$i]";}
                        echo "<br>";  } 


               ?>



    <p><a href="index.php">Menu</a></p>   

 </body>
</html>
