<!DOCTYPE html>
<html>
<head>
    <title>Update Car Details</title>
    <!-- Include your CSS and JS files here -->

    <!-- Add your stylesheet links here -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/customerlogin.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link rel="stylesheet" href="assets/css/user.css">

    <!-- Add your JavaScript links here -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
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
                <div class="col-md-12" style="float: none; margin: 0 auto;">
                    <div class="form-area" style="padding: 30px 100px 100px 100px;">
                        <form action="updatecarprocess.php" method="POST">
                            <br style="clear: both">
                            <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;">Update Car Details</h3>
                            <center>
                            <label for="car_name">Select Car:&nbsp;&nbsp;</label>
                            <select name="car_name" required><br>
                            </center>
                                <?php
                                    while ($car = mysqli_fetch_assoc($carNamesResult)) {
                                        echo "<option value='" . $car['car_name'] . "'>" . $car['car_name'] . "</option>";
                                    }
                                ?>
                            </select>

                            <!-- Include other input fields for updating other details -->

                            <!-- For example: -->
                            <!-- <label for="new_price">New Price:</label> -->
                            <!-- <input type="text" name="new_price" required> -->

                            <br><input type="submit" value="Update Car">
                        </form>
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
