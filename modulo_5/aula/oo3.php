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
                               
                    echo "<h3><b>Bonificação de Funcionários:</b></h3><br>";   

                $func1 = new Funcionario("Luiz",900);
                    echo "Salário com bônus do ".$func1->cargo()." ".$func1->nome.": R$".$func1->bonificacao();
                    echo "<h3><b>Bonificação de Sócios:</b></h3><br>"; 

                $func2= new Socio("Laura",3500);
                    echo "Salário com bônus do ".$func2->cargo()." ".$func2->nome.": R$".$func2->bonificacao();
       
        ?>      
    </body>
</html>