<?php
require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

ob_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

echo 'Sending';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize inputs and check for empty fields
    $userName = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $userEmail = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $userPhone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $userMessage = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    if (empty($userName) || empty($userEmail) || empty($userPhone) || empty($userMessage)) {
        echo 'empty';
        exit;
    }

    // Initialize PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.office365.com'; // Office 365 SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@dougbrownlaw.com'; // Replace with your Office 365 email
        $mail->Password = ''; // Replace with your Office 365 email password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Set "From" and recipient email
        $mail->setFrom('your-email@dougbrownlaw.com', 'Douglas D. Brown'); // Replace with your verified domain email
        $mail->addAddress('support@dougbrownlaw.com'); // Replace with recipient email
        $mail->addReplyTo($userEmail, $userName); // Reply-To set to the user's email    // Reply-To set to the user's email

        // Content for the site owner's email
        $mail->isHTML(true);
        $mail->Subject = 'Form submission from ' . $userName;
        $mail->Body = 'Name: ' . $userName . '<br>' .
            'Email: ' . $userEmail . '<br>' .
            'Phone: ' . $userPhone . '<br>' .
            'Message: ' . nl2br($userMessage);
        $mail->AltBody = 'Name: ' . $userName . '\n' .
            'Email: ' . $userEmail . '\n' .
            'Phone: ' . $userPhone . '\n' .
            'Message: ' . $userMessage;

        // Send email to site owner
        if ($mail->send()) {
            echo 'sent';
        } else {
            echo 'error';
        }

        // Send confirmation email to user
        $mail->clearAddresses(); // Clear the previous recipients
        $mail->addAddress($userEmail); // Add user's email

        $mail->Subject = 'Douglas D. Brown - Form submission confirmation';
        $mail->Body = "Hello $userName,<br><br>Your form has been submitted successfully. We will contact you shortly.<br><br>Best regards,<br>Douglas D. Brown";
        $mail->AltBody = "Hello $userName,\n\nYour form has been submitted successfully. We will contact you shortly.\n\nBest regards,\nDouglas D. Brown";

        $mail->send(); // Send confirmation email

        // Redirect after successful submission
        header('Location: thank-you');
        exit;
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo 'test';
}
?>
