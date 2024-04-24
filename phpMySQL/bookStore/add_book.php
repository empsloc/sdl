<?php
// Database connection
$conn = mysqli_connect("localhost", "root", "", "bookstore");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get form data
$username = $_POST['username'];
$bookname = $_POST['bookname'];

// Insert book
$sql = "INSERT INTO books (username, bookname) VALUES ('$username', '$bookname')";
if (mysqli_query($conn, $sql)) {
    echo "Book added successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
