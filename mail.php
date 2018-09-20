<?php

include 'starter.php';


//$set = $minativemail->mailset();

//$send = $minativemail ->phpmail_method("minaatifabduallah@gmail.com","mina","hiiiiii");

//print_r($set);

/*// ---------------- SEND MAIL FORM ----------------
// send e-mail to ...
$to="minaatifabduallah@gmail.com";
// Your subject
$subject="Test";
// From
$header="from: your name <your email>";
// Your message
$message="Hello \r\n";
$message.="This is test\r\n";
$message.="Test again ";
// send email
$sentmail = mail($to,$subject,$message,$header);
// if your email succesfully sent
if($sentmail){
echo "Email Has Been Sent .";
}
else {
echo "Cannot Send Email ";
}*/

if ($minative_Mail ->mailset()['mailen']){
	

$reciver_mail = "minaatifabduallah@gmail.com";
$mail_subj = "Hello This is me";

$message_content = "<h2>This mail is to confirm your mail to activate your acount</h2>";
$message_content .= "<p>Kindly click <a href='page.php?id=2'>here</a> to acivave the account</p>";
$mail = $minative_Mail -> send_mail($reciver_mail,$mail_subj,$message_content);

if ($mail){
	echo "success";
}else echo "aaa";
print_r(error_get_last());

} else {
	echo "mail is dis";
}

