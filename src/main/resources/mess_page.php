<?php
       // from the form
       $email = trim(strip_tags($_POST['email']));
       $message = htmlentities($_POST['zprava']);

       // set here
       $subject = "Contact form submitted!";
       $to = 'niki.kh@seznam.cz';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email\r\n";
       $headers .= "Content-type: text/html\r\n";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect afterwords, if needed
       header('Location: thanks.html');
?>