<?php
// Include your database connection file
include('session_client.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected car name from the form
    $carName = $_POST["car_name"];

    // Delete associated rented cars records
$deleteRentedCarsQuery = "DELETE FROM rentedcars WHERE car_name = '$carName'";

// Now, delete the car record
$deleteCarQuery = "DELETE FROM cars WHERE car_name = '$carName'";
mysqli_query($conn, $deleteCarQuery);


    if (mysqli_query($conn, $deleteCarQuery)) {
        // Redirect to a success page or display a success message
        header("Location: viewcar.php");
        exit();
    } else {
        // Handle the case where the delete query fails
        echo "Error deleting record: " . mysqli_error($conn);
    }
} else {
    // Redirect to an error page or handle the case where the form was not submitted
    header("Location: error_page.php");
    exit();
}

// Close the database connection
mysqli_close($conn);
?>
