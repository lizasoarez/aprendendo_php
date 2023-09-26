<!DOCTYPE html>
<html lang="pt">
     <head>
     <meta charset="utf-8">
     <title>Título da Página</title>	
     </head>  

     <body>

     	<p><a href="entrada3.php">Entrar novamente com dados</a></p>     	
             
     	<?php

          $numero1= $_GET["numero1"];
          $numero2 = $_GET["numero2"];
          $resultado1= $numero1 + $numero2;
          $resultado2= $numero1 - $numero2;
          $resultado3= $numero1 * $numero2;
          $resultado4= $numero1 / $numero2;

           ?>

               
     	<table border=1 bordercolor=red>

             <p><tr><b>Adição</b></tr></p>                   

               <tr bgcolor=pink > 
                  <td ><b>Número 1</b></td>
                  <td><b>Número 2</b></td>
                  <td><b>Total</b></td>                  
                  </tr>

                <tr>
                  <td><?=$numero1?></td>
                  <td><?=$numero2?></td>
                  <td><?=$resultado1?></td>
                </tr>

        </table>                  

              
        <table border=1 bordercolor=blue>
                 
             <p><tr><b>Subtração</b></tr></p>


                <tr bgcolor=lightblue > 
                  <td><b>Número 1</b></td>
                  <td><b>Número 2</b></td>
                  <td><b>Total</b></td>                
               </tr>


               <tr>
                  <td><?=$numero1?></td>
                  <td><?=$numero2?></td>
                  <td><?=$resultado2?></td>               
               </tr>
          
        </table>


        <table border=1 bordercolor=green>
                     
             <p><tr><b>Multiplicação</b></tr></p>
                  <tr bgcolor=lightgreen >
                  <td><b>Número 1</b></td>
                  <td><b>Número 2</b></td>
                  <td><b>Total</b></td>
                  
                </tr>

                <tr>
                  <td><?=$numero1?></td>
                  <td><?=$numero2?></td>
                  <td><?=$resultado3?></td>               
                </tr>

        </table>

        <table border=1 bordercolor=violet>
               
             <p><tr><b>Divisão</b></tr></p>

                <tr bgcolor=violet >
                  <td><b>Número 1</b></td>
                  <td><b>Número 2</b></td>
                  <td><b>Total</b></td>
                  
                </tr>

                <tr>
                  <td><?=$numero1?></td>
                  <td><?=$numero2?></td>
                  <td><?=$resultado4?></td>
               
                </tr>

        </table>

  	 <p><a href="index.php">Menu</a></p>

     </body>




</html>