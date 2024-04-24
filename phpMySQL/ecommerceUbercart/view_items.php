<?php
// PHP code for viewing items
include 'db_connect.php';

// Retrieve existing items from the database
$sql = "SELECT * FROM items";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Existing Items</title>
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
    <h2>Existing Items</h2>
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<p>Name: " . $row["name"] . " - Price: $" . $row["price"] . "</p>";
        }
    } else {
        echo "No items found";
    }

    // Close database connection
    $conn->close();
    ?>
</body>
</html>
