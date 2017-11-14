<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
  $to = 'ashok@finflux.co,dhiru.iitm@gmail.com'; // Your e-mail address here.
  $body = "\nName: {$_POST['name']}\nEmail: {$_POST['email']}\n\n\n{$_POST['message']}\n\n";
  mail($to, "New contact request on finflux.co", $body); // E-Mail subject here.
    }
}
?>