<?php

$email2 ='contact@vitcmun.in';
/*if(isset($_POST["submit"])){
// Checking For Blank Fields..
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else{*/
$subject = 'Welcome to the VITCMUN Family';
echo $subject;
$message = "Dear \r\n Your application has been received for the VITCMUN 18.</br> The allotments for this round will be </br> released on 11th February 2018. </br> Keep checking our social media pages for updates. </br> Yours faithfully, </br> Siddhant Mukerjee </br> Secretary General, VITCMUN 18";
echo $message;

$headers = 'From: Secretary General <contact@vitcmun.in>' . PHP_EOL .
    'Reply-To: Secretary General <contact@vitcmun.in>' . PHP_EOL .
    'X-Mailer: PHP/' . phpversion();

//$headers .= 'Cc:'. $email2 . "\r\n"; // Carbon copy to Sender
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("hardikahuja9999@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
//}
//}
?>