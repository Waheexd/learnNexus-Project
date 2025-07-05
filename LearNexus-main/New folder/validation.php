<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "learnexus";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM registration WHERE otp = '$otp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "true";
    } else {
        echo "false";
    }

    $conn->close();
}
?>
