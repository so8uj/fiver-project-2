<?php

$to = $_REQUEST['email'];
$subject = "Passcode";
$code = rand(10,100).rand(10,100).
$txt = "Your Passcode is ".$code;
$headers = "From: yourmail@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);