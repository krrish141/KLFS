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

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">


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


    <?php include("./header.php")?>

    <!-- Banner -->
    <div class="banner-area">
        <div class="overlay-banner">
            <div class="banner-item banner-bg-one">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="banner-content">
                                <h1 id="banner-title" class="slide-in">
                                    Make Informed Investment Decisions with <span>Kalpalabdhi Financials</span>
                                </h1>

                                <!-- Static Form -->
                                <form class="input-container" action="./server/send_open_account.php" method="POST">
        <input class="phone" type="tel" name="mobile" placeholder="Enter mobile number"
            pattern="[0-9]{10}" maxlength="10" required
            oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
        <button type="submit" class="common-btn">Get Started</button>
    </form>

                                <?php if(isset($_GET['message'])): ?>
                                <div class="alert alert-warning w-50 alert-dismissible fade show" role="alert">
                                    <?php echo htmlspecialchars($_GET['message']); ?>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                <?php endif; ?>





                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner -->

    <style>
     
        .input-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 15px;
            width: 100%;
            max-width: 400px;
            /* margin: auto; */
        }

        .phone {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
            outline: none;
        }

        .common-btn {
            width: 100%;
            padding: 12px;
            font-size: 18px;
            color: #fff;
            background: #1f5d2e;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s ease;
        }

        .common-btn:hover {
            background: #1f5d2e;
        }

        /* Responsive Design */
        @media (min-width: 600px) {
            .input-container {
                flex-direction: row;
                max-width: 500px;
            }

            .phone {
                flex: 1;
            }

            .common-btn {
                width: auto;
                padding: 9px 20px;
            }
        }
    </style>
   


    <style>
    body {
        overflow-x: hidden;
    }

    /* Right-to-left sliding effect */
    .slide-in {
        opacity: 0;
        transform: translateX(100%);
        /* Start from the right */
        animation: slideLeft 1s ease-in-out forwards;
    }

    @keyframes slideLeft {
        0% {
            opacity: 0;
            transform: translateX(100%);
        }

        100% {
            opacity: 1;
            transform: translateX(0);
        }
    }
    </style>

    <script>
    const titles = [
        "Make Informed Investment Decisions with <br> <span>Kalpalabdhi Financials</span>",
        "Empower Your Investments with <br><span>Kalpalabdhi Financials</span>",
        "Shape Your Financial Future with <br><span>Kalpalabdhi Financials</span>",
        "Begin Your Investment Journey with <span>Kalpalabdhi Financials</span>"
    ];

    let index = 0;

    function changeTitle() {
        const titleElement = document.getElementById("banner-title");
        titleElement.classList.remove("slide-in"); // Remove animation
        void titleElement.offsetWidth; // Force reflow to restart animation
        index = (index + 1) % titles.length;
        titleElement.innerHTML = titles[index];
        titleElement.classList.add("slide-in"); // Reapply animation
    }

    setInterval(changeTitle, 3000); // Change title every 3 seconds
    </script>





    <!-- About -->
    <section class="about-area section-overlay pt-100 pb-70">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">

                <div class="col-lg-7">
                    <div class="about-content">
                        <div class="section-title">
                            <span class="sub-title">About</span>
                            <h2>Trusted for 15+ years – <span>Kalpalabdhi Financials</span></h2>

                            <p>At Kalpalabdhi Financials, we redefine your investment experience by offering a diverse
                                suite of services tailored to meet the unique needs of individuals and businesses.
                                Whether you are just starting your investment journey or you're a seasoned trader, our
                                cutting-edge solutions are designed to empower you with the tools, insights, and
                                strategies needed to confidently navigate the financial landscape and achieve your goals
                                with precision and ease.</p>
                        </div>

                        <div class="row justify-content-center mt-5">

                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-medal-of-award"></i>
                                    </li>
                                    <li>
                                        <h3>15+ Years Experience</h3>
                                        <p>Over 15 years of excellence in financial advisory and solutions.</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-star"></i>
                                    </li>
                                    <li>
                                        <h3>Growing Success</h3>
                                        <p>Success stories grow every day with our expert financial guidance</p>

                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                        <i class="flaticon-insurance"></i>
                                    </li>
                                    <li>
                                        <h3>100% Trusted Company</h3>
                                        <p>Your financial success is our promise—100% trust, every step</p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-sm-6 col-lg-6">
                                <ul>
                                    <li>
                                    <i class="fa fa-inr"></i>

                                    </li>
                                    <li>
                                        <h3>Finance Management</h3>
                                        <p>Expert financial management strategies for growth and success</p>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <a class="common-btn" href="about.php">
                            Explore About Us
                            <span></span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="about-img">
                        <div class="row align-items-end">
                            <div class="col-sm-6 col-lg-6">
                                <img src="assets/img/about/about1.png" alt="About">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <img src="assets/img/about/about2.png" alt="About">
                            </div>
                            <div class="col-lg-12">
                                <img src="assets/img/about/about3.jpg" alt="About">
                            </div>
                        </div>
                        <div class="years">
                            <h3>15+ <br> <span>Years</span></h3>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End About -->



    <!-- product and offering -->
    <section class="projects-area two section-overlay-two pt-100 pb-70">
        <div class="container p-0">
            <div class="row m-0">

                <div class="col-lg-12 p-0">
                    <div class="section-title text-center">
                        <!-- <span class="sub-title">Products & Offerings</span> -->
                        <h2><span>Products & Offerings </span> </h2>

                    </div>
                </div>

                <div class="col-lg-12 p-0">
                    <div class="projects-slider owl-theme owl-carousel">

                        <div class="projects-item card-overlay-two">
                            <a href="./equity.php"> <img src="assets/img/product/mutual-funds.jpg" alt="Projects">
                                <div class="inner">
                                    <h3>
                                        <a href="./equity.php">Equity</a>
                                    </h3>
                                    <!-- <span>Equity</span> -->
                                </div>
                            </a>
                        </div>

                        <div class="projects-item card-overlay-two">
                            <a href="./future&option.php"> <img src="assets/img/product/future.jpg" alt="Projects">
                                <div class="inner">
                                    <h3>
                                        <a href="./future&option.php">Future & Options</a>
                                    </h3>
                                    <!-- <span>Future & Options</span> -->
                                </div>
                            </a>
                        </div>

                        <div class="projects-item card-overlay-two">
                            <a href="./ipo.php"> <img src="assets/img/product/ipo.png" alt="Projects">
                                <div class="inner">
                                    <h3>
                                        <a href="./ipo.php">IPO</a>
                                    </h3>
                                    <!-- <span>IPO</span> -->
                                </div>
                            </a>
                        </div>

                        <div class="projects-item card-overlay-two">
                            <a href="./mutual_funds.php"> <img src="assets/img/mutual-funds2.jpg"
                                    alt="Projects">
                                <div class="inner">
                                    <h3>
                                        <a href="./mutual_funds.php">Mutual Funds</a>
                                    </h3>
                                    <!-- <span>Mutual Funds</span> -->
                                </div>
                            </a>
                        </div>




                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Projects -->

    <!-- why choose us -->
    <section class="services-area pt-100 pb-70">
        <div class="container">

            <div class="section-title">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-12">
                        <!-- <span class="sub-title">Why Choose Us?</span> -->
                        <h2 class="text-center">Why <span> Choose </span> Us?</h2>
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item card-overlay active">
                    <img src="./assets/img/icons/chance to trade.png" class="mb-3" width="60" alt="">
                        <h3>
                            <a>Best Brokerage Fees</a>
                        </h3>
                        <p> Boost your returns with our competitive rates and minimal trading costs.</p>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item card-overlay">
                        <i class="fas fa-laptop"></i>
                        <h3>
                            <a>User-Friendly Trading Platform </a>
                        </h3>
                        <p>Place trades effortlessly with our easy-to-use interface, equipped with advanced tools and
                            real-time market data.</p>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item card-overlay active">
                        <i class="flaticon-strategy-in-a-labyrinth"></i>
                        <h3>
                            <a>Diverse Investment Solutions</a>
                        </h3>
                        <p>Explore a wide range of products, including stocks, future & options, ipo's, mutual funds,
                            and more.</p>

                    </div>
                </div>


                <div class="col-sm-6 col-lg-4">
                    <div class="services-item card-overlay active">
                        <i class="flaticon-evaluate"></i>
                        <h3>
                            <a> Expert Research & Market Insights:</a>
                        </h3>
                        <p> Stay informed and make smarter decisions with our in-depth analysis and real-time market
                            updates.</p>

                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="services-item card-overlay">
                        <i class="flaticon-insurance"></i>
                        <h3>
                            <a>Dedicated Support</a>
                        </h3>
                        <p> Our customer support team is always available to assist you, ensuring you receive prompt and
                            reliable help whenever you need it.</p>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <style>
        .services-item {
    text-align: center;
    position: relative;
    padding: 40px 50px 40px;
    background-color: #fff;
    height: 300px;
    transition: 0.5s all ease;
    margin-bottom: 30px;
    z-index: 1;
}
    </style>
    <!-- End Services -->

    <!-- start yout demat account -->
    <section class="subscribe-area three ptb-100">
        <div class="subscribe-img">
            <img src="assets/img/subscribe-main2.png" alt="Subscribe">
        </div>
        <div class="container">
            <div class="subscribe-wrap">
                <div class="section-title two">
                    <h2>Start Your Demat Account Today</h2>

                </div>
                <form class="newsletter-form" data-toggle="validator">
                    <input class=" form-control" type="tel" placeholder="Enter mobile number">

                    <button class="btn common-btn " type="submit">
                        Open Demat Account
                        <span></span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- End Subscribe -->



    <!-- Contact us -->
    <section class="work-area ptb-100">
        <div class="container">

            <div class="section-title">
                <div class="row align-items-center justify-content-center">
                    <div class="col-lg-6 ">
                        <!-- <span class="sub-title  mt-5">Contact us</span> -->
                        <h2 class="text-dark">REQUEST A CALL BACK</h2>
                    </div>
                    <div class="col-lg-6">
                    </div>

                </div>
            </div>

            <div class="row justify-content-center">

                <div class="contact-area pb-20">
                    <div class="contact-shape">
                        <img src="assets/img/contact-shape.png" alt="Shape">
                    </div>
                    <div class="container">
                        <div class="row align-items-center justify-content-center">

                            <div class="col-lg-12">

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

            </div>

        </div>
    </section>
    <!-- End Work -->



    <?php include("./footer.php")?>