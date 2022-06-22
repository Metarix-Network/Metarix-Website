<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');



include("../config.php");
$contact_name = '';
$contact_email = '';
$contact_phone = '';
$contact_company_name = '';
$contact_services = '';
$contact_message = '';
if(isset($_POST))
{
	if($_POST['type'] == 'contact_us_client')
	{
		$contact_name = $_POST['contact_name'];
		$contact_email = $_POST['contact_email'];
		$contact_subject = $_POST['contact_subject'];
		$contact_message = $_POST['contact_message'];
		
	}
}

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require '../vendor/autoload.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = SENDER_EMAIL;
$senderName = SENDER_NAME;

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient = RECIPIENT_EMAIL;

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = USERNAME_SMTP;

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = PASSWORD_SMTP;

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
//$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = HOST;
$port = PORT;

// The subject line of the email
//$subject = "We got a new lead";
$subject = $contact_subject;

// The plain-text body of the email
//$bodyText =  "Email Test\r\nThis email was sent.";

// The HTML-formatted body of the email
$bodyHtml = "<h1>You've received a new email</h1>";
$bodyHtml .= "<p>Name: ".$contact_name."</p>";
$bodyHtml .= "<p>E-mail: ".$contact_email."</p>";
$bodyHtml .= "<p>Message: ".$contact_message."</p>";

$mail = new PHPMailer(true);

try {
    // Specify the SMTP settings.
    $mail->isSMTP();
    $mail->setFrom($sender, $senderName);
    $mail->Username   = $usernameSmtp;
    $mail->Password   = $passwordSmtp;
    $mail->Host       = $host;
    $mail->Port       = $port;
    $mail->SMTPAuth   = true;
    $mail->SMTPSecure = 'tls';
    //$mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);
    $mail->addCustomHeader('X-SES-CONFIGURATION-SET');

    // Specify the message recipients.
    $mail->addAddress($recipient);
    // You can also add CC, BCC, and additional To recipients here.
    //$mail->addCC('');

    // Specify the content of the message.
    $mail->isHTML(true);
    $mail->Subject    = $subject;
    $mail->Body       = $bodyHtml;
    //$mail->AltBody    = $bodyText;
    $mail->Send();
    $response['status'] = '1';
    $response['message'] = 'Email sent successfully.';
	echo json_encode($response);
    //echo "Email sent!" , PHP_EOL;
} catch (phpmailerException $e) {
    //echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
    $response['status'] = '0';
    $response['message'] = 'Something went wrong!';
	echo json_encode($response);
} catch (Exception $e) {
    //echo "Email not sents. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
    $response['status'] = '0';
    $response['message'] = 'Something went wrong!';
	echo json_encode($response);
}


?>