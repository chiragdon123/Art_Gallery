<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'chirag09@gmail.com';

$email_subject = 'New form submission';

$email_body = "user name: $name.\n". 
                "user Email: $visitor_email.\n".
                "subject:$subject.\n".
                "User Message: $message.\n";

$to = 'avinash123@gmail.com';

$headers = "Form : $email_form \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail($to , $email_subject, $email_body, $headers);

header("Location: contact.html");


?>