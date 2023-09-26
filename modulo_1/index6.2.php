<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>

     <body>
          <p>Formulário com atributo action e sem php </p><!--Esse formulario apresentava um erro no PHP-->

          
          <?php 

          $entrada = $_GET['entrada'];
              echo "<p>$entrada</p>";
          ?>   

     	

     </body>
    <p><a href="index.php">Menu</a></p>


</html>
