<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>PHP e Banco de dados</title>
    </head>

    <body>

        <p><h2> <b>Aula 3</b></h2></p>

           <p><h3><b>Exercício proposto - Nome e Nota</b></h3></p>

        <!-- Este exercício tem como objetivo levar os arrays para uma lista-->

    	<?php

    	    $host = "localhost";
            $usuario = "usuario";
            $senha = "senha";
            $banco = "aulaphp";
            $porta = 3307;

    	    $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$banco",$usuario,$senha);

    	    $sql = "SELECT id,nome,nota FROM notas";

    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);

            //Esta foi uma forma de fazer o exercício proposto, mas não é a forma mais correta.

            $entrada1 = $resultados[0]["id"];
            $entrada2 = $resultados[0]["nome"];
            $entrada3 = $resultados[0]["nota"];

            $entrada4 = $resultados[1]["id"];
            $entrada5 = $resultados[1]["nome"];
            $entrada6 = $resultados[1]["nota"];

           
            echo "<ul><li>Id: $entrada1</li><li>Nome: $entrada2</li><li>Nota: $entrada3</li></ul>";
            echo "<ul><li>Id: $entrada4</li><li>Nome: $entrada5</li><li>Nota: $entrada6</li></ul>";            

        ?> 
           

      <p><a href="index.php">Menu</a></p> 
    </body>


</html>
    	






