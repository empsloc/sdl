<?php
// PHP code for removing item
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    include 'db_connect.php';

    // Retrieve item ID from the form
    $item_id = $_POST['item_id'];

    // Prepare and execute SQL query to delete the item
    $sql = "DELETE FROM items WHERE id = $item_id";

    if ($conn->query($sql) === TRUE) {
        echo "Item removed successfully";
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
    <title>Remove Existing Item</title>
    <style>
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
    <h2>Remove Existing Item</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Item ID:</label>
        <input type="text" name="item_id" required><br>
        <input type="submit" name="delete" value="Delete Item">
    </form>
</body>
</html>
