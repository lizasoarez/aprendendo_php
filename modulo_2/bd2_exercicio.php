<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>PHP e Banco de dados</title>
    </head>

    <body>

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

            //Esta foi uma forma de fazer o exercicio proposto.

            $entrada1 = $resultados[0]["id"];
            $entrada2 = $resultados[0]["nome"];
            $entrada3 = $resultados[0]["nota"];
           
            echo "<ul><li>Id: $entrada1</li><li>Nome: $entrada2</li><li>Nota: $entrada3</li></ul>";
                      

          ?>  


    </body>


</html>
    	






