<?php
(if isset($_POST['submit']) ) {
    $name = $_POST['name'];
    $phone = $_POST['tel'];
    $cityName = $_POST['city'];
    $fromEmail = $_POST['email'];

    // Recipient Email
$mailTo= 'enquiry@soteriaschooledu.ng'

// Email subject
$subject = 'A new message Received From' .$name;

// email message body
$htmlContent = '<h2> Email Request Received </h2>
<p> <b>client Name: </b> '. $name. ' </p>
<p> <b> Phone Number: </b> '.$phone . ' </p>
<p> <b> State Name: </b> '.$state  Name. ' </p>
<p> <b> Email: </b> '.$fromEmail . ' </p> ;

//PHP header for sender info
$headers = "From: " .$name . "<".  $fromEmail . ">";
$headers .= "MIME-Version: 1.0\r\n ": 
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//PHP mailer function
$result = mail($mailTo, $subject, $htmlContent, $headers);

// error checking
if($result){
    $success = "The message was sent successfully!";
} else {
    $failed = "Error: Message not sent, Try again Later";
}




}
?>