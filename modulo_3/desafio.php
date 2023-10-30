<!--Autor: Lizandra Soares de Souza -->
<!--Data:22 de outubro de 2023 -->
<!--Aula do curso de Lógica de Programação em PHP -->
<!--Desafio módulo 3 - Atividade Final (Funções) -->

<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprendendo PHP</title>

  <style>

.titulo_modulo{

    line-height: 0.3;
    color: #fff;
    padding: 10px;
    margin-top: -3px;
    margin-left: -11px;
    margin-bottom: 18px;
    background-color: #04aa6d;
    width: 250px;            
    border-radius: 0px 20px 20px 0px;
    box-shadow: -1px -2px 6px gray;
}

body {
    font-family: Arial, sans-serif;
    font-size:14px}

.bloco_body {            
    max-width: 600px;
    padding: 60px;
    box-shadow:1px 7px 9px 1px lightgray;}

.bloco_body .h2_a {
    color: #04aa6d;
    margin-top: -37px;
    font-size: 30px;
    text-shadow: 1px 4px 3px #008b5830;}
        
.bloco_body .h2 {
    color: #000000cf;
    font-size: 20px;
    margin-top: -26px;}

.bloco_form {
            margin-bottom: 20px;}

label {            
    color: #303030;
    font-weight: bold;}

input[type="text"]{

    display: block;
    width: 70%;
    padding: 5px;
    border: 1px solid #ccc;}

button {

    font-size: 14px;         
    background-color: #04aa6d;
    color: #fff;
    padding: 10px 20px;
    border: none;    
    cursor: pointer;}

button:hover {
    color: #024a2f;
    background-color: #01915c;}

table {
    margin-top: 35px;
    border-collapse: collapse;
    width: 100%;}

th, td {
    border: 1px solid #ccc;
    padding: 8px;
    text-align: left;}

th {
    color: white;                   
    background-color: #04aa6d;
    box-shadow: 3px 1px 8px #a19f9f;}

  </style>

  </head>

    <body>
        <div class="titulo_modulo">  
          <h2>Módulo 3</h2>
          <h2 style="font-size:14px;"> Aula 12 -Desafio</h2>
        </div>

        <div class="bloco_body">
          <p><h2 class="h2_a">Escola php++</h2></p>
          <h2 class="h2">Cadastro de Alunos</h2>

        <form>

          <div class="bloco_form">
            <label style="font-size: 14px;" for="nome">Nome:</label>
            <input type="text" name="nome" >
          </div>
          <div class="bloco_form">
            <label for="nota">Nota:</label>
            <input type="text" name="nota" >
          </div>                                           
          <button >Cadastrar</button>
        </form>             



         <?php


          function lerparametro($campo){
              return $_GET[$campo];
              }
          function seExiste($campo){
              return isset($_GET[$campo]);
              }
          function teste($campo,$valor){
              if(!seExiste($campo)) return false;
              return lerparametro($campo) == $valor;
              }

   

          function conexao(){

            $host="localhost";
            $user="usuario";
            $password="senhadousuario";
            $bd="aulaphp";
            $porta="3307";            
            $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);
            return $conexao;
              }



          function select(){

            $conexao=conexao();
            $sql = "SELECT id,nome,nota FROM notas";
            $consulta = $conexao->prepare($sql);
            $consulta->execute();
            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $dados;            
             }

            if (seExiste('nome')){
            inserir(lerparametro('nome'),lerparametro('nota'));}

          function inserir($nome,$nota){

            $conexao=conexao();
            $sql="INSERT INTO notas(nome,nota) VALUES(:nome,:nota)";
            $consulta=$conexao->prepare($sql);
            $consulta->bindParam(':nome',$nome);
            $consulta->bindParam(':nota',$nota);
            $consulta->execute();      
             }
             
            if(teste('acao','remover')){
            remover(lerparametro('id'));}

          function remover($id){          

            $conexao=conexao();
            $sql="DELETE FROM notas WHERE id=:id";
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id',$id);            
            $consulta->execute();
            
             }            

            $tab=select();

           ?>

            <table border="1">
            
              <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Nota</th>
                <th>Ação</th>
              </tr>

            <?php foreach($tab as $td){?>

                    <tr>
                      <td><?=$td['id']?></td>
                      <td><?=$td['nome']?></td>
                      <td><?=$td['nota']?></td>
                      <td><a href="desafio.php?acao=remover&id=<?=$td['id']?>">Remover</a></td>
                    </tr>

            <?php } ?>             


            </table> 

        </div>
    </body>
</html>
      