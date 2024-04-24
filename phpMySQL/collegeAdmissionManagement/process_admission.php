<?php
// Establish database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$course = $_POST['course'];

// Insert data into admission table
$sql = "INSERT INTO admission (name, email, phone, course) VALUES ('$name', '$email', '$phone', '$course')";

if ($conn->query($sql) === TRUE) {
    echo "Admission submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
