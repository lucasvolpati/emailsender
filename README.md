# emailsender - PHP

# Notification library via email using PHPMailer class

This library has the function of sending email using the phpmailer library. Doing this action in an uncomplicated way is essential for any system.

To install the library, run the following command:

```sh
composer require mastercode/emailsender
```

To use the library, just require composer to autoload, invoke the class and call the method:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE MasterCode\Email\Email;

$mail = new Email("smtps.domain.com", "sender@domain.com", "12345678", "sender@domain.com", "My Name");

$mail->sendEmail("receiver@domain.com", "Receiver Name", "Contact By Site", "Here is the formulary message by your site.", "client@email.com", "Client Name");
```

Note that the entire configuration of sending the email is using the magic constructor method! Once the constructor method is invoked within your application, your system will be able to trigger the triggers.

### Developer
* [Lucas A. R. Volpati] | <lucas.volpati@outlook.com> - Developer of this library and tutor of the Composer in Practice course! 
* [phpMailer] - Lib to send Email

License
----

MIT - Make good use.

****
