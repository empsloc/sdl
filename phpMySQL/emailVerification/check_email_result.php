<?php
include 'db_connect.php';

$email = $_POST['email'];

$sql = "SELECT * FROM registered_emails WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Email exists in the database.";
} else {
    echo "Email does not exist in the database.";
}

$conn->close();
?>
