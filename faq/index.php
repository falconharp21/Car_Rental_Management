<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="css/reset.css">
    <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Resource style -->
    <script src="js/modernizr.js"></script>
    <!-- Modernizr -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/w3css/w3.css">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <title>FAQ | WOW</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-custom" role="navigation" style="background-color: #42D548; color:#ffffff">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                    </button>
                <a class="navbar-brand page-scroll" href="../index.php"> WHEELS ON THE WAY </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->

            <?php
                if(isset($_SESSION['login_client'])){
            ?>
                <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_client']; ?></a>
                        </li>
                        <li>
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Control Panel <span class="caret"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="entercar.php">Add Car</a></li>
                                        <li> <a href="enterdriver.php"> Add Driver</a></li>
                                        <li> <a href="clientview.php">View</a></li>

                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                        </li>
                    </ul>
                </div>

                <?php
                }
                else if (isset($_SESSION['login_customer'])){
            ?>
                    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_customer']; ?></a>
                            </li>
                            <ul class="nav navbar-nav">
                                <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Garagge <span class="caret"></span> </a>
                                    <ul class="dropdown-menu">
                                        <li> <a href="prereturncar.php">Return Now</a></li>
                                        <li> <a href="mybookings.php"> My Bookings</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <li>
                                <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
                            </li>
                        </ul>
                    </div>

                    <?php
            }
                else {
            ?>

                        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                            <ul class="nav navbar-nav">
                                <li>
                                    <a href="../index.php">Home</a>
                                </li>
                                <li>
                                    <a href="../clientlogin.php">Admin</a>
                                </li>
                                <li>
                                    <a href="../customerlogin.php">User</a>
                                </li>
                                <li>
                                    <a href="index.php"> FAQ </a>
                                </li>
                            </ul>
                        </div>
                        <?php   }
                ?>
                        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <li><a class="selected" href="#basics">Frequent Questions</a></li>
            <li><a href="#membership">SignUp and Booking</a></li>
        </ul>
        <!-- cd-faq-categories -->

        <div class="cd-faq-items">
            <ul id="basics" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>Frequent Questions</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">How do I pay for my Rental?</a>
                    <div class="cd-faq-content">
                        <p>WOW gladly accepts Mastercard and Visa.No cash accepted.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">What if i find a better rate for a rental car?</a>
                    <div class="cd-faq-content">
                        <p>One of the many great things about Car Rentals is our rental rates and services are guaranteed to be the very best in the industry. If you come across a lower price from a competitor and the rate is on a comparable vehicle including the same terms, locations, and rental car fees we will be glad to beat the price for you. Please complete our Guaranteed Best Rate form if you have found a better rate with one of our competitors.</div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Will i need a driving license to rent a car?</a>
                    <div class="cd-faq-content">
                        <p>A driving license is not needed as a driver is already provided by the Admin.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">Is there a fee if i return the car after the due date?</a>
                    <div class="cd-faq-content">
                        <p>Yes, we charge Rs.500/- day after the due date.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->

            <ul id="membership" class="cd-faq-group">
                <li class="cd-faq-title">
                    <h2>SignUp and booking</h2>
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Why should i sign up?</a>
                    <div class="cd-faq-content">
                        <p>When you sign-up to be a member on our site, you will be able to save time filling out requests. Once you have joined and logged-in, each time you send us a request, we will pre-fill the submission form with your personal information so that you do not have type the same things again and again. We also give you the opportunity to sign-up for our email newsletter which will keep you up-to-date on the latest specials and incentives we're offering.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>

                <li>
                    <a class="cd-faq-trigger" href="#0">How do I login?</a>
                    <div class="cd-faq-content">
                        <p>Once you sign-up, we will re direct you to the log in screen. When you are logged in, you will see a small bar in the upper right corner of the screen welcoming to you our site. If you already have set up an account but have logged out, you can either click on the 'Log-In' button on our menu bar which takes you to our log-in page or, if you are on our home page, you can use the log-in area on it.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">What about my privacy?</a>
                    <div class="cd-faq-content">
                        <p>Your privacy is very important to us. As long as you do not share your member name and password with others, no one will be able to see or edit your personal information. For more information, please read our privacy policy.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
                <li>
                    <a class="cd-faq-trigger" href="#0">Is my credit card information stored in my account?</a>
                    <div class="cd-faq-content">
                        <p>No.We do not store any credit card information in your account.</p>
                    </div>
                    <!-- cd-faq-content -->
                </li>
            </ul>
            <!-- cd-faq-group -->
        <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
    </section>
    <!-- cd-faq -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/jquery.mobile.custom.min.js"></script>
    <script src="js/main.js"></script>
    <!-- Resource jQuery -->
</body>
<footer class="footer">
        <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top" style="background-color: #42D548; color:#ffffff">
        <p> © <?php echo date("Y"); ?> WOW, WheelsOnTheWay (WoW), Inc. </p>
            <a class="link-body-emphasis" href="tel:+917200121972">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
            </a>&nbsp
            <a class="link-body-emphasis" href="mailto:wheelsontheway3@gmail.com">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="30" fill="currentColor" class="bi bi-envelope-at" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2H2Zm3.708 6.208L1 11.105V5.383l4.708 2.825ZM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2-7-4.2Z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648Zm-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
                </svg>
            </a>&nbsp
            <a class="link-body-emphasis" href="https://www.instagram.com/wowrentals_2021/">
                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                </svg>
            </a>
        </div>
    </footer>
</html>