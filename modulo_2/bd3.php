<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset = "utf-8">
    <title>Aprendendo PHP</title>
  </head>

  <body>

    <h2><p>Restaurante Prato Bom </p></h2>
    <h3><p> Lista de Clientes e tabela - Outra forma de fazer o exercício anterior</p></h3>

    	    <?php


          $host = "localhost";
          $user = "usuario";
          $password = "senhadousuario";
          $bd = "aulaphp";
          $porta = 3307;

          //Para a correção de acentos e carcteres especias foi usado o "SET NAMES utf8"

          $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
          

    	    $sql = "SELECT id_cliente,nome,cidade,pais,telefone FROM clientes";

    	    $consulta = $conexao->prepare($sql);
    	    $consulta->execute();
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);


            echo "<ul>";
         
          foreach($resultados as $cadastro){

            echo "<li>";
            echo "[";
            echo $cadastro["id_cliente"];                    
            echo "]";
            echo $cadastro["nome"];
            echo "::";
            echo $cadastro["cidade"];
            echo "::";
            echo $cadastro["pais"];
            echo "[";
            echo $cadastro["telefone"];
            echo "]";
            echo "</li>";            
            echo "<br>";                                  
             
          }

            echo "</ul>";

            echo "<table  bgcolor=lightgray border=1 ><tr><td>Id</td><td>Nome</td><td>Cidade</td><td>País</td><td>Telefone</td></tr>";

          foreach ($resultados as $cadastro){
          $id = $cadastro["id_cliente"];
          $nome = $cadastro["nome"];
          $cidade = $cadastro["cidade"];
          $pais = $cadastro["pais"];
          $telefone = $cadastro["telefone"];

          ?>

    <tr>
     <td bgcolor=white><?=$id?></td>
     <td bgcolor=white><?=$nome?></td>
     <td bgcolor=white><?=$cidade?></td>
     <td bgcolor=white><?=$pais?></td>
     <td bgcolor=white><?=$telefone?></td>
    </tr>

          <?php
           }

            echo "</table>";        

    	    ?>
         

  </body>
    <p><a href="index.php">Menu</a></p> 


</html>
    	






