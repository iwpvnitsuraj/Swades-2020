<?php
require_once "Mail.php";
#include("Mail.php"); 
$from = "Web Master <znettest@ecellvnit.org>";    //your mail id
$to = "<sonu.wairagade@gmail.com>";
$subject = "Feedback messgae using PHP SMTP with SSL\r\n\r\n";
$body = "Feedback Message";
$host = "ssl://sharedlinux.cloudhostdns.net";
$port = "465";
$username = "znettest@ecellvnit.org";          //your mail id
$password = "cz%dN706";                      //password of this mail id

$headers = array ('From' => $from,
'To' => $to,
'Subject' => $subject);
$smtp = Mail::factory('smtp',
array ('host' => $host,
'port' => $port,
'auth' => true,
'username' => $username,
'password' => $password));

$mail = $smtp->send($to, $headers, $body);

if (PEAR::isError($mail)) {
echo("<p>" . $mail->getMessage() . "</p>");
} else {
echo("<p>Message successfully sent!</p>");
}
?>
