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

          <?php 
                //desafio funcoes2.php 
                //criar uma função que soma dois parametros e retorna 
                // criar dois arrays, array1,array2
                //$array1 = [10,5,3,12];
                //$array2 = [7,3,4,20];
                //percorra os arrays, somando, e gerando o resultado, chamando a função de soma, de 17,8,7,32

               function calcula($valor){
                return $valor+2;}

                function retornaInformacaovalor($info){
                echo " A Informação é $info";}


                $array1 =[10,20,30,40,50,10,60,2,110,40,20,120,9,1000];
                foreach($array1 as $elemento){
                $retorno = calcula($elemento);
                retornaInformacaovalor($retorno);                
                  echo "<br>";
               }

           ?>


    <p><a href="index.php">Menu</a></p>   

</body>
</html>
