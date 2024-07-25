<!DOCTYPE html>
<html>
<head>
    <title>Delete Driver Process</title>
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
        // Include your session and database connection files
        include('session_client.php');

        // Check if the admin is logged in
        if (isset($_SESSION['login_client'])) {
            // Fetch all driver names from the database
            $driverNamesQuery = "SELECT driver_name FROM driver";
            $driverNamesResult = mysqli_query($conn, $driverNamesQuery);

            if ($driverNamesResult && mysqli_num_rows($driverNamesResult) > 0) {
                // Display the form with a dropdown for driver selection
                ?>
                <div class="col-md-9" style="float: none; margin: 0 auto;">
                    <div class="form-area" style="padding: 40px 100px 100px 100px;">
                        <center>
                            <form action="deletedriverprocess_execute.php" method="POST">
                                <br style="clear: both">
                                <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Delete Driver Details</h3>

                                <label for="driver_name">Select Driver:</label>
                                <select name="driver_name" required>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($driverNamesResult)) {
                                        echo "<option value='" . $row['driver_name'] . "'>" . $row['driver_name'] . "</option>";
                                    }
                                    ?>
                                </select><br>

                                <input type="submit" value="Delete Driver">
                            </form>
                        </center>
                    </div>
                </div>
                <?php
            } else {
                echo "No drivers found in the database.";
            }
        } else {
            echo "Admin not logged in.";
        }
    ?>
</body>
</html>
