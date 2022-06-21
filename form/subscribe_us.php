<?php
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
session_start();
include("../config.php");
require 'sendgrid/vendor/autoload.php';
if (isset($_POST["email"]) && $_POST["email"] != '') {
	$emails = $_POST["email"];
	$curl = curl_init();

	curl_setopt_array($curl, array(
	  CURLOPT_URL => "https://api.sendgrid.com/v3/marketing/contacts",
	  CURLOPT_RETURNTRANSFER => true,
	  CURLOPT_ENCODING => "",
	  CURLOPT_MAXREDIRS => 10,
	  CURLOPT_TIMEOUT => 30,
	  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	  CURLOPT_CUSTOMREQUEST => "PUT",
	  CURLOPT_POSTFIELDS => "{\"contacts\":[{\"email\":\"$emails\",\"custom_fields\":{}}]}",
	  CURLOPT_HTTPHEADER => array(
	    "authorization: Bearer ".$sendgridKey,
	    "content-type: application/json"
	  ),
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo 0 ;die;
	  //echo "cURL Error #:" . $err;die;
		//$_SESSION['message'] = "Something went wrong!";
		//header("location:/index.php");
	} else {
		$email = new \SendGrid\Mail\Mail();
		$email->setFrom(FROM_EMAIL, FROM_NAME);
		$email->setSubject('Subscribe with us');
		$email->addTo($emails, 'new');
		//$email->addContent("text/plain", 'Thank for Subscribe with us!');
		$msg_success = "You have <strong>successfully</strong> Subscribed. We'll get back to you soon.";
		$email->addContent("text/html", $msg_success);
		$sendgrid = new \SendGrid($sendgridKey);
		try {
		    $response = $sendgrid->send($email);
		    
		    /*print $response->statusCode() . "\n";
		    print_r($response->headers());
		    print $response->body() . "\n";*/
		    echo 1 ;die;
		} catch (Exception $e) {
		    //echo 'Caught exception: '. $e->getMessage() ."\n";
		    echo 1 ;die;
		}
		echo 1 ;die;
	  //echo $response;die;
		//$_SESSION['message'] = "Thank for Subscribe with us!";
		//header("location:/index.php");
	}
} else
{
echo 0 ;die;
}

