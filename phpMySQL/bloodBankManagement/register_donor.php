<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to MySQL database
    $conn = new mysqli("localhost", "root", "", "blood_bank");

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and bind parameters
    $stmt = $conn->prepare("INSERT INTO donors (name, age, weight, blood_group, contact_number) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sidsi", $name, $age, $weight, $blood_group, $contact_number);

    // Set parameters and execute
    $name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $blood_group = $_POST['blood_group'];
    $contact_number = $_POST['contact_number'];

    if ($stmt->execute() === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close connection
    $stmt->close();
    $conn->close();
}
?>
