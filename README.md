# emailsender

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

USE Email\Email\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port(587)",
    "from@email.com", "From Name");

$email->sendEmail("Subject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic constructor method! Once the constructor method is invoked within your application, your system will be able to trigger the triggers.

### Developer
* [Lucas A. R. Volpati] | <lucas.volpati@outlook.com> - Developer of this library and tutor of the Composer in Practice course! 
* [phpMailer] - Lib to send Email

License
----

MIT

****