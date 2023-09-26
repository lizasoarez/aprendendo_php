<!DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
          <title>Aprendendo PHP</title>	
     </head>  

     <body>

         	<?php

        
          $temperatura= $_GET["temperatura"];
          $fahrenheit= $temperatura *(9/5)+32;
         
          echo "<p>A temperatura em Fahrenheit é: $fahrenheit º</p>";
         
           if ($temperatura <= 15){

          echo "<p>Está muito frio</p>";
          }   
          else if($temperatura < 30){
          echo "<p>Não está frio nem quente</p>";}
        
          else {
          echo "<p>Está quente</p>";}
                
          ?>

           <p></p>

           <a href="entrada4.1.2.php"><button>Novo cálculo</button></a>
         

     <p><a href="index.php">Menu</a></p>  

    </body>



</html>