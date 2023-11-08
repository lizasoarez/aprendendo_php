<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
    <body>
        <form method="POST">
            Nome:<input name=nome><br/>            
              <select = name=selecao>
                 <option value=campo1>Campo 1</option>
                 <option value=campo2>Campo 2</option>
                 <option value=campo3>Campo 3</option>
              </select><br/>            
            <button name=acao value=salva>Salva</button>
            <button name=acao value=exibe>Exibe</button>              
        </form>

        <?php

        function recebe($param){
            if (isset($_GET[$param])) return $_GET[$param];
            if (isset($_POST[$param])) return $_POST[$param];
            return"";}

           session_start();

           if (recebe("acao") =="salva"){
              $_SESSION["Aula2_nome"] = recebe("nome");

           }else if (recebe("acao") =="exibe"){
            if (isset($_SESSION["Aula2_nome"]))
                $nome = $_SESSION["Aula2_nome"];
                echo "O nome salvo é: $nome" ; 

           }



        ?>      
    </body>
</html>
      