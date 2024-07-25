<!DOCTYPE html>
<html>
<head>
    <title>Delete driver Process</title>
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
            // Fetch all car names from the database
            $carNamesQuery = "SELECT car_name FROM cars";
            $carNamesResult = mysqli_query($conn, $carNamesQuery);

            if ($carNamesResult && mysqli_num_rows($carNamesResult) > 0) {
                // Display the form with a dropdown for car selection
                ?>
                <div class="col-md-9" style="float: none; margin: 0 auto;">
                    <div class="form-area" style="padding: 40px 100px 100px 100px;">
                        <center>
                            <form action="deletecarprocess_execute.php" method="POST">
                                <br style="clear: both">
                                <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Delete Car Details</h3>

                                <label for="car_name">Select Car:</label>
                                <select name="car_name" required>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($carNamesResult)) {
                                        echo "<option value='" . $row['car_name'] . "'>" . $row['car_name'] . "</option>";
                                    }
                                    ?>
                                </select><br>

                                <input type="submit" value="Delete Car">
                            </form>
                        </center>
                    </div>
                </div>
                <?php
            } else {
                echo "No cars found in the database.";
            }
        } else {
            echo "Admin not logged in.";
        }
    ?>
</body>
</html>
