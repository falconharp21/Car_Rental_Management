<!DOCTYPE html>
<html>
<head>
    <title>Update Car Process</title>
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
    // Include your session file and database connection file
    include('session_client.php');
    ?>

    <div class="col-md-12" style="float: none; margin: 0 auto;">
        <div class="form-area" style="padding: 30px 100px 100px 100px;">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Get the selected car name
                $selectedCarName = $_POST['car_name'];

                // Fetch details of the selected car
                $carDetailsQuery = "SELECT * FROM cars WHERE car_name = '$selectedCarName'";
                $carDetailsResult = mysqli_query($conn, $carDetailsQuery);

                if (mysqli_num_rows($carDetailsResult) > 0) {
                    $carDetails = mysqli_fetch_assoc($carDetailsResult);
                    ?><center>
                    <h2>Car Updation Form</h2><br><br>
                    <form class="update" action="updatecarprocess_execute.php" method="POST">
                        <input type="hidden" name="car_name" value="<?php echo $selectedCarName; ?>">

                        <label for="car_name">Car Name :</label>&nbsp;&nbsp;
                        <input type="text" name="car_name" value="<?php echo $carDetails['car_name']; ?>" readonly><br>

                        <label for="car_nameplate">Car Nameplate :</label>&nbsp;
                        <input type="text" name="car_nameplate" value="<?php echo $carDetails['car_nameplate']; ?>"><br>

                        <label for="ac_price">AC Fare (/km) :</label>&nbsp;&nbsp;
                        <input type="text" name="ac_price" value="<?php echo $carDetails['ac_price']; ?>"><br>

                        <label for="non_ac_price">Non-AC Fare (/km) :</label>&nbsp;
                        <input type="text" name="non_ac_price" value="<?php echo $carDetails['non_ac_price']; ?>"><br>

                        <label for="ac_price_per_day">AC Fare (/day) :</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="ac_price_per_day" value="<?php echo $carDetails['ac_price_per_day']; ?>"><br>

                        <label for="non_ac_price_per_day">Non-AC Fare (/day) :</label>&nbsp;
                        <input type="text" name="non_ac_price_per_day" value="<?php echo $carDetails['non_ac_price_per_day']; ?>"><br>

                        <label for="car_availability">Availability :</label>&nbsp;&nbsp;&nbsp;
                        <input type="text" name="car_availability" value="<?php echo $carDetails['car_availability']; ?>"><br>

                        <input type="submit" value="Update">
                    </form></center>
                    <?php
                } else {
                    echo "No details found for the selected car.";
                }
            } else {
                echo "Invalid request!";
            }
            ?>
        </div>
    </div>
</body>
</html>
