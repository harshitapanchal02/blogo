<?php 

/*Here we are going to declare the variables*/
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$formcontent="VISITOR NAME: $name\\n\\nFEEDBACK: $message";
$recipient = "blogoholic17@gamil.com";
$subject = "Contact Form";

$mailheader = "From: $email\\r\\n";
$mailheader .= "Reply-To: $email\\r\\n";
$mailheader .= "MIME-Version: 1.0\\r\\n";

// Please specify your Mail Server - Example: mail.example.com.
ini_set("SMTP","localhost");

// Please specify an SMTP Number 25 and 8889 are valid SMTP Ports.
ini_set("smtp_port","25");

// Please specify the return address to use
ini_set('sendmail_from', 'blogoholic17@gmail.com');
//Save visitor name and entered message into one variable:
mail($recipient, $subject, $formcontent, $mailheader) or die("Failure");
echo "Thank You!";
?>