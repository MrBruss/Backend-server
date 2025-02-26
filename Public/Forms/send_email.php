<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'src/PHPMailer.php';
require 'src/SMTP.php';
require 'src/Exception.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $email = htmlspecialchars($_POST['email']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $address = htmlspecialchars($_POST['address']);

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'desmondasamoah22@gmail.com'; // Replace with your Gmail address
        $mail->Password = 'sipd vntc zaoy orhq'; // Replace with your Gmail App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Email Settings
        $mail->setFrom('desmondasamoah22@gmail.com', 'Form Submission'); // Replace with your email
        $mail->addAddress('your-email@gmail.com'); // Recipient email (can be the same as sender)
        $mail->Subject = 'New Form Submission';
        $mail->Body = "You have received a new form submission:\n\n" .
                      "First Name: $firstName\n" .
                      "Last Name: $lastName\n" .
                      "Email: $email\n" .
                      "City: $city\n" .
                      "State: $state\n" .
                      "Address: $address";

        // Send the email
        $mail->send();


         // Redirect to success page
         header("Location: thankyou.html");
         exit();
    } catch (Exception $e) {
        echo "Error sending email: {$mail->ErrorInfo}";
    }
}
?>
