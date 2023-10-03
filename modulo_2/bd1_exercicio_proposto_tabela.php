<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>

    <h2><p>Restaurante Prato Bom </p></h2>
     <h3><p> Tabela de Comidas </p></h3>

    	<?php

    	    $host = "localhost";
            $usuario = "usuario";
            $senha = "senha";
            $banco = "aulaphp";
            $porta = 3307;

    	    $conexao = new PDO("mysql:host=$localhost;porta=$porta;dbname=$bd",$user,$password);


    	    $sql = "SELECT id_comidas,nome FROM comidas";


            
    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);  

          

            // Em formato de tabela


               echo "<table bgcolor=lightgray  border=1 bordercolor=gray><tr><td><b>Id</b></td><td><b>Nome</b></td></tr>";
           
            foreach($resultados as $elemento){

              
               echo "<tr>";
               echo "<td bgcolor=white >";
               echo $elemento["id_comidas"];
               echo "</td>";             
               echo "<td bgcolor=white>";
               echo $elemento["nome"];
               echo "</td>";
               echo "</tr>";             
             
            }
                echo "</table>";


    	?>  	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






