<!--Aula 6 - Isolando uma camada Model e criando o Controller-->

<?php

    function conexao(){

            $host="localhost";
            $user="usuario";
            $password="senhadousuario";
            $bd="aulaphp";
            $porta="3307";            
            $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);
            return $conexao;
    }

    function obterDados(){

            $conexao=conexao();
            $sql = "SELECT id,nome,nota FROM notas";
            $consulta = $conexao->prepare($sql);
            $consulta->execute();
            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $dados;            
    }

   
?>





