<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Donor Registration</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 400px;
        margin: 50px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    h2 {
        color: #333;
    }
    form {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    label {
        margin-bottom: 10px;
    }
    input[type="text"],
    input[type="number"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: 100%;
        box-sizing: border-box;
        margin-bottom: 15px;
    }
    input[type="submit"] {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>
</head>
<body>
<div class="container">
    <h2>Register as Blood Donor</h2>
    <form action="register_donor.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" required><br><br>
        <label for="blood_group">Blood Group:</label>
        <input type="text" id="blood_group" name="blood_group" required><br><br>
        <label for="contact_number">Contact Number:</label>
        <input type="text" id="contact_number" name="contact_number" required><br><br>
        <input type="submit" value="Register">
    </form>
</div>
</body>
</html>
