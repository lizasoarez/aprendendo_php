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
              <h3><b> Aula 12 - Introdução a funções </b></h3>

              <p>array1 = [10, 5, 3, 12]</p>
              <p>array2 = [7, 3, 4, 20]</p>  

               <?php

                 function total($valor1, $valor2) {
                 return $valor1 + $valor2;
                 }              

                $array1 = [10, 5, 3, 12];
                $array2 = [7, 3, 4, 20];

                for ($i = 0; $i < count($array1); $i++) {
                $soma = total($array1[$i], $array2[$i]);

                echo "<br>";
                echo "A Soma entre os indices[$i] do array1 e o array2 é:  $soma";
                
                if($i != count($array1)-1){
                    echo ",";

                }                          
                 
                }
                 
               ?>   

             <p>Se for o último elemento do array1 coloca a vírgula.</p>     

<p><a href="index.php">Menu</a></p>   

</body>
</html>
