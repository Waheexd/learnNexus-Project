<?php
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

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.html");
    exit;
}



// Fetch the user's mobile number from the session
$user_mobile = $_SESSION['user_mobile'];

// Fetch the user's profile information from the database based on their mobile number
$sql = "SELECT fullname, email, birthdate, mobile, address FROM registration WHERE mobile = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $user_mobile);
$stmt->execute();
$result = $stmt->get_result();

// Fetch user information as an associative array
$userInfo = $result->fetch_assoc();

// Check if the mobile number stored in the session matches the mobile number of the user's profile
if ($userInfo['mobile'] !== $_SESSION['user_mobile']) {
    // If they don't match, redirect the user to the login page
    header("Location: login.html");
    exit;
}

// Close the database connection
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styleprofile.css">
</head>
<body>

<section id="sidebar">
    <a href="#" class="brand">
        <i class='bx bxs-smile'></i>
        Lear<span style="color:rgb(245, 223, 25);">N</span>exus</span>
    </a>
    <ul class="side-menu top">
        <li class="active">
            <a href="#">
                <i class='bx bxs-dashboard'></i>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-shopping-bag-alt'></i>
                <span class="text">Your Profile</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-doughnut-chart'></i>
                <span class="text">Username</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-message-dots'></i>
                <span class="text">Password</span>
            </a>
        </li>
        <li>
            <a href="#">
                <i class='bx bxs-group'></i>
                <span class="text">Help</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="logout.php" class="logout">
                <i class='bx bxs-log-out-circle'></i>
                <span class="text">Logout</span>
            </a>
        </li>
    </ul>
</section>

<section id="content">
    <nav>
        <i class='bx bx-menu'></i>
        <a href="#" class="nav-link"></a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
            </div>
        </form>
        <input type="checkbox" id="switch-mode" hidden>
        <label for="switch-mode" class="switch-mode"></label>
        <a href="#" class="notification">
            <i class='bx bxs-bell'></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>

    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <a href="#" class="btn-download">
                <i class='bx bxs-cloud-download'></i>
                <span class="text">Download PDF</span>
            </a>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    <h3>Name</h3>
                    <p><?php echo $userInfo['fullname']; ?></p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>2834</h3>
                    <p>Visitors</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Your Profile</h3>
                </div>
                <div class="content">
                    <table>
                        <thead>
                            <tr>
                                <th>Fields</th>
                                <th>Information</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Full Name</td>
                                <td><?php echo $userInfo['fullname']; ?></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><?php echo $userInfo['email']; ?></td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td><?php echo $userInfo['birthdate']; ?></td>
                            </tr>
                            <tr>
                                <td>Mobile</td>
                                <td><?php echo $userInfo['mobile']; ?></td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td><?php echo $userInfo['address']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</section>

<script src='https://cdn.jsdelivr.net/npm/chart.js'></script>
<script src='https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/simple-datatables.min.js'></script>
<script src="script.js"></script>
<script>
        // Check if the page is being refreshed
        if (window.performance) {
            if (performance.navigation.type === 1) {
                // Redirect to logoutphp.php to clear the session
                window.location.href = 'logout.php';
            }
        }
    </script>
</body>
</html>
