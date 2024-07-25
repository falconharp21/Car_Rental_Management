<!DOCTYPE html>
<html>
<head>
    <title> Update Driver Details</title>
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
                <body>
    <!-- Add your navigation bar here -->

    <div class="col-md-9" style="float: none; margin: 0 auto;">
        <div class="form-area" style="padding: 40px 100px 100px 100px;">
           <center> <form action="updatedriverprocess.php" method="POST">
                <br style="clear: both">
                <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Update Driver Details</h3>

                <?php
                // Storing Session
                $user_check = $_SESSION['login_client'];
                $sql = "SELECT * FROM driver d WHERE d.client_username='$user_check' ORDER BY driver_name";
                $result = mysqli_query($conn, $sql);

                ?>

                <label for="driver_name">Select Driver:</label>
                <select name="driver_name" required>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='" . $row['driver_name'] . "'>" . $row['driver_name'] . "</option>";
                    }
                    ?>
                </select><br>

                <input type="submit" value="Update Driver">
            </form><center>
        </div>
    </div>

    <!-- Add your footer here -->
</body>
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
