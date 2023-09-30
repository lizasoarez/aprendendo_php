<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>

    	<?php

    	    $localhost = "localhost";
    	    $user = "";
    	    $password = "";
    	    $bd = "aulaphp";
    	    $porta = 3307;

    	    $conexao = new PDO("mysql:host=$localhost;porta=$porta;dbname=$bd",$user,$password);

    	    $sql = "SELECT id_cliente,nome,cidade,pais,telefone FROM clientes ";

    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);  



            // Em formato de tabela 

            


            echo "<table bgcolor=lightgray bordercolor=black border=1><tr><td>Id</td><td>Nome</td><td>Cidade</td><td>País</td><td >Telefone</td></tr>";
           
            foreach($resultados as $elemento){


               echo "<tr>";
               echo "<td>";
               echo $elemento["id_cliente"];
               echo "</td>";             
               echo "<td bgcolor=white>";
               echo $elemento["nome"];
               echo "</td>";
               echo "<td bgcolor=white>";
               echo $elemento["cidade"];
               echo "</td>";
               echo "<td bgcolor=white>";
               echo $elemento["pais"];
               echo "</td>";
               echo "<td bgcolor=white>";
               echo $elemento["telefone"];
               echo "</td>";
               echo "</tr>";

               
             
            }
            echo "</table>";



    	?>  
    	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






