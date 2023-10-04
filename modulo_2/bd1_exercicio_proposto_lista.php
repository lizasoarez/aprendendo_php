<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>

          <h2><p>Restaurante Prato Bom </p></h2>
            <h3><p> Lista de Comidas </p></h3>

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


          

            // Em formato de lista
           
            echo "<ul>";
         
            echo "[id][Nome]<br>";
            echo "---------------------------";         


            foreach($resultados as $elemento){


             echo "<li>";
             echo "[";
             echo $elemento["id_comidas"];
             echo "]";
             echo $elemento["nome"];
             echo "</li>";                          
             
            }

            echo "</ul>";


    	?>  	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






