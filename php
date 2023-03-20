<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $to = 'Ashur.kun@gmail.com';
  $subject = 'New message from your website';
  $body = "Name: $name\nEmail: $email\n\n$message";
  if (mail($to, $subject, $body)) {
    echo 'Thank you for contacting us.';
  } else {
    echo 'There was a problem sending your message. Please try again.';
  }
}
?>