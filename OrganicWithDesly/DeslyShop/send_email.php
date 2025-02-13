<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "khozadesly17@gmail.com"; // Replace with your email address
    $subject = "New Order Submission";
    
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $product = htmlspecialchars($_POST['product']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $postalCode = htmlspecialchars($_POST['postalCode']);
    $description = htmlspecialchars($_POST['description']);
    
    $message = "Full Name: $name\n";
    $message .= "Email Address: $email\n";
    $message .= "Phone Number: $phone\n";
    $message .= "Product: $product\n";
    $message .= "Address: $address\n";
    $message .= "City: $city\n";
    $message .= "Postal Code: $postalCode\n";
    $message .= "Description: $description\n";
    
    $headers = "From: $email\r\n";
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Order submitted successfully.";
    } else {
        echo "Failed to submit the order.";
    }
}
?>
