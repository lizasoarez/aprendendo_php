<DOCTYPE html>
<html lang="pt">
     <head>
     	<meta charset="utf-8">
     	<title>Aprendendo PHP</title>
     </head>
     <body>
          <p><h2><b>Aula 4</b></h2></p>
             <h3><b>Arrays de números</b></h3>


     	<?php 

              $array1 = [1,2,3,4,5];
               print_r($array1);
               echo "<br><br>";

               echo"<p>---foreach array1----</p>";

              foreach ($array1 as $elemento) {
               print_r($elemento);
               echo "<br><br>";
                  
              }

              $array2 = ["ola","mundo","cruel"];
               print_r($array2);
               echo "<br><br>";

               echo"<p>---foreach array2---</p>";
              foreach ($array2 as $elemento) {
               print_r($elemento);
               echo "<br><br>";
                  
              }



              $arrayCadastro1 = ["nome"=>"Rodrigo","nota"=>10,"situacao"=>"Aprovado"];
              $arrayCadastro2 = ["nome"=>"Fátima Oliveira","nota"=>10,"situacao"=>"Aprovado"];
              $arrayCadastro3 = ["nome"=>"Roberto Carlos","nota"=>5,"situacao"=>"Reprovado"];

              $cadastro = [$arrayCadastro1,$arrayCadastro2,$arrayCadastro3];

               echo"<p>---Print_r Cadastro---</p>";
               echo "<br>"; 

               print_r($cadastro);
               echo "<br>";
               echo"<p>---foreach Cadastro---</p>";

               echo "<ol>";
               foreach($cadastro as $elemento){              
               echo "<li>";
               echo $elemento["nome"];
               echo "-";
               echo $elemento["nota"];
               echo "-";
               echo $elemento["situacao"];
               echo "</li>";
                

               }

               echo "</ol>";

              ?>



           <p><a href="index.php">Menu</a></p> 
      
     </body>



</html>
