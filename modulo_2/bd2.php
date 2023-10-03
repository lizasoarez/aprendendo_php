<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>
        <p><h2> <b>Aula 3</b></h2></p>
           <p><h3> <b>Aprendendo array - Conexão com banco de dados</b></h3></p>

        <!-- Este programa faz uma conexão com a tabela notas dentro do banco de dados aulaphp-->


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

    	    print_r($resultados);

            echo"<p>------------------------------------</p>";

    	    echo "<BR>(print_r do resultados[0])<BR>";
    	    print_r($resultados[0]);
    	    echo "<BR>(print_r do resultados[1])<BR>";
    	    print_r($resultados[1]);
    	    echo "<BR>(print_r do resultados[2])<BR>";
    	    print_r($resultados[2]);
    	    echo "<BR>(print_r do resultados[3])<BR>";
    	    print_r($resultados[3]);
    	    echo "<br><br><br>";

            echo"<p>------------------------------------</p>";
    	    echo $resultados[0]["nome"];

    ?>


        <p><a href="index.php">Menu</a></p> 
    </body>


</html>
        
