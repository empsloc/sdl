<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="register-container">
        <h2>User Registration</h2>
        <form action="register_process.php" method="post">
            <label>Username:</label>
            <input type="text" name="username" required><br><br>
            <label>Password:</label>
            <input type="password" name="password" required><br><br>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            <input type="submit" value="Register">
        </form>
    </div>
</body>
</html>
