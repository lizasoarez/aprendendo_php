<!-- Aula 8 - Implementando consulta e edição-->

<?php

    function conexao(){

            $host="localhost";
            $user="usuario";
            $password="senhadousuario";
            $bd="aulaphp";
            $porta="3307"; 

            try {

            $conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$user,$password);

            }catch (PDOException $e) {
                die("Erro na conexão com o Banco de dados");}

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
     function obterDadosId($id){

            $conexao=conexao();
            $sql = "SELECT id,nome,nota FROM notas WHERE id=:id";
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->execute();
            $dados = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $dados;            
    }


    function editaDados($id,$nome,$nota){

            $conexao=conexao();
            $sql="UPDATE notas SET nome=:nome, nota=:nota WHERE id=:id";
            $consulta=$conexao->prepare($sql);
            $consulta->bindParam(':id',$id);
            $consulta->bindParam(':nome',$nome);
            $consulta->bindParam(':nota',$nota);
            $consulta->execute();
            
    }

    function insereDados($nome,$nota){

            $conexao=conexao();
            $sql="INSERT INTO notas(nome,nota) VALUES(:nome,:nota)";
            $consulta=$conexao->prepare($sql);
            $consulta->bindParam(':nome',$nome);
            $consulta->bindParam(':nota',$nota);
            $consulta->execute();
            
    }

    function removeDados($id){

            $conexao=conexao();
            $sql="DELETE FROM notas WHERE id=:id";
            $consulta = $conexao->prepare($sql);
            $consulta->bindParam(':id',$id);            
            $consulta->execute();
            
    }                      
?>





