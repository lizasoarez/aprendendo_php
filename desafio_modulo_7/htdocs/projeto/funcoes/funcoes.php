<?php

   function recebe($param){
      if (isset($_GET[$param])) return $_GET[$param];
       if (isset($_POST[$param])) return $_POST[$param];  
      return"";      
    }  

    function existe($param){
    return isset($_GET[$param]) || isset($_POST[$param]);      

    }
    function testar($param,$vlr){
      if(!existe($param)) return false;
       return recebe($param) == $vlr;
    }   
 function btn($param) {    
    if (isset($param) && ($param === "editar" || testar('acao', 'consultar'))) {
        echo "<button type=submit name=acao value=editar>Editar</button>";
    } else {
        echo "<button type=submit name=acao value=cadastro>Cadastrar</button>";
    }
}



?>



