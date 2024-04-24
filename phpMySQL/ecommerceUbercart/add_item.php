<?php
// PHP code for adding item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    include 'db_connect.php';

    // Retrieve form data
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];

    // Prepare and execute SQL query to insert new item
    $sql = "INSERT INTO items (name, price, description) VALUES ('$name', '$price', '$description')";

    if ($conn->query($sql) === TRUE) {
        echo "New item added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Item</title>
    <style>
    /* styles.css */

/* Body styles */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

/* Form styles */
form {
    margin: 20px;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f9f9f9;
}

label {
    display: block;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 3px;
}

input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 3px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

/* Item display styles */
p {
    margin: 10px 0;
}

/* Error message styles */
.error {
    color: red;
}

    </style>
</head>
<body>
    <h2>Add New Item</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Price:</label>
        <input type="number" name="price" required><br>
        <label>Description:</label><br>
        <textarea name="description"></textarea><br>
        <input type="submit" name="submit" value="Add Item">
    </form>
</body>
</html>
