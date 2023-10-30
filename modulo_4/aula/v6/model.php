<!-- Aula 7 - Implementando Inserção e exclusão de dados-->

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





