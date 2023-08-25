<?php
require __DIR__ ."/../vendor/autoload.php";

use EmailSender\Dispatch;

$mail = new Dispatch(
    "smtps.domain.com",
    "sender@domain.com",
    "12345678",
    "sender@domain.com",
    "My Name"
);

$mail->sendEmail(
    "receiver@domain.com",
    "Receiver Name",
    "Contact By Site",
    "Here is the formulary message by your site.",
    "client@email.com", //get from formulary
    "Client Name"
);
