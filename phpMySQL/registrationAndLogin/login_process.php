<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "toll_tax";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // SQL query to check user credentials
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Set session variables
        $_SESSION['username'] = $username;
        // Redirect to dashboard after successful login
        header("Location: dashboard.php");
        exit;
    } else {
        echo "Invalid username or password";
    }
}

$conn->close();
?>
