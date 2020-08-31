<?php
include "vendor/autoload.php";

try {
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.yandex.ru', 465, 'ssl'))
        ->setUsername('elena-mbele@yandex.ru')
        ->setPassword('elena-mbele2020')
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

// Create a message
    $message = (new Swift_Message('Wonderful Subject'))
        ->setFrom(['elena-mbele@yandex.ru' => 'Elena'])
        ->setTo(['elena-bonito@yandex.ru' => 'Elena'])
        ->setBody('Here is the message itself')
    ;

// Send the message
    $result = $mailer->send($message);
    var_dump(['res' => $result]);
} catch (Exception $e) {
    var_dump($e->getMessage());
}

