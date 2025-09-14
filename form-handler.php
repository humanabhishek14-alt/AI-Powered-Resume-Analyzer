<?php
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com';
$email_subject = 'New Form Submission';

$email_body = "User First Name: $firstname\n".
              "Last Name: $lastname\n".
              "Email: $visitor_email\n".
              "Message: $message\n";

$to = 'kashyapabhishek01978@gmail.com';

$headers = "From: $email_from\r\n";
$headers .= "Reply-To: $visitor_email\r\n";

if (mail($to, $email_subject, $email_body, $headers)) {
    header("Location: index.html");
    exit();
} else {
    echo "Sorry, your message could not be sent.";
}
?>
