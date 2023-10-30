<?php 

    function recebe($param){
      return $_GET[$param];
    }
    function existe($param){
      return isset($_GET[$param]);
    }
    function testar($param,$vlr){
      if(!existe($param)) return false;
       return recebe($param) == $vlr;
    }

   include'./model.php';

    $id="";       
    $nome="";
    $cidade="";
    $pais="";
    $telefone="";        
    $acao="cadastrar";


   if (testar('acao','cadastrar')){
       inserir(recebe('nome'),recebe('cidade'),recebe('pais'),recebe('telefone'));
   } else if(testar('acao','remover')){
      excluir(recebe('id'));
   } else if(testar('acao','editar')){
      atualiza(recebe('id'),recebe('nome'),recebe('cidade'),recebe('pais'),recebe('telefone'));
   } else if(testar('acao','consultar')){
      $infobase=selectId(recebe('id'));
      
      $id=$infobase[0]['id'];
      $nome=$infobase[0]['nome'];
      $cidade=$infobase[0]['cidade'];
      $pais=$infobase[0]['pais'];
      $telefone=$infobase[0]['telefone'];
      $acao="editar";
      
   }

   $infobase=select();
   include'./view.php';    

      
?>





