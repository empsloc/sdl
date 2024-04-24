<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <style>
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

h2 {
    margin-bottom: 10px;
}

input[type="text"], button {
    margin-bottom: 10px;
    padding: 5px;
}

button {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

.books-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
    grid-gap: 20px;
}

.book {
    border: 1px solid #ddd;
    padding: 10px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Add Book</h2>
        <form action="add_book.php" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="text" name="bookname" placeholder="Book Name">
            <button type="submit">Add</button>
        </form>
        <h2>Books Catalogue</h2>
        <div class="books-container">
            <?php
            // Database connection
            $conn = mysqli_connect("localhost", "root", "", "bookstore");

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }

            // Retrieve books from database
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);

            // Display books
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='book'>";
                    echo "<p><strong>User:</strong> " . $row['username'] . "</p>";
                    echo "<p><strong>Book:</strong> " . $row['bookname'] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "0 results";
            }

            mysqli_close($conn);
            ?>
        </div>
    </div>
</body>
</html>
