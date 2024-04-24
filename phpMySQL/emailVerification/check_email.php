<!DOCTYPE html>
<html>
<head>
    <title>Check Email</title>
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
    <h2>Check Email</h2>
    <form action="check_email_result.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <button type="submit">Check</button>
    </form>
</body>
</html>
