<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>
         <p><h2> <b>Aula 2</b></h2></p>

           <p><h3> <b>Primeiro array do banco de dados</b></h3></p>

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
    	    



    	?>  
    	


        <p><a href="index.php">Menu</a></p> 

    </body>


    </html>
    	






