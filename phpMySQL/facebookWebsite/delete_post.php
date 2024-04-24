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

// Handling post deletion
if(isset($_GET['post_id'])) {
    $post_id = $_GET['post_id'];

    $sql = "DELETE FROM posts WHERE id=$post_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: view_post.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
