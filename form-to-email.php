<?php
  if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
$from='support @ Finflux';
$headers .= 'From: ' . $from . "\r\n";
    $to = 'info@finflux.co'; // Your e-mail address here.
    $body = "\nName: {$_POST['name']}\nEmail: {$_POST['email']}\n\n\n{$_POST['message']}\n\n";
    mail($to, "New contact request on finflux.co", $body,$headers); // E-Mail subject here.
  }
?>
