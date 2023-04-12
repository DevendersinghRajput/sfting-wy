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
      echo "works 1";
  } else {
      echo "The email message was not sent 1.";
  }
}

// header("Location: https://www.shiftingway.com/user?q=".$pageid);

  // Build the Slack message
  $message = "*New inquiry*\nName: $name\nPhone Number: $PhoneNumber\nWhat Moving: $whatmoving\nRelocation From: $reloctionFrom\nRelocation To: $reloctionto\nSource: $source";

  // Slack webhook URL
  $slack_url = 'https://hooks.slack.com/services/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';

  // Set up the Slack API request
  $slack_data = array('text' => $message);
  $options = array(
      'http' => array(
          'header'  => 'Content-type: application/json',
          'method'  => 'POST',
          'content' => json_encode($slack_data)
      )
  );
  $context  = stream_context_create($options);
  $result = file_get_contents($slack_url, false, $context);

  // Check if the message was sent successfully
  if ($result === false) {
      echo "The message was not sent to Slack.";
  } else {
      echo "The message was sent to Slack.";
  }



?>

