<?php


$name = $_POST['name'];
$sender = $_POST['sender'];

$to = 'floressadesign@gmail.com';
$subject = 'from: ' . $name;

$message = $_POST['message'];

$headers .= 'From: '.$sender."\r\n".
'Reply-To: '.$sender."\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

if (mail($to, $subject, $message)) {
    echo("<p>Email successfully sent!</p>");
   } else {
    echo("<p>Email delivery failed…</p>");
   }

?> 