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
    	    $usuario = "seu usuario";//coloque seu usuário do banco de dados
    	    $senha = "sua senha";//coloque sua senha do banco de dados
    	    $banco = "aulaphp"; //coloque nome do banco de dados
    	    $porta = 3307; //coloque a porta configurada do seu  banco de dados.Geralmente no xampp é 3306

    	    $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$banco",$usuario,$senha);

    	    $sql = "SELECT id,nome,nota FROM notas";

    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);

            $entrada1 = $resultados[0]["id"];
            $entrada2 = $resultados[0]["nome"];
            $entrada3 = $resultados[0]["nota"];

            $entrada4 = $resultados[1]["id"];
            $entrada5 = $resultados[1]["nome"];
            $entrada6 = $resultados[1]["nota"];


           
            echo "<ul><li>Código: $entrada1</li><li>Nome: $entrada2</li><li>Nota: $entrada3</li></ul>";
            echo "<ul><li>Id: $entrada4</li><li>Nome: $entrada5</li><li>Nota: $entrada6</li></ul>";            




          ?>  


    </body>


</html>
    	






