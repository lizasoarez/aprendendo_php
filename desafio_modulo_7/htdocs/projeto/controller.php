<?php

    function clientes(){

    $model= new Model();


if (testar('acao','cadastro')){
    $model->inserirClientes(recebe('nome'),recebe('email'));
   } else if(testar('acao','remover')){
    $model->excluirCliente(recebe('id'));
   } else if(testar('acao','editar')){
    $model->atualizaClientes(recebe('id'),recebe('nome'),recebe('email'));
   } else if(testar('acao','consultar')){
    $model->listarClientesId(recebe('id'));   

   }  

    $dados = $model->listarClientes();

    render("cliente.php", $dados);
}

    function produtos(){

    $model= new Model();


    if (testar('acao','cadastro')){
    $model->inserirProdutos(recebe('nome'),recebe('valor'));
   } else if(testar('acao','remover')){
    $model->excluirProdutos(recebe('id'));
   } else if(testar('acao','editar')){
    $model->atualizaProdutos(recebe('id'),recebe('nome'),recebe('valor'));
   } else if(testar('acao','consultar')){
    $model->listarProdutosId(recebe('id'));
   } 

    
   $dados = $model->listarProdutos();
   render("produto.php",$dados);      
    }


    function render($template,$dados){
    $id=recebe('id');
    $nome=recebe('nome');
    $email=recebe('email');
    $valor=recebe('valor');
    
    $arrayCadastro=$dados;
    include $template;
       
    }

?>    