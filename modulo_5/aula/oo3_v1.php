<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
    <body>
       
        <?php  
            class Funcionario {
                public $nome;
                public $idade;
                public $cidade;
                public $pais;
                public $salario;

                public function __construct($nome, $idade, $cidade, $pais, $salario) {
                    $this->nome = $nome;
                    $this->idade = $idade;
                    $this->cidade = $cidade;
                    $this->pais = $pais;
                    $this->salario = $salario;
                }

                public function exibirInformacoes() {
                    echo "<b>Nome:</b> " . $this->nome . "<br>
                          <b>Idade:</b> " . $this->idade . " anos<br>
                          <b>Cidade:</b> " . $this->cidade . "<br>
                          <b>País:</b> " . $this->pais . "<br>
                          <b>Salário:</b> " . $this->salario;
                }

                public function bonificacao() {
                    return $this->salario*1.2;
                }

                public function cargo() {
                    return "Funcionario";
                }

                
            }                      

            class Socio extends Funcionario {
                public function bonificacao() {
                    return  $this->salario*1.5;
                }

                public function cargo() {
                    return "Socio";
                }
            }
             
            $pessoa = new Funcionario("Luiz","30" , "Portão", "Brasil", 2500);
            echo "<h3><b>Informações do funcionário</b></h3>";
            echo "<br><b>Bônus do " . $pessoa->cargo() . "</b> " . ": R$ " . $pessoa->bonificacao().",00<br>";
            $pessoa->exibirInformacoes();
          


            echo "<hr>";            

            $pessoa = new Socio("Beatriz", "40", "Porto Alegre", "Brasil", 7350);
            
            echo "<br><b>Bônus do " . $pessoa->cargo() . "</b> ". ": R$ " . $pessoa->bonificacao().",00<br>";
            $pessoa->exibirInformacoes();


            
             
        ?>      
    </body>
</html>
