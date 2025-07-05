<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp']; // Fetch OTP from the form
    $password = $_POST['password'];

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $servername = "localhost";
    $username = "root";
    $dbpassword = ""; // Changed variable name to avoid conflict
    $dbname = "learnexus";

    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update the password with hashed password
    $updateSql = "UPDATE registration SET pass = '$hashedPassword' WHERE otp = '$otp'";
    if ($conn->query($updateSql) === TRUE) {
        // Password updated successfully, redirect to recoverynew.php
        echo "<script>alert('Updated successfully');</script>";
        echo "<script>setTimeout(function(){ window.location.href = 'signin.php'; }, 1000);</script>";

        exit();
    } else {
        // Error updating password, display error message
        echo "Error updating password: " . $conn->error;
    }

    $conn->close();
}
?>
