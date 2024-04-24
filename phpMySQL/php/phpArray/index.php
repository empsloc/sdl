<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Car Rental</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f2f2f2;
    }
    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    h1, h2 {
        color: #333;
    }
    ul {
        list-style-type: none;
        padding: 0;
    }
    li {
        margin-bottom: 10px;
        padding: 10px;
        background-color: #f9f9f9;
        border-radius: 4px;
    }
    .available {
        color: green;
    }
    .not-available {
        color: red;
    }
</style>
</head>
<body>

<div class="container">
    <h1>Car Rental</h1>
    <?php
    // Define an array to store information about available cars for rental
    $cars = array(
        array(
            "brand" => "Toyota",
            "model" => "Camry",
            "price_per_day" => 50,
            "availability" => true
        ),
        array(
            "brand" => "Honda",
            "model" => "Civic",
            "price_per_day" => 45,
            "availability" => false
        ),
        array(
            "brand" => "Ford",
            "model" => "Focus",
            "price_per_day" => 55,
            "availability" => true
        ),
        array(
            "brand" => "Chevrolet",
            "model" => "Malibu",
            "price_per_day" => 60,
            "availability" => true
        )
    );

    // Function to display information about available cars
    function displayAvailableCars($cars) {
        echo "<h2>Available Cars for Rental:</h2>";
        echo "<ul>";
        foreach ($cars as $car) {
            $availability = $car['availability'] ? "Available" : "Not Available";
            $availabilityClass = $car['availability'] ? "available" : "not-available";
            echo "<li><span class='{$availabilityClass}'>{$car['brand']} {$car['model']} - \${$car['price_per_day']} per day - {$availability}</span></li>";
        }
        echo "</ul>";
    }

    // Display information about available cars
    displayAvailableCars($cars);
    ?>
</div>

</body>
</html>
