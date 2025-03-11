<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- Box Icons CSS -->
    <link rel="stylesheet" href="assets/css/boxicons.min.css">
    <!-- Mean Menu CSS -->
    <link rel="stylesheet" href="assets/css/meanmenu.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- Modal Video CSS -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- Odometer CSS -->
    <link rel="stylesheet" href="assets/css/odometer.min.css">
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Theme Dark CSS -->
    <link rel="stylesheet" href="assets/css/theme-dark.css">

    <title>Kalpalabdhi Financials</title>

    <link rel="icon" type="image/png" href="assets/img/favicon.png">

    <style>
    /* Default style for all devices */
    .logo-one {
        width: 100%;
        /* Makes the logo's width responsive */
        max-width: 250px;
        /* Sets a maximum width */
        height: auto;
        /* Maintains the aspect ratio */
    }

    /* For mobile devices (optional, in case you want more control) */
    @media (max-width: 768px) {
        .logo-one {
            width: 40%;
            /* Adjusts logo size for smaller screens */
            max-width: 200px;
            /* Max width for mobile */
        }
    }
    </style>

</head>

<body>


    <?php include("./header.php") ?>

    <!-- Page Title -->
    <div class="page-title-area title-bg-three">
        <div class="title-shape">
            <img src="assets/img/title/title-bg-shape.png" alt="Shape">
        </div>
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="title-content">
                        <h2>Empowering Growth Together. Partner <br> with <span> Kalpalabdhi
                                Financials</span> </h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Partner with KLFS</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->


    <section class="projects-area section-overlay pt-100 pb-70">
        <div class="container">

            <div class="section-title">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12 text-center">
                        <span class="sub-title"></span>
                        <h2 style="font-size: 40px;">Partner with KLFS: <span>Unlock New Opportunities </span></h2>
                       
                    </div>


                    <div class="col-lg-2">
                    </div>
                    <div class="col-lg-8">
                        <div class="contact-area pt-5 pb-70">
                            <div class="contact-shape">
                                <img src="assets/img/contact-shape.png" alt="Shape">
                            </div>
                            <div class="container">
                                <div class="row align-items-center justify-content-center">

                                    <div class="col-lg-6">
                                        
                                        <form action="server/send_partner_with_kfls.php" method="POST">
                                            <div class="row justify-content-center">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" class="form-control"
                                                            placeholder="Name" required data-error="Name">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="phone_number" placeholder="Phone"
                                                            required data-error="Mobile Number" class="form-control">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" class="form-control"
                                                            placeholder="Email" required data-error="Email">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <input type="text" name="city" class="form-control"
                                                            placeholder="City" required data-error="City">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button type="submit" class="common-btn">
                                                        Submit
                                                    </button>
                                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </form>



                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-2">
                    </div>

                </div>
            </div>


        </div>
    </section>


    <?php include("./footer.php") ?>