<!DOCTYPE html>
<html>
<head>
    <title>Update driver Process</title>
    <!-- Include your CSS and JS files here -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet" href="assets/css/user.css">
</head>
<body>
<?php
// Include your database connection file
include('session_client.php');

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the selected driver name from the form
    $selectedDriverName = $_POST["driver_name"];

    // Fetch details of the selected driver
    $fetchDriverQuery = "SELECT * FROM driver WHERE driver_name = '$selectedDriverName'";
    $driverResult = mysqli_query($conn, $fetchDriverQuery);

    if ($driverResult && mysqli_num_rows($driverResult) > 0) {
        // Display the details of the selected driver
        $driverDetails = mysqli_fetch_assoc($driverResult);

        // You can access individual details using $driverDetails['column_name']
        $driverName = $driverDetails['driver_name'];
        $driverGender = $driverDetails['driver_gender'];
        $dlNumber = $driverDetails['dl_number'];
        $driverPhone = $driverDetails['driver_phone'];
        $driverAddress = $driverDetails['driver_address'];
        $driverAvailability = $driverDetails['driver_availability'];

        // You can display the details or use them in the update form
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <!-- Add your head content here -->
            <title>Update Driver Details</title>
            <!-- Include your CSS and JS files here -->
            <!-- Add your stylesheet links here -->
            <!-- Add your JavaScript links here -->
        </head>
        <body>
            <!-- Add your navigation bar here -->

            <div class="col-md-9" style="float: none; margin: 0 auto;">
                <div class="form-area" style="padding: 40px 100px 100px 100px;">
                <center>
                    <form action="updatedriverprocess_execute.php" method="POST">
                        <br style="clear: both">
                        <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;">Driver Updation Form</h3>

                        <!-- Add input fields for other details you want to update -->
                        <label for="driver_name">Driver Name:</label>
                        <input type="text" name="driver_name" value="<?php echo $driverName; ?>" readonly><br>

                        <label for="driver_gender">Gender:</label>
                        <input type="text" name="driver_gender" value="<?php echo $driverGender; ?>" required><br>

                        <label for="dl_number">License No.:</label>
                        <input type="text" name="dl_number" value="<?php echo $dlNumber; ?>" required><br>

                        <label for="driver_phone">Contact:</label>
                        <input type="text" name="driver_phone" value="<?php echo $driverPhone; ?>" required><br>

                        <label for="driver_address">Address:</label>
                        <input type="text" name="driver_address" value="<?php echo $driverAddress; ?>" required><br>

                        <label for="driver_availability">Availability:</label>
                        <input type="text" name="driver_availability" value="<?php echo $driverAvailability; ?>" required><br>

                        <input type="submit" value="Update Driver">
                    </form>
                </center>
                </div>
            </div>

            <!-- Add your footer here -->
        </body>
        </html>
        <?php
    } else {
        echo "Driver details not found.";
    }
} else {
    // Redirect to an error page or handle the case where the form was not submitted
    echo "Form not submitted";
}

// Close the database connection
mysqli_close($conn);
?>
</body>
</html>
