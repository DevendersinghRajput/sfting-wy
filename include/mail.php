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

<<<<<<< HEAD
$url = "https://hooks.slack.com/services/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"; // Replace with your own webhook URL
=======
$url = "https://hooks.slack.com/services/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"; // Replace with your own webhook URL
>>>>>>> 0cdf4cbc5bb0cfa96db5dc9860f056d0db7d1ddc
$data = array(
    "text" => "New message from"
); 
$options = array(
    "http" => array(
        "header"  => "Content-type: application/json",
        "method"  => "POST",
        "content" => '{"text":"Hello, World!"}',
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === false) {
    echo "The message was not sent to Slack.";
} else {
    echo "The message has been sent to Slack.";
};

?>

