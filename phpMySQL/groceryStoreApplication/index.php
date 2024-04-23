<!DOCTYPE html>
<html>
<head>
    <title>Grocery Management System</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Add New Grocery Item</h2>
        <form method="post" action="add_item.php">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="quantity">Quantity:</label>
            <input type="number" name="quantity" id="quantity" required><br>
            <input type="submit" name="submit" value="Add Item" class="btn">
        </form>

        <h2>Grocery Items</h2>
        <?php include 'display_items.php'; ?>
    </div>
</body>
</html>
