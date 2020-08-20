
<?php

$to = 'paidesigns.info@gmail.com'; /* <----add your e-mail*/
$Subject = "Work";/*what subject you want to receive your email;*/

//Don't touch this please //
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$contact_message = $_POST['message'];


// this is the headers//
$headers .= "Content-type: text/html;\r\n";
$headers .= "From: $email"; 

//the mail Function
mail($to, $Subject, $contact_message, $headers);
//this message will show up when you hit Submit button//
echo "Email has been sent! Thank you $name";
?>