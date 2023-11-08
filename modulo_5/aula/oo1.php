<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
    <body>
       
        <?php  
                class Pessoa {
                      public $nome;
                      public $idade;
                      public $cidade;
                      public $pais;
                      
                    
                      public function __construct($nome,$idade,$cidade,$pais){
                             $this->nome = $nome;
                             $this->idade = $idade;
                             $this->cidade = $cidade;
                             $this->pais = $pais;

                         }                         


                      public function exibirInformacoes(){
                                echo "Nome: ".$this->nome."<br>
                                      Idade: ".$this->idade." anos<br>
                                      Cidade: ".$this->cidade."<br>
                                      País: ".$this->pais;}                        
                               
                            } 

                             $pessoa1 = new Pessoa("Luiz",30,"Portão","Brasil");
                                echo "Informações da pessoa 1:<br>";
                             $pessoa1->exibirInformacoes();
       
        ?>      
    </body>
</html>