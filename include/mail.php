<?php
if (isset($_POST['PhoneNumber'])) {
  //get data from form
  $name = $_POST['name'];
  $PhoneNumber = $_POST['PhoneNumber'];
  $whatmoving = $_POST['whatmoving'];
  $reloctionFrom = $_POST['reloctionFrom'];
  $reloctionto = $_POST['reloctionto'];
  $source = "shiftingway";

  // Mail Code
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

  $to = "ybhardwajboy@gmail.com";
  $subject = "Mail From website";
  $message = "Name = " . $name . "\r\nPhoneNumber = " . $PhoneNumber . "\r\nwhatmoving =" . $whatmoving . "\r\nReloctionFrom =" . $reloctionFrom . "\r\nreloctionto =" . $reloctionto;

  $headers = 'From: contact@thepackersmoversdelhi.com'       . "\r\n" .
               'Reply-To: contact@thepackersmoversdelhi.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

  if(mail($to,$subject,$message, $headers)) {
      echo "sent";
  } else {
      echo "The email message was not sent.";
  }
}

// header("Location: https://www.shiftingway.com/user?q=".$pageid);

?>
