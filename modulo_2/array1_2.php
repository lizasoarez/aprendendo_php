<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>

     <body>

     <p><h2><b>Aula 4</b></h2></p>
     <h3><b>Aula 4- Exercício complementar 1</b></h3>    


     	<?php 

          $array1 = [1,2,3,4,5];

              print_r($array1);

              echo "<br><br><br>";

          $array2 = ["ola","mundo","cruel"];

              print_r($array2);

              echo "<br><br><br>";

          $array3 = ["nome"=>"Rodrigo","nota"=>10,"situacao"=>"Aprovado"];

              print_r($array3);

          $nome = $array3["nome"];
          $nota = $array3["nota"];
          $situacao = $array3["situacao"];

              echo "<p><li><b>Nome:</b> $nome</li><li><b>Nota:</b> $nota</li><li><b>Situação:</b> $situacao</p>";
          ?>

     <p><a href="index.php">Menu</a></p> 
      
     </body>



</html>
