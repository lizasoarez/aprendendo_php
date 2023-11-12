<?php
function conexao(){

$host="localhost";
$usr="usuario";
$psw="senhadousuario";
$bd="aulaphp";
$porta="3307";

try{

$conexao = new PDO("mysql:host=$host;porta=$porta;dbname=$bd",$usr,$psw);

}catch (PDOException $e){

die("Erro de conexão. Por favor, tente novamente mais tarde.");

}return $conexao;}

function select(){

$conexao=conexao();
$sql = "SELECT id,nome,cidade,pais,telefone FROM clientes";
$buscar = $conexao->prepare($sql);
$buscar->execute();
$res = $buscar->fetchAll(PDO::FETCH_ASSOC);
return $res;            
}?>