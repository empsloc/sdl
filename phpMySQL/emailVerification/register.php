<?php
include 'db_connect.php';

$email = $_POST['email'];

$sql = "INSERT INTO registered_emails (email) VALUES ('$email')";

if ($conn->query($sql) === TRUE) {
    echo "Email successfully registered.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
