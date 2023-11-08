<!DOCTYPE html>
<html lang="pt">
     <head>
     	    <meta charset="utf-8">
          <title>Aprendendo PHP</title>	
     </head>  

     <body>

     	<p><b>Calculadora de IMC</b></p>
          
     	<form>
              Digite o peso: <input name="peso" size="9">
              <br/>  
              Digite a Altura:<input name="altura" size="8">
              <br/>                            
              <p><button>Calcular</button></p> 

      </form>

   
          <?php

              if (isset($_GET["peso"])){

              $peso = $_GET["peso"];
              $altura = $_GET["altura"];
              $imc = $peso/($altura)**2;         
                 echo "<p>Seu IMC é: $imc</p>";
              if ($imc <= 18.5){
                 echo"<p>Seu peso está abaixo do recomendado.</p>";}
              else if ($imc <= 24.9){
                      echo"<p>Seu peso está normal.</p>";}
              else if ($imc <= 29.9){ 
                      echo"<p>Seu peso está acima do recomendado.Classificação Sobrepeso.</p>";}
              else if ($imc <= 34.9){
                      echo"<p>Seu peso está acima do recomendado.Classificação Obesidade Classe I.</p>";}
              else if ($imc <= 39.9){
                      echo"<p>Seu peso está acima do recomendado.Classificação Obesidade Classe II.</p>";}
              else {echo"<p>Seu peso está acima do recomendado.Classificação Obesidade Classe III.</p>";}
                                      }
          ?>


          <table border=1 bgcolor=lightgray cellpadding="5">

            <tbody bgcolor=gray>
            <tr>
              <td><b> IMC </b></td>
              <td><b> Classificação</b></td>
            </tr>
            </tbody>

            <tr>
              <td> Menor que 18,5 </td>
              <td> Abaixo do peso normal</td>
            </tr>

            <tr>
              <td> 18,5 - 24,9</td>
              <td> Peso normal</td>
            </tr>

             <tr>
              <td> 25,0 - 29,9</td>
              <td> Sobrepeso</td>
            </tr>

             <tr>
              <td> 30,0-34,9</td>
              <td> Obesidade classe I</td>
            </tr>

            <tr>
              <td> 35,0 - 39,9</td>
              <td> Obesidade classe II</td>
            </tr>

            <tr>
              <td> Maior ou igual a 40 </td>
              <td> Obesidade classe III</td>
            </tr>

          </table>

          <table>

            <tr>
            <td> Classificação conforme OMS</td>
            </tr>

          </table>


          

      <p><a href="index.php">Menu</a></p>                         
        
  	 </body>
     

</html>