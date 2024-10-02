<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
     $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $location = $_POST["location"];
    $enquiry = $_POST["enquiry"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    
    // Set recipient email address
    $to = "eagleloanstaff2021@gmail.com";  // Replace with your email address

    // Create email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain;charset=utf-8\r\n";

    // Compose email message
    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
     $emailMessage .= "Phone: $phone\n";
      $emailMessage .= "Location: $location\n";
       $emailMessage .= "Enquiry for: $enquiry\n";
    $emailMessage .= "Subject: New Eagle Loan Enquiry\n\n";
    $emailMessage .= "Message:\n$message";

    // Send email
    if (mail($to, $subject, $emailMessage, $headers)) {
        // If the email is sent successfully, provide a success response
        echo "success";
    } else {
        // If there is an error in sending the email, provide an error response
        echo "error";
    }
} else {
    // If the request method is not POST, provide an error response
    echo "error";
}
?>
