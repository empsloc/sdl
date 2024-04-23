<!DOCTYPE html>
<html>
<head>
    <title>Registered Emails</title>
    <style>
        body {
    font-family: Arial, sans-serif;
}
form {
    width: 300px;
    margin: 0 auto;
}
label {
    display: block;
    margin-bottom: 5px;
}
input[type="email"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
}
button {
    padding: 8px 16px;
    background-color: #007bff;
    color: #fff;
    border: none;
    cursor: pointer;
}

    </style>
</head>
<body>
    <h2>Registered Emails</h2>
    <?php
    include 'db_connect.php';

    $sql = "SELECT * FROM registered_emails";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul>";
        while($row = $result->fetch_assoc()) {
            echo "<li>" . $row["email"] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No registered emails.";
    }

    $conn->close();
    ?>
</body>
</html>
