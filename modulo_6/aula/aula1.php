<?php
       require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php'; 

    $log= new Monolog\Logger("meu_log");   
    $log->pushHandler(new Monolog\Handler\StreamHandler('meu_log.log'));
    $log->error("Ocorreu um Erro");


   echo "Geramos logs...";

?>
