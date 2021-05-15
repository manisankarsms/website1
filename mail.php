<?php
$ar = json_decode(file_get_contents('php://input'),true);
$to = 'healthcenter@motherteresafoundation.org';
$subject = 'Test Message';
$from = 'melaniseexposure@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">This is from exposure developers</h1>';
$message .= '<p style="color:#080;font-size:18px;">it is just a text message</p>';
foreach($ar as $k=>$v){
    $message .= '<p style="color:#080;font-size:18px;">'.str_replace('_',' ',$k).'- </b>'.$v.'</b> </p>';
}
$message .= '</body></html>';
 
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Thanks for your Responds, We will Contact you shortly.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>