<?php

namespace MasterCode\Email;

use PHPMailer\PHPMailer\PHPMailer;
use PHPmailer\PHPmailer\Exception;
use stdClass;

/**
 * DEXTER COMPANY | Class Email
 * @author Lucas A. R. Volpati <lucas.volpati@outlook.com>
 * @package MasterCode\Email
 */
class Email 
{
    /**
     * Config to TLS secure with port 465
     */
    public const CONF_SMTP_SECURE = PHPMailer::ENCRYPTION_SMTPS;
    public const CONF_SMTP_PORT = 465;
    public const CONF_SMTP_AUTH = true;
    
    private $mail = stdClass::class;

    /**
     * @var string $hostName
     * @var string $userSmtp
     * @var string $passwd
     * @var mixed $setSenderEmail
     * @var string $setSenderName
     * @var int|null $smtpDebug
     */
    public function __construct(
        string $hostName, 
        string $userSmtp, 
        string $passwd, 
        string $setSenderEmail, 
        string $setSenderName, 
        int $smtpDebug = null //2 for complete debug
        )
    {
        $this->mail = new PHPMailer(true);

        //Server settings
        $this->mail->SMTPDebug = $smtpDebug;
        $this->mail->isSMTP();
        $this->mail->Host       = $hostName;                   
        $this->mail->SMTPAuth   = self::CONF_SMTP_AUTH;                                  
        $this->mail->Username   = $userSmtp;
        $this->mail->Password   = $passwd;
        $this->mail->SMTPSecure = self::CONF_SMTP_SECURE;
        $this->mail->Port       = self::CONF_SMTP_PORT;
        $this->mail->setFrom($setSenderEmail, $setSenderName);

        
    }

    /**
     * @var string $emailReceiver
     * @var string $receiverName
     * @var string $subject
     * @var mixed $body
     * @var string $replyMail
     * @var string $replyName
     */
    public function sendEmail(
        string $emailReceiver, 
        string $receiverName, 
        string $subject, 
        mixed $body, 
        string $replyMail, 
        string $replyName
        ): bool
    {
        try {
                    
            //Recipients
            $this->mail->addAddress($emailReceiver, $receiverName);
            $this->mail->addReplyTo($replyMail, $replyName);
        
            //Content
            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $body;
        
            $this->mail->send();
            
            return true;
        } catch (Exception $e) {
            echo "A mensagem não pôde ser enviada. Erro: {$this->mail->ErrorInfo} {$e->getMessage()}";
        }
    }
}