<?php  
//Composer's autoload file loads all necessary files
require 'vendor/autoload.php';

$mail = new PHPMailer;

$mail->isSMTP(); 
$mail->Host = 'smtp.mailgun.org';  
$mail->SMTPAuth = true; 
$mail->Username = 'postmaster@sandbox39dc9323d646443a8058ce7637b80b6f.mailgun.org'; 
$mail->Password = 'de4779fd0839c652c0aa3802b357babc-7ca144d2-8a1faf57'; 
$mail->SMTPSecure = 'tls';  

$mail->From = 'iago.wilhelm@unidavi.edu.br';
$mail->FromName = 'Iago Wilhelm'; 
$mail->addAddress('gabriel.riscarolli@unidavi.edu.br', 'neni');    
$mail->isHTML(true); 


$mail->Subject = 'Email sent with Mailgun';
$mail->Body    = '<span style="color: red">Mailgun rocks</span>, thank you <em>phpmailer</em> for making emailing easy using this <b>tool!</b>';
$mail->AltBody = 'Mailgun rocks, shame you can't see the html sent with phpmailer so you're seeing this instead';

if(!$mail->send()) {  
    echo "Message hasn't been sent.";
    echo 'Mailer Error: ' . $mail->ErrorInfo . "n";
} else {
    echo "Message has been sent  n";

}
?>