<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
      <h3><b>Bonificação de Funcionários:</b></h3><br>
    <body> 
        <form method="POST">
            Nome:<input name=nome><br/>
         Salário:<input name=salario><br/>            
              <select name=selecao>
                 <option value=funcionario>Funcionário</option>
                 <option value=socio>Sócio</option>               
              </select><br/>            
            <button name="acao" value="salva">Salva Nome</button>
            <button name="acao" value="exibe">Exibe Nome</button>              
        </form>

       
        <?php  
            class Funcionario {
                public $nome;
                public $salario;
                      
                      
                    
                public function __construct($nome,$salario){
                        $this->nome = $nome;
                        $this->salario = $salario;}                             
                          

                public function bonificacao(){
                       return $this->salario * 1.2;

                }                    


                public function cargo(){
                       return "Funcionario";}
                           
                } 

            class Socio extends Funcionario{
                public function bonificacao(){
                       return $this->salario*1.5;}

                public function cargo() {
                        return "Socio";
                } 

            } 

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

                
                session_start();

                $memoria1= new Memoria("oo4");

                 if (recebe("acao") =="salva"){
                $nome = recebe("nome");
                $salario = recebe("salario");
                 if ($nome !=""){$pessoa=null;
                    if (recebe("selecao")=="funcionario"){
                       $pessoa = new Funcionario($nome,$salario);
                    }else{$pessoa = new Socio($nome,$salario);}

                $memoria1->salvar($pessoa);
              }
            }else if(recebe("acao")=="exibe"){
                $lista = $memoria1->lerDados();


            foreach($lista as $pessoa){ 
                echo "Salário com bônus do ".$pessoa->cargo()." ".$pessoa->nome.": R$".$pessoa->bonificacao()."<br>"; }   


             } 



               ?>
          

      


       
           
    </body>
</html>