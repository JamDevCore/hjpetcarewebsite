<?php 

require_once('config.php');


$dbcon->set_charset('utf8');




?>

<?php

 function post_captcha($user_response) {
        $fields_string = '';
        $fields = array(
            'secret' => '6LfJzzgUAAAAAM6z9Pf3hCJ3xAbDJC8GqUKXdV8V',
            'response' => $user_response
        );
        foreach($fields as $key=>$value)
        $fields_string .= $key . '=' . $value . '&';
        $fields_string = rtrim($fields_string, '&');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, True);

        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    // Call the function post_captcha
    $res = post_captcha($_POST['g-recaptcha-response']);

    if (!$res['success']) {
        // What happens when the reCAPTCHA is not properly set up
        echo 'reCAPTCHA error: Check to make sure your keys match the registered domain and are in the correct locations. You may also want to doublecheck your code for typos or syntax errors.';
    } else {
        


$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];



$name = strip_tags($name);
$email = strip_tags($email);
$message = strip_tags($message);
$subject =strip_tags($subject);

$name = $dbcon->real_escape_string($name);
$email = $dbcon->real_escape_string($email);
$message = $dbcon->real_escape_string($message);
$subject = $dbcon->real_escape_string($subject);
$mailheader = "From: $email \r\n";	


$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script type = 'text/javascript'>alert('That is not a valid email address')</script>";
} else {
    


require 'class.phpmailer.php';
$mail = new PHPMailer;
$mail->setFrom($email, $name);
$mail->addAddress('helendjones12@hotmail.com', 'Helen Jones');
$mail->Subject  = $subject;
$mail->Body     = $message;
if($mail->send()) {
 
} else {
  echo "<script type ='text/javascript'>alert('Your message was not sent, please try again later.')</script>";
}



}    
}
    

?>










<?php

require('header.php');


?>

<div id="pagewrap">

<section id="thankyou">
	
<div id="sectionWrap">
	<h2 id="indexpagetitle">Thank you for you message</h2>
	<p class="sectiontext">Your message has been recieved and I will be in touch as soon as possible. In the meantime, check out and like my facebook page to see what I have been doing recently.</p>
	<a class ="nodec" href="index.php"><h3 class = "callnow">Return to homepage</div></a>

</div>


</section>







</div>

<?php
require('footer.php')

?>