<?php
$subject = $_POST['subject'];

$message = $_POST['detail'];

$mail_from = $_POST['customer_mail'];

$header = $_POST['from: $name <$mail_from>'];

$to = $_POST['damani.kumar@gmail.com']

$send_contact = mail($to,$subject, $message, $header);

if($send_contact){
	echo "weve reasdfsdf";
}

else {
	echo "error";
}
?>