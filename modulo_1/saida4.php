<!DOCTYPE html>
<html lang="pt">
     <head>
     <meta charset="utf-8">
     <title>Aprendendo PHP</title>	
     </head>  

     <body>    	
            
         
     	<?php

          $numero2 = 0.621371;
          $numero1= $_GET["numero1"];
          $resultado1= $numero1 * $numero2;
          
           ?>

        <table border=1 bordercolor=gray cellpadding=10>
           <tr>
              <td ><b>Conversão de Quilômetros para milhas</b></tr></td>              
              <tbody  bgcolor=LightGray><tr><td><b>Valor em Km</b>
              <td  bgcolor=white><?=$numero1?></td></td></tr></tbody>

              
              <tbody bgcolor=LightGray><tr><td><b>Valor da milhas/km</b>
              <td bgcolor=white><?=$numero2?></td></td></tr></tbody>

             
              <tbody bgcolor=LightGray><tr><td><b>Resultado em Milhas</b>
              <td bgcolor=white><?=$resultado1?></td></td></tr></tbody>
                                   
         </table>
       
              <p><b><?=$numero1?></b> km equivale a <b><?=$resultado1?> </b>milhas</p>
              
              <a href="entrada4.php"><button>Novo cálculo</button></a>
        

  	 <p><a href="index.php">Menu</a></p>   	
     </body>



</html>