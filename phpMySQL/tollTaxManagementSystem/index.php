<?php
include 'db_connection.php';

$sql = "SELECT v.*, IFNULL(SUM(t.toll_amount), 0) AS total_toll
        FROM vehicles v
        LEFT JOIN toll_transactions t ON v.id = t.vehicle_id
        GROUP BY v.id";

$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle List with Toll</title>
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
    <h2>Vehicle List with Toll</h2>
    <table border="1">
        <tr>
            <th>Registration Number</th>
            <th>Owner Name</th>
            <th>Vehicle Type</th>
            <th>Date Registered</th>
            <th>Total Toll</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row['registration_number']."</td>";
                echo "<td>".$row['owner_name']."</td>";
                echo "<td>".$row['vehicle_type']."</td>";
                echo "<td>".$row['date_registered']."</td>";
                echo "<td>".$row['total_toll']."</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No vehicles found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
