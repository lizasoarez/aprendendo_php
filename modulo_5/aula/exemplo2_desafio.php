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
              <select name=selecao>
                 <option name="acao" value=brasil>Brasil</option>
                 <option value=alemanha>Alemanha</option>
                 <option value=bolivia>Bolivia</option>
                 <option value=usa>Estados Unidos</option>
                 <option value=mexico>México</option>
                 <option value=franca>França</option>
              </select><br/>            
            <button name="acao" value="salva">Salva Nome</button>
            <button name="acao" value="exibe">Exibe Nome</button>              
        </form>

        <?php

        function recebe($param){
            if (isset($_GET[$param])) return $_GET[$param];
            if (isset($_POST[$param])) return $_POST[$param];
                return"";}           


            
            session_start();

            $opcoes=recebe("selecao");
            $array1=array();                      
            $nome=""; 

            if (recebe("acao") =="salva"){
                $_SESSION[$opcoes] = recebe("nome");
                echo "Salvando em $opcoes";            

            }
            else if (recebe("acao") =="exibe"){
            if (isset($_SESSION[$opcoes]))
            $nome= $_SESSION[$opcoes];
                echo "$nome salvo em: $opcoes";              

                            
            
            }


            
        
        ?>      
    </body>
</html>
      