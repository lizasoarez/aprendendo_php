<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>

    <body>
      <h2><p>Aula 7</p></h2>


          
          <h2><p>Escola Aprender++</p></h2>
            <h3><p> Cadastrando Alunos e notas</p></h3>

             <form>
               Nome: <input name="nome" size=15>
               <br/>
               Nota: <input name="nota" size=16>
               <br/>               
               <p><button>Cadastrar</button></p>               
            
            </form> 

    	    <?php

 
          $host = "localhost";
          $user = "usuario";
          $password = "senhadousuario";
          $bd = "aulaphp";
          $porta = 3307;
          
          $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);


          if (isset($_GET["nome"])){

          $nome =$_GET["nome"];
          $nota =$_GET["nota"];
          $sql = "INSERT INTO notas(nome,nota) VALUES(:nome,:nota)";
    	    $consulta = $conexao->prepare($sql);    	    
          $consulta->bindParam(":nome",$nome);
          $consulta->bindParam(":nota",$nota);
          $consulta->execute();
          }          
          

          $sql = "SELECT id,nome,nota FROM notas";
          $consulta = $conexao->prepare($sql);
          $consulta->execute(); 
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);


           echo "<table  bgcolor=lightgray border=1 ><tr><td>Id</td><td>Nome</td><td>Nota</td></tr>";

          foreach ($resultados as $cadastro){
          $id = $cadastro["id"];
          $nome = $cadastro["nome"];
          $nota = $cadastro["nota"];
            

          ?>

            <tr>
              <td bgcolor=white><?=$id?></td>
              <td bgcolor=white><?=$nome?></td>
              <td bgcolor=white><?=$nota?></td>
              
            </tr>

          <?php
          }

           echo "</table>";        

    	    ?>
         

    </body>
    <p><a href="index.php">Menu</a></p> 


    </html>
    	






