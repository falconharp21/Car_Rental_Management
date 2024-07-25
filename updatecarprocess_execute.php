<?php
// Include your session file and database connection file
include('session_client.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $carName = $_POST['car_name'];
    $carNameplate = $_POST['car_nameplate'];
    $acPrice = $_POST['ac_price'];
    $nonAcPrice = $_POST['non_ac_price'];
    $acPricePerDay = $_POST['ac_price_per_day'];
    $nonAcPricePerDay = $_POST['non_ac_price_per_day'];
    $carAvailability = $_POST['car_availability'];

    // Update the database with the changes
    $updateQuery = "UPDATE cars SET
                    car_nameplate = '$carNameplate',
                    ac_price = '$acPrice',
                    non_ac_price = '$nonAcPrice',
                    ac_price_per_day = '$acPricePerDay',
                    non_ac_price_per_day = '$nonAcPricePerDay',
                    car_availability = '$carAvailability'
                    WHERE car_name = '$carName'";

    if (mysqli_query($conn, $updateQuery)) {
        echo "Car details updated successfully!";
        // Redirect to the page where you want to display the updated details
        header("Location: viewcar.php");
        exit();
    } else {
        echo "Error updating car details: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request!";
}
?>
