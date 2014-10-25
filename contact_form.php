<?php

$contact_name = $_POST['contact_name'];
$contact_email = $_POST['contact_email'];
$contact_message = $_POST['contact_message'];
$to = 'info@jporlewicz.com';
$subject = 'JP Website Message';

$message = 'CONTACT NAME: ' . $contact_name . 'EMAIL: ' . $contact_email . "\n" . 'MESSAGE: ' . $contact_message;

mail ($to, $subject, $message, 'From: ' . $contact_name);
header("Location: http://www.jporlewicz.com/thank-you.html");

?>