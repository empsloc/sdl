<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $make = $_POST['make'];
    $model = $_POST['model'];
    $year = $_POST['year'];
    $color = $_POST['color'];
    $registration_number = $_POST['registration_number'];

    $sql = "INSERT INTO cars (make, model, year, color, registration_number)
    VALUES ('$make', '$model', '$year', '$color', '$registration_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Car registered successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register Car</title>
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

<form action="register_car.php" method="post">
    <h2>Register Car</h2>
    Make: <input type="text" name="make"><br>
    Model: <input type="text" name="model"><br>
    Year: <input type="text" name="year"><br>
    Color: <input type="text" name="color"><br>
    Registration Number: <input type="text" name="registration_number"><br>
    <input type="submit" value="Register Car">
</form>

</body>
</html>
