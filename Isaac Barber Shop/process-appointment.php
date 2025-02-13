<?php
// Define recipient email
$to = "mabunda.wealth@gmail.com@gmail.com";

// Retrieve form data
$from = $_REQUEST['email'];
$name = $_REQUEST['name'];
$number = $_REQUEST['number'];
$service = $_REQUEST['service'];
$appointment_date = $_REQUEST['appointment_date'];
$appointment_time = $_REQUEST['appointment_time'];
$message = $_REQUEST['message'];

// Set email headers
$headers = "From: $from\r\n";
$headers .= "Reply-To: $from\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

// Set email subject
$subject = "New Appointment Request";

// Email body
$logo = 'img/logo.png';
$link = '#';

$body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Appointment Request</title></head><body>";
$body .= "<table style='width: 100%;'>";
$body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
$body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
$body .= "</td></tr></thead><tbody>";
$body .= "<tr><td style='border:none;'><strong>Name:</strong> {$name}</td>";
$body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Phone Number:</strong> {$number}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Service:</strong> {$service}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Appointment Date:</strong> {$appointment_date}</td></tr>";
$body .= "<tr><td style='border:none;'><strong>Appointment Time:</strong> {$appointment_time}</td></tr>";
$body .= "<tr><td style='border:none;' colspan='2'><strong>Additional Information:</strong> {$message}</td></tr>";
$body .= "</tbody></table>";
$body .= "</body></html>";

// Send email
$send = mail($to, $subject, $body, $headers);
?>
