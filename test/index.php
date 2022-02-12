<?php
require __DIR__ ."/../vendor/autoload.php";

use Email\Email\Email;

$mail = new Email(
    "smptp.domain.com.br", //Servidor de envio smtp.
    "email@domain.com.br", //Email usuário.
    "pass", //Senha do email.
    "tls", // Assume "ssl" ou "tsl".
    "587", //Porta, assume 465 ou 587, verificar.
    "email.sender@domain.com", //Email que fará o envio.
    "My Name", //Nome do remetente.
    2 //Smtp Debug, o padrão é 2 .
);

$mail->sendEmail(
    $address, //Quem recebe o email
    $addressName, //Nome de quem recebe
    $subject, //Assunto do email.
    $body, //Conteudo do email, mensagem, etc.
    $replyMail, //Email do cliente que fez contato, para onde será respondido.
    $replyName //Nome do contato.
);
