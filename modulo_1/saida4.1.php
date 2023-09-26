<!DOCTYPE html>
<html lang="pt">
     <head>
          <meta charset="utf-8">
          <title>Aprendendo PHP</title>	
     </head>  

     <body>

         	<?php

          
          $numero1= $_GET["numero1"];
          $resultado1= $numero1 * (9/5)+32;
          
           ?>

          <table  width=500px  border=1 cellpadding=15 > <tr><td><b>Conversão de Celsius para Fahrenheit </b></td></tr>
          </table>
          
          <table  width=500px  border=1 cellpadding=15   bordercolor=Gray >
     
             <tbody bgcolor=lightgray  ><tr><td><b>Valor em Celsius</b>
             <td  bgcolor=white><?=$numero1?>º</td></td></tr></tbody>

             <tbody  bgcolor=lightgray ><tr><td><b>Resultado em Fahrenheit</b>
             <td bgcolor=white><?=$resultado1?>º</td></td></tr></tbody>

             <tbody ><tr><td td bgcolor=white><b><?=$numero1?>º</b> celsius equivale a <b><?=$resultado1?>º</b> Fahrenheit</td>
             <td td bgcolor=white> <a href="entrada4.1.php"><button>Novo cálculo</button></a></td></tr></tbody>


          </table>
          
      <p><a href="index.php">Menu</a></p>    

    </body>


</html>