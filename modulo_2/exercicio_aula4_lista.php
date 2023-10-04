<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>

          <h2><p>Escola Aprender++ </p></h2>
            <h3><p> Lista de Alunos</p></h3>

    	<?php


          $host = "localhost";
          $user = "usuario";
          $password = "senhadousuario";
          $bd = "aulaphp";
          $porta = 3307;
          
          $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);



    	    $sql = "SELECT id,nome,nota FROM notas"; 
            
    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC); 


            // Em formato de lista
           
            echo "<ul>";
         
            echo "[id][Nome][Nota]<br>";
            echo "---------------------------";         


            foreach($resultados as $elemento){


             echo "<li>";
             echo "[";
             echo $elemento["id"];
             echo "] [";
             echo $elemento["nome"];
             echo " [";
             echo $elemento["nota"];
             echo "]"; 
             echo "</li>";                         
             
            }

            echo "</ul>";


    	?>  	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	