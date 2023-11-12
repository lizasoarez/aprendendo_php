<?php
   require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';

   use Monolog\Logger;
   use Monolog\Handler\StreamHandler;

    $log= new Logger("meu_log");   
    $log->pushHandler(new StreamHandler('logaula2.log'));
    $log->error("Ocorreu um Erro");


   echo "Geramos logs...";

?>
