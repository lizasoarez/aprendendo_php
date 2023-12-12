<?php
include "const.php";
// Carregando a classe PHPMailer
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';

function enviaEmail($email,$assunto,$mensagem){
    global $USERNAME,$SENHA;

// Criando uma instância do PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

// Configurando do servidor SMTP
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $USERNAME;
$mail->Password = $SENHA;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Configuração do e-mail
$mail->setFrom($USERNAME, 'Sistema');
$mail->addAddress($email,'');
$mail->Subject = $assunto;
$mail->Body    = $mensagem;
$mail->AltBody = 'Testando email';

// Verificando se o e-mail foi enviado com sucesso
if ($mail->send()) {
    echo 'E-mail enviado com sucesso!';
} else {
    echo 'Erro ao enviar o e-mail: ' . $mail->ErrorInfo;
}
//´Com esta configuração deu tudo certo 
}
?>