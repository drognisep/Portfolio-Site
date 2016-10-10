<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$email_to = "contact@saylorsolutions.com";
$email_subject = "Contact Request: ";
$contact_err_msg = "";

function clean_input($input) {
  $input = trim($input);
  $input = stripslashes($input);
  $input = htmlspecialchars($input);
  return $input;
}

function redir_get() {
  $_POST = array(); // Clear the post array to prevent resubmission
  
  if(!empty($contact_err_msg)) {
    echo "<script>alert('Error message: $contact_err_msg')</script>";
    header("Location: sent_contact.php?error=true&error_msg=".$contact_err_msg);
    die();
  } else {
    header("Location: sent_contact.php");
    die();
  }
}

if(isset($_POST['name']) and isset($_POST['email']) and isset($_POST['message'])) {
  $contact_err_msg = "";
  
  function died($error) {
    echo $error;
    die();
  }
  
  $nametmp = clean_input($_POST['name']);
  if(strlen($nametmp) > 40) {
    $nametmp = substr($nametmp, 0, 40);
  }
  $email_subject = $email_subject . clean_input($_POST['name']);
  $email_contact = clean_input($_POST['email']);
  
  if(!filter_var($email_contact, FILTER_VALIDATE_EMAIL)) {
    $contact_err_msg = "Invalid email address format";
    redir_get();
  }
  
  $email_message = wordwrap(clean_input($_POST['message']),68,"\r\n");
  
  $headers = 'From: '.$email_contact."\r\n".
  'Reply-To: '.$email_contact."\r\n".
  'X-Mailer: PHP/'.phpversion();
  
  if(!(@mail($email_to, $email_subject, $email_message, $headers))) {
    $contact_err_msg = "Failed to queue message for delivery";
  }
  
  redir_get();
} else {
  $contact_err_msg = "No data posted";
  redir_get();
}
