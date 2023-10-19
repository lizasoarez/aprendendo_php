<!--Autor: Lizandra Soares de Souza -->
<!--Data: 12 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->
<!--Exercício com a versão proposta -->

<!DOCTYPE html>
<html lang="pt">
<head>
   <meta charset="utf-8">
   <title>Aprendendo PHP</title>
</head>
   <body>
    <h2><b>Módulo 3</b></h2>
       <h3><b>Aula 3 - Comando "for" inverso de 2 em 2</b></h3>


               <!--Exercício com a versão pulando de 2 em 2-->

               <?php  
               $array1 =[10,20,30,40,50,60,70,90,100,110];
                  for($i=count($array1)-1;$i>=0;$i-=2){ 
                  echo "No índice [$i] o valor do array array1 é $array1[$i]";
                  echo "<br>";                  
               }
                  echo "<hr>";
                  echo "O valor de count(array1) é:".count($array1);

                  echo "<hr>";                                    
               $prim = count($array1)-1;
                  echo "O primeiro elemento do array1 é: $array1[$prim]";
                  echo "<br>";
                  echo "O último elemento do array1 é: $array1[0]";
                  echo "<hr>";

               ?>

      <p><a href="index.php">Menu</a></p>
   </body>
</html>

