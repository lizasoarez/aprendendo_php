<!DOCTYPE html>
<html lang="pt">
     <head>
     <meta charset="utf-8">
     <title>Aprendendo PHP</title>	
     </head>  

     <body>

     	<p><a href="entrada2.php">Entrar novamente com dados</a></p>
     	
          
     	    <?php

          $nome = $_GET["nome"];
          $nota1 = $_GET["nota1"];
          $nota2= $_GET["nota2"];
          $aprovacao = $_GET["aprovacao"];
          ?>

     	   <table border=1 bordercolor=gray>
              <tr>
                  <td><b>Nome</b></td>
                  <td><b>Nota 1</b></td>
                  <td><b>Nota 2</b></td>
                  <td><b>Aprovado</b></td>
              </tr>

              <tr>
                  <td><?=$nome?></td>
                  <td><?=$nota1?></td>
                  <td><?=$nota2?></td>
                  <td><?=$aprovacao?></td>
              </tr>
          
          </table> 

  	  <p><a href="index.php">Menu</a></p>

     </body>



</html>