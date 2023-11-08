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
                 <option value=Brasil>Brasil</option>
                 <option value=Alemanha>Alemanha</option>
                 <option value=Bolivia>Bolivia</option>
                 <option value=USA>Estados Unidos</option>
                 <option value=Mexico>México</option>
                 <option value=Franca>França</option>
              </select><br/>            
            <button name="acao" value="salva">Salva Nome</button>
            <button name="acao" value="exibe">Exibe Nome</button>
            <button name="limpa" value="<?=$limpar?>">Limpar dados</button>              
        </form>

        <?php

        $limpar=session_unset(); // Remove as variáveis de sessão     
        
        function recebe($param){
            if (isset($_GET[$param])) return $_GET[$param];
            if (isset($_POST[$param])) return $_POST[$param];
                return"";} 

        function salvar($campo,$dados){
            if (!isset($_SESSION[$campo])){
                $_SESSION[$campo] = array();}
                $_SESSION[$campo][] = $dados;}

        function lerDados($campo){               
            if (!isset($_SESSION[$campo])){
                return array();}
                return $_SESSION[$campo];}

            session_start();

            $campo="memoria"; 

            if (recebe("acao") =="salva"){
                $nome = recebe("nome");
                salvar($campo,$nome);
                echo "Estou salvando um novo dado";            

            }else if (recebe("acao") =="exibe"){
                $retorno=lerDados($campo);
                $contaelementos = count($retorno);// Contador para eliminar a vírgula no final do array
                $i = 0;
                foreach($retorno as $dados){
                    echo $dados;

               if ($i < $contaelementos - 1) {
               echo ",";
            } 

             $i++;
                }
            
            }
         
        ?>      
    </body>
</html>
      