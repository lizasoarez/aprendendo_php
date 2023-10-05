<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="utf-8">
    <title>Aprendendo PHP</title>
</head>
<body>

    <h2><b>Módulo 3</b></h2>
       <h3><b>Aula 1 - Revisitando o forEach</b></h3>

          <?php
               $array1 =["bola","jarro","faca","mesa","livro"];
               foreach($array1 as $objetos){
                print_r($objetos);
                echo "<br><br>";
               }

           ?>


    <p><a href="index.php">Menu</a></p>   

</body>
</html>
