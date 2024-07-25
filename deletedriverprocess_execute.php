<?php
// Include your database connection file
include('session_client.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected driver name from the form
    $driverName = $_POST['driver_name'];

    // Check if there are rented cars associated with the driver
    $checkRentedCarsQuery = "SELECT * FROM rentedcars WHERE driver_id IN (SELECT driver_id FROM driver WHERE driver_name = '$driverName')";
    $result = mysqli_query($conn, $checkRentedCarsQuery);

    // If there are rented cars, delete them first
    if (mysqli_num_rows($result) > 0) {
        $deleteRentedCarsQuery = "DELETE FROM rentedcars WHERE driver_id IN (SELECT driver_id FROM driver WHERE driver_name = '$driverName')";
        mysqli_query($conn, $deleteRentedCarsQuery);
    }

    // Now, delete the driver
    $deleteDriverQuery = "DELETE FROM driver WHERE driver_name = '$driverName'";

    // Perform the query
    if (mysqli_query($conn, $deleteDriverQuery)) {
        header("Location: viewdriver.php");
        exit();
    } else {
        echo "Error deleting driver: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request.";
}

// Close the database connection
mysqli_close($conn);
?>
