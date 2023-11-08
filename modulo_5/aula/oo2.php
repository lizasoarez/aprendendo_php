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
           <button name="acao" value="<?=$limpar?>">Limpar dados</button>
           
                        
        </form>


        <?php

            class Memoria{

                  public $campo;

                  public function __construct($campo){
                            $this->campo=$campo;}                 


                  public function salvar($dados){
                            if (!isset($_SESSION[$this->campo])){
                            $_SESSION[$this->campo] = array();}

                            $_SESSION[$this->campo][] = $dados;}

           

                 public function lerDados(){               
                           if (!isset($_SESSION[$this->campo])){
                           return array();}
                           return $_SESSION[$this->campo];}
                       } 
           
        
                        function recebe($param){
                        if (isset($_GET[$param])) return $_GET[$param];
                        if (isset($_POST[$param])) return $_POST[$param];
                        return"";
                    } 

                   


           
            
            $limpar=session_unset();
            session_start();            

            $memoria1= new Memoria("memoria1");

            if (recebe("acao") =="salva"){
                $nome = recebe("nome");
                $memoria1->salvar($nome);
                echo "Estou salvando um novo dado";            

            }else if (recebe("acao") =="exibe"){
                $retorno=$memoria1->lerDados();
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
      