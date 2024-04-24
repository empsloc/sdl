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

// Fetch student ID to delete
$id = $_GET['id'];

// Delete student from enrolled table
$sql = "DELETE FROM admission WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Student deleted successfully";
} else {
    echo "Error deleting student: " . $conn->error;
}

$conn->close();
?>
