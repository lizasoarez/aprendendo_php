<!--Autor: Lizandra Soares de Souza -->
<!--Data:24 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>Aprendendo PHP</title>
    </head>
      <body>
          <h2><b>Módulo 4</b></h2>
          <h3><b>Aula 2 - Criando um primeiro template</b></h3>

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

          ?>
         
          <p><a href="index.php">Menu</a></p> 
      </body>
</html>
      
    	






