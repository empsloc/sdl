<?php
// Start the session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    // If not logged in, redirect to the login page
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="dashboard-container">
        <h2>Welcome to Your Dashboard</h2>
        <?php if(isset($_SESSION['username'])): ?>
            <p>Hello, <?php echo $_SESSION['username']; ?>!</p>
        <?php endif; ?>
        <h3>Account Information:</h3>
        <!-- Display user account information here -->
        
        <h3>Actions:</h3>
        <ul>
            <li><a href="manage_plaza.php">Manage Toll Plaza</a></li>
            <li><a href="manage_vehicle.php">Manage Vehicles</a></li>
            <li><a href="pay_toll.php">Pay Toll</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
</body>
</html>
