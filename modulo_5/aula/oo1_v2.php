<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
    <body>
       
        <?php  
                class funcionario {
                      public $nome;
                      public $idade;
                      public $cidade;
                      public $pais;
                      public $salario;
                      
                    
                      public function __construct($nome,$idade,$cidade,$pais,$salario){
                             $this->nome = $nome;
                             $this->idade = $idade;
                             $this->cidade = $cidade;
                             $this->pais = $pais;
                             $this->salario = $salario;

                         }                         


                      public function exibirInformacoes(){
                                echo "<b>Nome:</b> ".$this->nome."<br>
                                      <b>Idade:</b> ".$this->idade." anos<br>
                                      <b>Cidade:</b> ".$this->cidade."<br>
                                      <b>País:</b> ".$this->pais."<br>
                                      <b>Salário:</b> ".$this->salario;
                                  }                        
                               
                            } 

                             $pessoa1 = new Funcionario("Luiz",30,"Portão","Brasil","R$2.500,00");
                                echo "<h3><b>Informações do funcionário</b></h3>";
                             $pessoa1->exibirInformacoes();
       
        ?>      
    </body>
</html>