<?php
echo 'sdfhksjdbvjzd';
$to = "rauniyarbind@gmail.com";
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$headers = 'From: Arbind Rauniyar <rauniyarbind@gmail.com>' . "\r\n".
            'Reply-To: rauniyarbind@gmail.com' . "\r\n" .
            'X-Mailer :PHP' . phpversion();
$subject = "Response from websites";
$body = "you have received following details:";
$body .="\r\n Visiter Name: " . $name;
$body .="\r\n Visiter Email: " . $email;
$body .="\r\n Visiter Message: " . $message;

// if(mail($to,$subject,$body,$headers)){
//     echo 'we have received your submittion';
// }
// else {
//     'sorry, could not process submittion';
// }
?>