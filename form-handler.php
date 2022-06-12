<?php
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from='abc@info.com';
$email_subject='New Form';
$email_body='User Name:$name.\n'.
             'User Email:$email.\n'.
             'Subject:$subject.\n'.
             'Message:$message.\n';
$to='abc@gmail.com';
$headers="From:$email_from\r\n";
$headers.='Reply-to:$email\r\n';
mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");
 ?>
