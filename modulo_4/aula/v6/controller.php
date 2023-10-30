<!-- Aula 7 - Implementando Inserção e exclusão de dados-->

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
   if (existePar('nome')){
       insereDados(recebePar('nome'),recebePar('nota'));
   }
    if(teste('acao','remover')){
      removeDados(recebePar('id'));
   }

   $arraycadastro=obterDados();
   include'./view.php';    

      
?>





