<?php
include 'db_connect.php';

// PHP code for searching items
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['search'])) {
    $search_term = $_GET['search'];
    $sql = "SELECT * FROM items WHERE name LIKE '$search_term%'";
    $result = $conn->query($sql);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Items</title>
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
    <h2>Search Items</h2>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Search:</label>
        <input type="text" name="search" id="search" required>
        <input type="submit" value="Search">
    </form>

    <div id="search-results">
        <?php
        if (isset($result) && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<p>Name: " . $row["name"] . " - Price: $" . $row["price"] . "</p>";
            }
        } else {
            echo "No results found";
        }
        ?>
    </div>

    <script>
    // JavaScript code for dynamic search results display
    document.getElementById("search").addEventListener("input", function() {
        var searchInput = this.value.trim().toLowerCase();
        var items = document.querySelectorAll("#search-results p");
        items.forEach(function(item) {
            var itemName = item.textContent.toLowerCase();
            if (itemName.indexOf(searchInput) !== -1) {
                item.style.display = "block";
            } else {
                item.style.display = "none";
            }
        });
    });
    </script>
</body>
</html>
