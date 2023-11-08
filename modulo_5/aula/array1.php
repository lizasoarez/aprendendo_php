<!DOCTYPE html>
<html lang="pt">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aprendendo PHP</title>
    </head>
    <body>
        

        <?php
             $array1=array();
             print_r($array1);
             echo "<br>";

             $array1[]=10;
             print_r($array1);
             echo "<br>";
             $array1[]=20;
             print_r($array1);
             echo "<br>";
             $array1[]=30;
             print_r($array1);
             echo "<br>";
             $array1[]=40;
             print_r($array1);
             echo "<br>";
             $array1[]=50;
             print_r($array1);
             echo "<br>";

             echo "<hr>";

             foreach ($array1 as $item){
              echo "(Item do array: $item)<br>";}



        ?>      
    </body>
</html>
      