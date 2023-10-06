<!DOCTYPE html>
<html lang="pt">
    <head>
    	<meta charset = "utf-8">
    	<title>Aprendendo PHP</title>
    </head>
        <style> 
           input[type="text"]{
           width: 250px;
           padding: 1px;}
        </style>

    <body>

      
      <h2><p>Aula 7</p></h2>          
          <h2><p>Restaurante Prato Bom </p></h2>
          <h3><p> Cadastrando Clientes </p></h3>


         <form>
          <table bgcolor="lightgray" border=1>
            <tr>
              <td><label for="nome"><b>Nome:</b> </label></td>
              <td><input type="text" name="nome"></td>
            </tr>
            <tr>
              <td><label for="cidade"><b>Cidade:</b></label></td>
              <td><input type="text"name="cidade"></td>
            </tr>
            <tr>
              <td><label for="pais"><b>País:</b></label></td>
              <td><input type="text" id="pais" name="pais"></td>
            </tr>
               <td><label for="telefone"><b>Telefone:</b></label></td>
               <td><input type="text" id="telefone" name="telefone"></td>
            <tr>               
               <td></td>
               <td><input type="submit" value="Cadastrar"></td>
            </tr>
          </table><br><br>
         </form>

    	    <?php


          $host = "localhost";
          $user = "usuario";
          $password ="senhadousuario";
          $bd = "aulaphp";
          $porta = 3307;
          
          $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);

            if (isset($_GET["nome"])){

          
          $nome =$_GET["nome"];
          $cidade =$_GET["cidade"];
          $pais =$_GET["pais"];
          $telefone =$_GET["telefone"];

          $sql = "INSERT INTO clientes(nome,cidade,pais,telefone) VALUES(:nome,:cidade,:pais,:telefone)";

          $consulta = $conexao->prepare($sql);          
          $consulta->bindParam(":nome",$nome);
          $consulta->bindParam(":cidade",$cidade);
          $consulta->bindParam(":pais",$pais);
          $consulta->bindParam(":telefone",$telefone);
          $consulta->execute();
          }          

            if (isset($_GET["acao"])){
         
          $id =$_GET["id"];                

          $sql = "DELETE FROM clientes WHERE id_cliente =:id";
    	    $consulta = $conexao->prepare($sql);    	    
          $consulta->bindParam(":id",$id);
          $consulta->execute();         

          }             

          $sql = "SELECT id_cliente,nome,cidade,pais,telefone FROM clientes";
          $consulta = $conexao->prepare($sql);
          $consulta->execute(); 
    	    $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);


            echo "<table  bgcolor=lightgray border=1><tr><td>Id</td><td>Nome</td><td>cidade</td><td>País</td><td>Telefone</td><td>Ação</td></tr>";

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
              <td bgcolor=white><a href=bd6_tbcliente.php?acao=remover&id=<?=$id?>>Remover</a></td>
              
            </tr>

           <?php
           }

             echo "</table>";        

    	     ?>
         
     <p><a href="index.php">Menu</a></p> 
    </body>
    


    </html>
    	






