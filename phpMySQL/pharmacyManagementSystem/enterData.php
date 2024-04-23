<!DOCTYPE html>
<html>
<head>
    <title>Add Medicine</title>
  <style>
    /* General Styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 800px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    margin-bottom: 20px;
}

form {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"],
input[type="number"],
textarea {
    width: calc(100% - 20px);
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-bottom: 10px;
}

textarea {
    height: 100px;
}

.btn {
    display: block;
    width: 100%;
    padding: 10px;
    color: #fff;
    background-color: #007bff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

.btn:hover {
    background-color: #0056b3;
}

table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
}

th {
    background-color: #f2f2f2;
}

  </style>
</head>
<body>
    <div class="container">
        <h2>Add New Medicine abc</h2>
        <form method="post" action="">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="description">Description:</label>
            <textarea name="description" id="description" required></textarea><br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required><br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" required><br>
            <input type="submit" name="submit" value="Add Medicine" class="btn">
        </form>

        <?php
        // Connect to MySQL
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pharmacy";

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Add new medicine to the database
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            $description = $_POST['description'];
            $quantity = $_POST['quantity'];
            $price = $_POST['price'];

            $sql = "INSERT INTO medicines (name, description, quantity, price) VALUES ('$name', '$description', '$quantity', '$price')";

            if ($conn->query($sql) === TRUE) {
                echo "<p class='success'>New record created successfully</p>";
            } else {
                echo "<p class='error'>Error: " . $sql . "<br>" . $conn->error . "</p>";
            }
        }

        // Close MySQL connection
        $conn->close();
        ?>
    </div>
</body>
</html>