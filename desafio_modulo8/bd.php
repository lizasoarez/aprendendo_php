<?php

    function conexao(){

        $host = "localhost";
        $usr = "usuario";
        $psw = "senhadousuario";
        $bd = "loja";
        $porta = "3307";

        try {

        $pdo = new PDO("mysql:host=$host;porta=$porta;dbname=$bd", $usr, $psw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
            return $pdo;

        } catch (PDOException $e) {

            die("Erro de conexão com o banco de dados: " . $e->getMessage());
        }
   }
   
?>