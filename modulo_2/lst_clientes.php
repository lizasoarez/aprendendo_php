<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>

        <p><h2><b>Aula 4</b></h2></p>
             <h3><b>Aula 4- Exercício complementar 2- Versão em nova tabela</b></h3>
             <p><h2><b>Tabela Clientes</b></h2></p> 



    	<?php


            $host = "localhost";
            $user = "usuario";
            $password = "senhadousuario";
            $bd = "aulaphp";
            $porta = 3307;
          
            $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);


            // Usando nova tabela chamada clientes

    	    $sql = "SELECT id_cliente,nome,cidade,pais FROM clientes ";

    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);  


            echo "<ul>";
            echo "[Id][Nome][Cidade][País]";
            echo "<br>";
            echo "---------------------------------------------------------------";
           
            foreach($resultados as $elemento){               
            echo "<li>";
            echo "[";
            echo $elemento["id_cliente"];
            echo "][";                         
            echo $elemento["nome"];
            echo "][";                         
            echo $elemento["cidade"];                     
            echo "][";
            echo $elemento["pais"];              
            echo "]";
            echo "</li>";}
            echo "</ul>";
            ?>  
    	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






