<!DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
          <title>Aprendendo PHP</title>	
     </head>  

     <body>
     	<p><b>Comando executado dentro do mesmo formulário</b></p>
          <p><b>O programa abaixo converte valores de Celsius para Fahrenheit</b></p>
          
     	<form>
              Digite o valor em Celsius: <input name="temperatura">
              <br/>                            
              <p><button>Converter</button></p> 

          </form>

      <!--O comando isset faz com que os valores deixem de ser executados em outro arquivo e passam a ser executados no mesmo arquivo-->
          <?php



              if (isset($_GET["temperatura"])){
              $temperatura = $_GET["temperatura"];
              $fahrenheit = $temperatura *(9/5)+32;
         
          echo "<p>A temperatura em Fahrenheit é: $fahrenheit º</p>";
         
              if ($temperatura <= 15){
          echo "<p>Está muito frio</p>";
              }else if($temperatura < 30){
          echo "<p>Não está frio nem quente</p>";
              }else {
          echo "<p>Está quente</p>";}

          }
                
          ?>

      <p><a href="index.php">Menu</a></p>                         
        
  	 </body>
     

</html>