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

            // Em formato de tabela


               echo "<table bgcolor=lightgray  border=1 bordercolor=gray><tr><td><b>Id</b></td><td><b>Nome</b></td><td><b>Nota</b></td></tr>";
           
            foreach($resultados as $elemento){

              
               echo "<tr>";
               echo "<td bgcolor=white>";
               echo $elemento["id"];
               echo "</td>";             
               echo "<td bgcolor=white>";
               echo $elemento["nome"];
               echo "<td bgcolor=white>";
               echo $elemento["nota"];
               echo "</td>";
               echo "</tr>";             
             
            }
                echo "</table>";


    	?>  	
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






