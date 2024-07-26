<?php
// Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
session_start();
$em = $_SESSION['ff'];
require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';
include '../conn.php';

// Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    // Fetch user data from the database based on the email
    $sql = mysqli_query($con, "SELECT `email`, `password`, `username` FROM `registration` WHERE `email`='$em'");
    $rows = mysqli_fetch_array($sql);

    if (!empty($rows['password'])) {
        // Server settings
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'contact.thoughtfulsci@gmail.com';
        $mail->Password   = 'ojkwwzlhqbsnkxwm';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('contact.thoughtfulsci@gmail.com', 'Hotel');
        $mail->addAddress($rows['email']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Welcome to Resto';
        $mail->Body    = 'Your password: ' . $rows['password'];
        $mail->AltBody = 'Thanks For your Interest';

        // Send email
        $mail->send();

        echo "<script>alert('Message has been Sent');window.location.href='../login.php';</script>";
    } else {
        echo "<script>alert('Invalid user');window.location.href='../login.php';</script>";
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>
