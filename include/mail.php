<?php
if (isset($_GET['PhoneNumber'])) {
  //get data from form
  $name = $_GET['name'];
  $PhoneNumber = $_GET['PhoneNumber'];
  $whatmoving = $_GET['whatmoving'];
  $reloctionFrom = $_GET['reloctionFrom'];
  $reloctionto = $_GET['reloctionto'];
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
      //  header("Location:https://quick.asknavigator.com/survey.php");
  } else {
      echo "The email message was not sent.";
  }
}

// header("Location: https://www.shiftingway.com/user?q=".$pageid);

?>

