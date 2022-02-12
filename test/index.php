<?php
require "../lib-ext/autoload.php";

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
    "destinatario@domain.com.br", //Email que receberá o envio.
    "Nome Destinatario", //Nome do destinatário.
    "assunto", //Assunto do e-mail.
    "Corpo do email (conteudo)", //Conteudo do e-mail, corpo, pode receber html.
    "emailpararesposta@domains.com.br", //Email do cliente que fez contato, para onde será respondido.
    "Nome Reply" //Nome do contato.
);
