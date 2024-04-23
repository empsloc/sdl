<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "complaint_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    
    $sql = "INSERT INTO complaints (title, description) VALUES ('$title', '$description')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Complaint submitted successfully! <a href='index.php'>Back to Submission Page</a>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
