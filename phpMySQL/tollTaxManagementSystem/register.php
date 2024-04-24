<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $registration_number = $_POST['registration_number'];
    $owner_name = $_POST['owner_name'];
    $vehicle_type = $_POST['vehicle_type'];
    $date_registered = $_POST['date_registered'];

    $sql = "INSERT INTO vehicles (registration_number, owner_name, vehicle_type, date_registered) 
            VALUES ('$registration_number', '$owner_name', '$vehicle_type', '$date_registered')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Vehicle Registration</title>
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
    <h2>Vehicle Registration</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Registration Number: <input type="text" name="registration_number" required><br>
        Owner Name: <input type="text" name="owner_name" required><br>
        Vehicle Type: <input type="text" name="vehicle_type" required><br>
        Date Registered: <input type="date" name="date_registered" required><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
