<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>
    <style>
        .titulo_modulo {

            line-height: 0.3;
            color: #fff;
            width: 250px;
            padding: 10px;
            margin-top: -3px;
            margin-left: -11px;
            margin-bottom: 18px;
            background-color: #04aa6d;
            border-radius: 0px 20px 20px 0px;
            box-shadow: -1px -2px 6px gray;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 14px
        }

        .bloco_body {
            max-width: 600px;
            padding: 60px;
            box-shadow: 1px 7px 9px 1px lightgray;
        }

        .bloco_body .h2_a {
            color: #04aa6d;
            margin-top: -37px;
            font-size: 30px;
            text-shadow: 1px 4px 3px #008b5830;
        }

        .bloco_body .h2 {
            color: #000000cf;
            font-size: 20px;
            margin-top: -26px;
        }

        .bloco_form {
            margin-bottom: 20px;
        }

        label {
            color: #303030;
            font-weight: bold;
        }

       
        input[type="text"] {

            display: block;
            width: 70%;
            padding: 5px;
            border: 1px solid #ccc;
        }

        button {

            font-size: 14px;
            background-color: #04aa6d;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            color: #024a2f;
            background-color: #01915c;
        }


        input[type=submit] {

    font-size: 14px;
    background-color: #04aa6d;
    color: #fff;
    padding: 5px 20px;
    border: none;
    box-shadow: 1px 2px 5px 2px #d9d7d7;
        }

        input:hover[type=submit]{
           color: #024a2f;
           background-color: #01915c;

        }

        table {
            margin-top: 35px;
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            color: white;
            background-color: #04aa6d;
            box-shadow: 3px 1px 8px #a19f9f;
        }

        .save{
          float: right;
          margin-bottom: 16px;
        }

    </style>

</head>

<body>
    <div class="titulo_modulo">
        <h2>Módulo 6</h2>
        <h2 style="font-size:14px;"> Gerar Arquivo Excel</h2>
    </div>
    <div class="bloco_body">
        <p>
        <h2 class="h2_a">Restaurante Prato Bom</h2>
        </p>
        <h2 class="h2">Cadastro de Clientes</h2>

         <div class="bloco_form">
         <form method="post">
           <label style="font-size: 14px;" for="nome">Nome:</label>
           <input type="text" name="nome">
           <label style="font-size: 14px;" for="cidade">Cidade</label>
           <input type="text" name="cidade">
           <label style="font-size: 14px;" for="pais">País:</label>
           <input type="text" name="pais">
           <label style="font-size: 14px;" for="telefone">Telefone:</label>
           <input type="text" name="telefone">
           </div> 
           <button  value="Cadastrar">Cadastrar</button>

         </form >
           

          <?php


          $host = "localhost";
          $user = "usuario";
          $password ="senhadousuario";
          $bd = "aulaphp";
          $porta = 3307;
          
          $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);

            if (isset($_POST["nome"])){          
          $nome =$_POST["nome"];
          $cidade =$_POST["cidade"];
          $pais =$_POST["pais"];
          $telefone =$_POST["telefone"];
          
          $sql = "INSERT INTO clientes(nome,cidade,pais,telefone) VALUES(:nome,:cidade,:pais,:telefone)";

          $consulta = $conexao->prepare($sql);          
          $consulta->bindParam(":nome",$nome);
          $consulta->bindParam(":cidade",$cidade);
          $consulta->bindParam(":pais",$pais);
          $consulta->bindParam(":telefone",$telefone);
          $consulta->execute();          
         
          }          

            if (isset($_POST["acao"])){
         
          $id =$_POST["id"];                

          $sql = "DELETE FROM clientes WHERE id =:id";
          $consulta = $conexao->prepare($sql);          
          $consulta->bindParam(":id",$id);
          $consulta->execute();         

          }             

          $sql = "SELECT id,nome,cidade,pais,telefone FROM clientes";
          $consulta = $conexao->prepare($sql);
          $consulta->execute(); 
          $resultados = $consulta->fetchall(PDO::FETCH_ASSOC);

          echo"<button class=save onclick=document.location='tabela.php'>Salvar em Planilha</button>";

          echo"<form method=post><table><tr><th>Id</th><th>Nome</th><th>Cidade</th><th>País</th><th>Telefone</th><th>Ação</th></tr>";

         

          foreach ($resultados as $cadastro){
          $id = $cadastro["id"];
          $nome = $cadastro["nome"];
          $cidade = $cadastro["cidade"];
          $pais = $cadastro["pais"];
          $telefone = $cadastro["telefone"];

          ?> 

            <tr>

            <td><?= $id ?></td>
            <td ><?= $nome ?></td>
            <td><?= $cidade ?></td>
            <td><?= $pais ?></td>
            <td ><?= $telefone ?></td>
           <td>
               <input type="hidden" name="id" value="<?= $id ?>">
               <input type="submit" name="acao" value="Remover">
            </td>
         </tr>

           <?php
           }

               

           ?>
         
     </table>
</form>
</body>
</html>
