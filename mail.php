<?php
// -------------------------- Functions ---------------------------

// www.addedbytes.com/lab/email-address-validation/+php+email+address+validation+function
// uses ereg, may not work eventually
function check_email_address($email) {
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
	else return true;
}

function clean($name, $max) {
  # Turn tabs and CRs into spaces so they can't
  # fake other fields or extra entries
  $name = preg_replace("[[:space:]]", ' ', $name);
  # Escape < > and and & so they
  # can't mess withour HTML markup
  $name = preg_replace('&', '&amp;', $name);
  $name = preg_replace('<', '&lt;', $name);
  $name = preg_replace('>', '&gt;', $name);
  # Don't allow excessively long entries
  $name = substr($name, 0, $max);
  return $name;
}
// htmlspecialchars();

// -------------------------- Active ---------------------------

$name = strlen($_POST['name']);
$text = strlen($_POST['text']);
$email = strlen($_POST['email']);

// The message
if ($name > 100) $error++;
if ($email > 100) $error++; 
if ($text > 3000) $error++;

if (error > 0) die("fail ".$error);



$message = "Sent from http://www.arcplasmacutting.com/contact.php by ".$_POST['name']."\n\n".$_POST['text'];
$headers = "From: ".$_POST['email']."\r\nReturn-Path: ".$_POST['email']."\r\n";
$subject = "[CUSTOMER] \"".$_POST['name']."\"";

// $message = wordwrap($message, 70);

// checkboxes

if(isset($_POST['formWheelchair']) &&
   $_POST['formWheelchair'] == 'Yes')
{
    //echo "Need wheelchair access.";
}
else
{
    //echo "Do not Need wheelchair access.";
}   

require_once('recaptchalib.php');
  $privatekey = getenv('RECAPTCHA_PRIVATE_KEY');
  $resp = null;
  if ($privatekey) {
    $resp = recaptcha_check_answer ($privatekey,
                                  $_SERVER["REMOTE_ADDR"],
                                  $_POST["recaptcha_challenge_field"],
                                  $_POST["recaptcha_response_field"]);
  }

  if ($privatekey && !$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    header('Location: http://www.arcplasmacutting.com/contact.php?act=captcha');
  } else { 
    // Your code here to handle a successful verification
	if (check_email_address($_POST['email'])) {
		mail('arcplasmacutting@verizon.net', $subject, $message, $headers) or die("PHP mail() function failed to send email, please try again.");
		header('Location: http://www.arcplasmacutting.com/contact.php?act=success');
	} else {
		header('Location: http://www.arcplasmacutting.com/contact.php?act=invalid');
	}	
}
?>
