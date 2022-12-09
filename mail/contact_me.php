<?php
// Check for empty fields
$ame = $_POST{'name'};
$email = $_POST{'email'};
$message = $_POST['message'];
$objet = $_POST{'objet'};


$email_message = "

Name: ".$name."
Email: ".$email."
Telephone: ".$telephone."
Objet: ".$objet."
Message: ".$message."

";

mail ("kemperessouma@gmail.com" , "New Message", $email_message);       
?>