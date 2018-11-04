<?php

require('../sendgrid-php/sendgrid-php.php');

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("contato@dunamiel.com", "Dunamiel");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo($_POST['email'], $_POST['name']);
$email->addContent("text/plain", "Muito obrigado por entrar em contato. Assim que possivel nos responderemos");
$email->addContent(
    "text/html", "<strong>Muito obrigado por entrar em contato. Assim que possivel nos responderemos</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "<br>";
    echo "<pre>";
    print_r($response->headers()) . "<br>";
    echo "</pre>";
    echo "<br>";
    echo "<pre>";
    print_r($response) . "<br>";
    echo "</pre>";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."<br>";
}

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom($_POST['email'], $_POST['name']);
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("gouveia.maicon@gmail.com", "Hélio");
$email->addContent(
    "text/html", 
    "<b>Nome:</b>".$_POST['name']."<br>".
    "<b>Email:</b>".$_POST['email']."<br>".
    "<b>Telefone:</b>".$_POST['phone']."<br>".
    "<b>Mensagem:</b>".$_POST['message']."<br>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "<br>";
    echo "<pre>";
    print_r($response->headers()) . "<br>";
    echo "</pre>";
    echo "<br>";
    echo "<pre>";
    print_r($response) . "<br>";
    echo "</pre>";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."<br>";
}



?>