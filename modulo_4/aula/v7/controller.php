<?php 

    function recebePar($par){
      return $_GET[$par];
    }
    function existePar($par){
      return isset($_GET[$par]);
    }
    function teste($par,$valor){
      if(!existePar($par)) return false;
       return recebePar($par) == $valor;
    }

   include'./model.php';

    $id="";
    $nome="";
    $nota="";
    $acao="Cadastrar";

   if (teste('acao','Cadastrar')){
       insereDados(recebePar('nome'),recebePar('nota'));
   } else if(teste('acao','Remover')){
      removeDados(recebePar('id'));
   } else if(teste('acao','Editar')){
      editaDados(recebePar('id'),recebePar('nome'),recebePar('nota'));
   } else if(teste('acao','Consultar')){
      $dados=obterDadosId(recebePar('id'));
      
      $id = $dados[0]['id'];
      $nome = $dados[0]['nome'];
      $nota = $dados[0]['nota'];
      $acao ="Editar";
      
   }

   $dados=obterDados();
   include'./view.php';    

      
?>





