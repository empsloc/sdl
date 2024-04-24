<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['make'])) {
    $make = $_GET['make'];

    $sql = "SELECT * FROM cars WHERE make LIKE '%$make%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "Make: " . $row["make"]. " - Model: " . $row["model"]. " - Year: " . $row["year"]. "<br>";
        }
    } else {
        echo "0 results found";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Search Car</title>
    <style>
        form {
            width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form action="search_car.php" method="get">
    <h2>Search Car</h2>
    Search by Make: <input type="text" name="make"><br>
    <input type="submit" value="Search">
</form>

</body>
</html>
