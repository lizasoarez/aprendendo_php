<?php
require $_SERVER['DOCUMENT_ROOT'].'/vendor/autoload.php';
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$log= new Logger("level_log");   
$log->pushHandler(new StreamHandler('error.log',Logger::WARNING));
$log->debug('Nível DEBUG - Mensagem de depuração com informações detalhadas.');
$log->info('Nível INFO - Mensagem informativa indicando eventos normais ou marcos importantes.');
$log->notice('Nível NOTICE - Mensagem indicando eventos normais, mas notáveis.');
$log->warning('Nível WARNING - Mensagem de aviso indicando situações que precisam ser observadas.');
$log->error('Nível ERROR - Mensagem de erro que afetou a funcionalidade do aplicativo.');
$log->critical('Nível CRITICAL - Mensagem de erro crítico exigindo intervenção imediata.');
$log->alert('Nível ALERT - Mensagem que requer ação imediata.');
$log->emergency('Nível EMERGENCY - Mensagem de emergência indicando um estado crítico que requer intervenção imediata.');
?>