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
                        <h2>We are here to support you <br> <span> Kalpalabdhi
                                Financials</span> </h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Contact</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <div class="contact-area pt-100 pb-70">
        <div class="contact-shape">
            <img src="assets/img/contact-shape.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                    </div>

                    <form action="./server/send_contact.php" method="post">
                        <div class="row justify-content-center">

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-3">
                                <div class="form-group">
                                    <input type="text" name="msg_subject" class="form-control" placeholder="Subject"
                                        required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="5" placeholder="Write message"
                                        required></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-check">
                                        <input name="gridCheck" value="Agreed" class="form-check-input" type="checkbox"
                                            required>
                                        <label class="form-check-label">
                                            Accept <a href="terms-conditions.html">Terms of Services</a> and <a
                                                href="privacy-policy.html">Privacy Policy</a>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <button type="submit" class="common-btn">Send Message</button>
                            </div>

                        </div>
                    </form>


                </div>



            </div>
        </div>
    </div>
    <!-- End Contact -->

    <div class="about-area   section-overlay pt-100 pb-70">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 text-center">
                    <h2>We are based in <span style="color: #1f5d2e;"> Mumbai </span></h2>
                </div>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-lg-4 ">
                    <div class="services-item card-overlay ">
                        <div class="content">

                            <h3 style="color:#1f5d2e">Support</h3>
                            <p style="font-size: 18px;"> For assistance, you can contact the
                                Kalpalabdhi Financials customer support team through email at <a
                                    href="mailto:support@kalpalabdhi.com" style="color:#1f5d2e">support@kalpalabdhi.com
                                </a>
                                or call our customer care number at +91 **********. <br> Our team is readily available
                                to
                                address and resolve your issue promptly.
                            </p>
                        </div>

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-item card-overlay active">
                        <div class="content ">

                            <h3 class="text-white">Head Office</h3>
                            <p style="font-size: 18px;">Shop No.1A, Hare Krishna Nagar, Jawahar Road,
                                Near Samrat Hotel, Opp. Railway Station,
                                Ghatkopar East, Mumbai – 400077
                            </p>
                            <p style="font-size: 18px;"> 
                                <a href="mailto:support@kalpalabdhi.com"
                            style="color:#cab03b"><b> support@kalpalabdhi.com </b></a></p>
                            <p><strong>Our Office Working hours is Mon-Fri 9.00 AM to
                                    5.00PM</strong></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="services-item card-overlay ">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.0782657931163!2d72.90376336978126!3d19.085230812194386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c62d08089287%3A0x29bb762f2bf864c1!2sJawahar%20Rd%2C%20Pant%20Nagar%2C%20Ghatkopar%20East%2C%20Mumbai%2C%20Maharashtra%20400077!5e1!3m2!1sen!2sin!4v1738325408203!5m2!1sen!2sin"
                            allowfullscreen="" aria-hidden="false" tabindex="0" height="100%" width="100%"></iframe>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <!-- Map -->
    <!-- <div class="map-area pt-100 ">
        <div class="container">
            <iframe id="map"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2980.0782657931163!2d72.90376336978126!3d19.085230812194386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c62d08089287%3A0x29bb762f2bf864c1!2sJawahar%20Rd%2C%20Pant%20Nagar%2C%20Ghatkopar%20East%2C%20Mumbai%2C%20Maharashtra%20400077!5e1!3m2!1sen!2sin!4v1738325408203!5m2!1sen!2sin"
                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div> -->



    <section class="founder-area four section-overlay pb-70">
        <div class="container">

            <div class="section-title mt-5 pt-5">
                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <!-- <span class="sub-title">Our Pricing</span> -->
                        <h2 style="font-size: 30px;">We are here to <span>support</span> you</h2>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <div class="founder-content">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr style="background: #1f5d2e; color:white">
                                    <th style="background: #1f5d2e; color:white">Details of</th>
                                    <th style="background: #1f5d2e; color:white">Contact Person</th>
                                    <th style="background: #1f5d2e; color:white">Address</th>
                                    <th style="background: #1f5d2e; color:white">Contact Number</th>
                                    <th style="background: #1f5d2e; color:white">Email Id</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>Grievance Cell</td>
                                    <td><strong>Mr. Kumarpal Doshi</strong></td>
                                    <td>Shop No.1A, Hare Krishna Nagar, Jawahar Road, <br>Near Samrat Hotel, Opp.
                                        Railway
                                        Station, <br>Ghatkopar East, Mumbai – 400077</td>
                                    <td>+91 9819772300</td>
                                    <td><a href="mailto:grievances@kalpalabdhi.com" target="_blank"
                                            style="color:#1f5d2e">grievances@kalpalabdhi.com</a></td>

                                </tr>

                                <tr>
                                    <td>Compliance Officer <br>(NSE, BSE and CDSL)</td>
                                    <td><strong>Mrs. Vidhi Gandhi</strong></td>
                                    <td>Shop No.1A, Hare Krishna Nagar, Jawahar Road, <br>Near Samrat Hotel, Opp.
                                        Railway
                                        Station, <br>Ghatkopar East, Mumbai – 400077</td>
                                    <td>+91 7977753677</td>
                                    <td><a href="mailto:compliance@kalpalabdhi.com" target="_blank"
                                            style="color:#1f5d2e">compliance@kalpalabdhi.com</a></td>
                                </tr>

                                <tr>
                                    <td>Chief Executive Officer (CEO)</td>
                                    <td><strong>Mr. Rushabh Nisar</strong></td>
                                    <td>Shop No.1A, Hare Krishna Nagar, Jawahar Road, <br>Near Samrat Hotel, Opp.
                                        Railway
                                        Station, <br>Ghatkopar East, Mumbai – 400077</td>
                                    <td>+91 9820364297</td>
                                    <td><a href="mailto:ceo@kalpalabdhi.com" target="_blank"
                                            style="color:#1f5d2e">ceo@kalpalabdhi.com</a></td>
                                </tr>




                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </section>






    <?php include("./footer.php") ?>