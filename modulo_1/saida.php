<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>

     <body>
          <p><a href="entrada.php">Entrar novamente com os dados</a></p>


     	<?php
           
          $item1 = $_GET['item1'];
          $item2 = $_GET['item2'];
          $item3 = $_GET['item3'];

          echo "<ul><li><b>Nome:</b> $item1</li><li><b>Nota 1:</b> $item2</li><li><b>Nota 2:</b> $item3</li></ul>";

          ?>


           <p><a href="index.php">Menu</a></p>       

     </body>
          

</html>
