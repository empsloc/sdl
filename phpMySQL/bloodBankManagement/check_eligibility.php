<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input data
    $age = $_POST['age'];
    $weight = $_POST['weight'];

    // Check eligibility
    if ($age >= 18 && $age <= 65 && $weight >= 50) {
        echo "Congratulations! You are eligible for blood donation.";
    } else {
        echo "Sorry! You are not eligible for blood donation.";
    }
}
?>
