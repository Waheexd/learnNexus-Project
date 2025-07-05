<?php
error_reporting(E_ALL);
header('Content-Type: application/json');
ini_set('display_errors', 1);

// Start session
session_start();

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

// Initialize response array
$response = array();

// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST['uname'];
    $pass = $_POST['pass'];

    // Query the database
    $query = "SELECT * FROM registration WHERE mobile='$user'";
    $result = $conn->query($query);

    if (!$result) {
        die("Query failed: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($pass, $row['pass'])) {
            // Set $_SESSION['loggedin'] to true
            $_SESSION['loggedin'] = true;
            // Optionally, you can also store other user information in session
            $_SESSION['user_mobile'] = $row['mobile']; // Assuming 'mobile' is the column containing the user's mobile number
            // Redirect the user to the dashboard or another authorized pagedashb.php
            $response["success"] = true;
            echo json_encode($response);
            exit();
        } else {
            $response["error"] = true;
            $response["message"] = "OOPS....LOGIN FAILED - Incorrect Password";
        }
    } else {
        $response["error"] = true;
        $response["message"] = "OOPS....LOGIN FAILED - User not found";
    }
}

// Close the database connection
$conn->close();

// Return JSON response
echo json_encode($response);
?>
