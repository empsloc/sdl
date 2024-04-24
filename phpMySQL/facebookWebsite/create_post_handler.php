<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "facebook";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handling post creation
if(isset($_POST['submit'])) {
    $content = $_POST['content'];

    $sql = "INSERT INTO posts (content) VALUES ('$content')";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_post.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
