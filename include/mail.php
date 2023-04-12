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

$url = "https://hooks.slack.com/services/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"; // Replace with your own webhook URL
$data = array(
    "text" => "New message from ".$_GET['name']."\n".
              "Phone number: ".$_GET['PhoneNumber']."\n".
              "What moving: ".$_GET['whatmoving']."\n".
              "Relocation from: ".$_GET['reloctionFrom']."\n".
              "Relocation to: ".$_GET['reloctionto']
);
$options = array(
    "http" => array(
        "header"  => "Content-type: application/json",
        "method"  => "POST",
        "content" => json_encode($data),
    ),
);
$context  = stream_context_create($options);
$result = file_get_contents($url, false, $context);
if ($result === false) {
    echo "The message was not sent to Slack.";
} else {
    echo "The message has been sent to Slack.";
}
Replace the $url variable with your own webhook URL, and make sure that the $data array contains the correct information that you want to send to your Slack channel.





Regenerate

?>

