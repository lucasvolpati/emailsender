<?php

namespace Email\Email;


use PHPMailer\PHPMailer\PHPMailer;
use PHPmailer\PHPmailer\Exception;
use stdClass;

class Email 
{
    private $mail = stdClass::class;

    public function __construct($host, $userSmtp, $passwd, $smtpSecure, $port, $setFrom, $setFromName, $smtpDebug = null)
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;
        $this->mail->isSMTP();
        $this->mail->Host       = $host;                   
        $this->mail->SMTPAuth   = true;                                  
        $this->mail->Username   = $userSmtp;
        $this->mail->Password   = $passwd;
        $this->mail->SMTPSecure = $smtpSecure;
        $this->mail->Port       = $port;
        $this->mail->setFrom($setFrom, $setFromName);

        
    }


    public function sendEmail($address, $addressName, $subject, $body, $replyMail, $replyName) {
        try {
                    
            //Recipients
            $this->mail->addAddress($address, $addressName);
            $this->mail->addReplyTo($replyMail, $replyName);
        
            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
        
            $this->mail->send();
            
            return true;
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}