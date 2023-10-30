<!-- Aula 8 - Implementando consulta e edição-->
<!--Desafio-->


<?php

    function conexao(){

            $host="localhost";
            $usr="usuario";
            $psw="senhadousuario";
            $bd="aulaphp";
            $porta="3307"; 

            try {

            $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$usr,$psw);

            }catch (PDOException $e) {
                die("Erro de conexão. Por favor, tente novamente mais tarde.");
            }

            return $conexao; 


    }

    function select(){

            $conexao=conexao();
            $sql = "SELECT id,nome,cidade,pais,telefone FROM clientes";
            $buscar = $conexao->prepare($sql);
            $buscar->execute();
            $infobase = $buscar->fetchAll(PDO::FETCH_ASSOC);
            return $infobase;            
    }

    function selectId($id){

            $conexao=conexao();
            $sql = "SELECT id,nome,cidade,pais,telefone FROM clientes WHERE id=:id";
            $buscar = $conexao->prepare($sql);
            $buscar->bindParam(':id',$id);
            $buscar->execute();
            $infobase = $buscar->fetchAll(PDO::FETCH_ASSOC);
            return $infobase;            
    }

    function atualiza($id,$nome,$cidade,$pais,$telefone){

            $conexao=conexao();
            $sql="UPDATE clientes SET nome=:nome, cidade=:cidade, pais=:pais, telefone=:telefone WHERE id=:id";
            $buscar=$conexao->prepare($sql);
            $buscar->bindParam(':id',$id);
            $buscar->bindParam(':nome',$nome);
            $buscar->bindParam(':cidade',$cidade);
            $buscar->bindParam(':pais',$pais);
            $buscar->bindParam(':telefone',$telefone);
            $buscar->execute();            
    }

    function inserir($nome,$cidade,$pais,$telefone){

            $conexao=conexao();
            $sql="INSERT INTO clientes(nome,cidade,pais,telefone) VALUES(:nome,:cidade,:pais,:telefone)";
            $buscar=$conexao->prepare($sql);
            $buscar->bindParam(':nome',$nome);
            $buscar->bindParam(':cidade',$cidade);
            $buscar->bindParam(':pais',$pais);
            $buscar->bindParam(':telefone',$telefone);
            $buscar->execute();            
    }

    function excluir($id){

            $conexao=conexao();
            $sql="DELETE FROM clientes WHERE id=:id";
            $buscar = $conexao->prepare($sql);
            $buscar->bindParam(':id',$id);            
            $buscar->execute();            
    }                      
?>





