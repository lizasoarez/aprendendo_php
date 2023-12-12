<?php
    include "projeto/funcoes/funcoes.php";
    include "projeto/model.php";
    include "projeto/controller.php";
    

    function rota($rotas,$f){
        $path=parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

        if ($path == $rotas){
           $f();
           exit();
       }
    }

    rota("/clientes",function(){
    	clientes();
    });

    rota("/produtos",function(){
        produtos();
    });
        
    echo "Pagina não encontrada";
 
?>

