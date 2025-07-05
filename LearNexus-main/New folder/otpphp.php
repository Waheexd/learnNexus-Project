<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP; // Add this line

require 'D:\XAMPP\htdocs\phpmailer\src\Exception.php';
require 'D:\XAMPP\htdocs\phpmailer\src\PHPMailer.php';
require 'D:\XAMPP\htdocs\phpmailer\src\SMTP.php';


error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnexus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['email'];

    // Check if the email exists in the registration table
    $check_query = "SELECT * FROM registration WHERE email='$user'";
    $check_result = $conn->query($check_query);

    if (!$check_result) {
        die("Query failed: " . $conn->error);
    }

    if ($check_result->num_rows > 0) {
        // User found, generate and store OTP
        $otp = mt_rand(100000, 999999); // Generate a random 6-digit OTP
        
        // Update OTP in registration table
        $update_query = "UPDATE registration SET otp='$otp' WHERE email='$user'";
        if ($conn->query($update_query) === TRUE) {
            // Send email with OTP
            $mail = new PHPMailer(true);
            try {
                //Server settings
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'workforlearnexus@gmail.com'; // Replace with your Gmail email address
                $mail->Password = 'nekl cwsg hvnr korb'; // Replace with your Gmail password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                $mail->Port = 587;

                //Recipients
                $mail->setFrom('workforlearnexus@gmail.com', 'LearNexus'); // Replace with your name and email address
                $mail->addAddress($user);

                // Content
                $mail->isHTML(true);
                $mail->Subject = 'OTP Verification';
                $mail->Body = '  Your OTP for password reset is: ' . $otp;

                // Enable verbose debug output
                //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                //$mail->Debugoutput = function($str, $level) { echo "debug level $level; message: $str"; }; // Print debug output to the screen

                $mail->send();
                // Show popup message
                echo "<script>alert('OTP sent successfully');</script>";
                // Redirect to forgot.html after 2 seconds
                echo "<script>setTimeout(function(){ window.location.href = 'recoverynew.html'; }, 1000);</script>";
            } catch (Exception $e) {
                echo "Failed to send OTP. Please try again later. Error: {$mail->ErrorInfo}";
            }
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        // User not found
        echo "The provided email is not registered.";
    }
}

// Close the database connection
$conn->close();
?>
