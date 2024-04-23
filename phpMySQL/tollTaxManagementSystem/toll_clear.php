<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehicle_id = $_POST['vehicle_id'];
    $toll_amount = $_POST['toll_amount'];

    $sql = "INSERT INTO toll_transactions (vehicle_id, toll_amount) 
            VALUES ('$vehicle_id', '$toll_amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Toll cleared successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Toll Clearing</title>
    <style>
        /* styles.css */

/* Body style */
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f2f2f2;
}

/* Header style */
h2 {
    color: #333;
    text-align: center;
}

/* Form style */
form {
    width: 50%;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

form input[type="text"],
form input[type="number"],
form select,
form input[type="date"],
form input[type="submit"] {
    width: 100%;
    margin-bottom: 10px;
    padding: 10px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 3px;
}

form input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    border: none;
    cursor: pointer;
}

form input[type="submit"]:hover {
    background-color: #45a049;
}

/* Table style */
table {
    width: 80%;
    margin: 20px auto;
    border-collapse: collapse;
}

table th,
table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

table th {
    background-color: #f2f2f2;
    color: #333;
}

/* Responsive styles */
@media screen and (max-width: 600px) {
    form {
        width: 90%;
    }
    
    table {
        width: 100%;
    }
}

    </style>
</head>
<body>
    <h2>Toll Clearing</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Select Vehicle:
        <select name="vehicle_id">
            <?php
            $sql = "SELECT * FROM vehicles";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<option value='".$row['id']."'>".$row['registration_number']."</option>";
                }
            }
            ?>
        </select><br>
        Toll Amount: <input type="number" name="toll_amount" required><br>
        <input type="submit" value="Clear Toll">
    </form>
</body>
</html>
