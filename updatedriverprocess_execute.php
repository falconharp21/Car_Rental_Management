<?php
// Include your database connection file
include('session_client.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the updated values from the form
    $driverName = $_POST["driver_name"];
    $driverGender = $_POST["driver_gender"];
    $dlNumber = $_POST["dl_number"];
    $driverPhone = $_POST["driver_phone"];
    $driverAddress = $_POST["driver_address"];
    $driverAvailability = $_POST["driver_availability"];

    // Update the record in the database
    $updateDriverQuery = "UPDATE driver SET
                          driver_gender = '$driverGender',
                          dl_number = '$dlNumber',
                          driver_phone = '$driverPhone',
                          driver_address = '$driverAddress',
                          driver_availability = '$driverAvailability'
                          WHERE driver_name = '$driverName'";

    if (mysqli_query($conn, $updateDriverQuery)) {
        // Redirect to a success page or display a success message
        header("Location: viewdriver.php");
        exit();
    }
    else {
    echo "Error updating car details: " . mysqli_error($conn);
}
} else {
echo "Invalid request!";
}
?>
