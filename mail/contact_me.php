<?php
// Check for empty fields
$ame = $_POST{'name'};
$email = $_POST{'email'};
$objet = $_POST{'objet'};
$message = $_POST['message'];



$email_message = "

Name: ".$name."
Email: ".$email."
Objet: ".$objet."
Message: ".$message."

";

mail ("kemperessouma@gmail.com" , "New Message", $email_message);       
?>
