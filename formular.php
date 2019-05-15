<?php
    $firstname = $_POST{'firstname'};
    $lastname = $_POST{'lastname'};
    $email = $_POST{'email'};
    $message = $_POST{'message'};

    $email_from = 'tanisha.photos';
    $email_subject = 'New Message tanisha.photos';
    $email_body = "firstname: $firstname.\n".
                  "lastname: $lastname.\n".
                  "email: $email.\n".
                  "message: $message.\n";

    $to ="tanisha.photos1@gmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $email \r\n";

    mail($to, $email-subject, $email_body, $headers);

    header ("location index.html");
?>
/**
 * Created by PhpStorm.
 * User: tanishaxsmile
 * Date: 24.04.19
 * Time: 13:13
 */