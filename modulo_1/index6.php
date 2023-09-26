<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>

     <body>
          <p>Formulário sem atributo action </p><!--Esse formulario apresenta um erro no PHP-->

          <p>Digite uma frase na caixa de texto abaixo</p>

          <form>
               <input  name="entrada">
               </br>
               <button>Enviar</button>

          </form>


     	<?php 
          $entrada = $_GET['entrada'];
              echo "<p>$entrada</p>";
          ?>   

       

     </body>
    <p><a href="index.php">Menu</a></p>


</html>
