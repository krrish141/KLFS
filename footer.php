<?php
// Include the config file for database connection
include('config.php');

// Fetch content from the footer table
try {
    // Prepare the SQL query to fetch content
    $sql = "SELECT content FROM footer WHERE id = 1"; // Change the WHERE condition if necessary
    $stmt = $pdo->query($sql); // Execute the query

    // Fetch the result
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if content exists
    if ($row) {
        $content = $row['content']; // Get the content from the row
    } else {
        $content = "No content available."; // Fallback message if no data found
    }
} catch (PDOException $e) {
    // Handle database errors
    $content = "Error fetching data: " . $e->getMessage();
}
?>



<!-- Include CSS and JS for intl-tel-input -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<div class="welcome-bar ">
    <h3>
        Enjoy Equity, Future & Options and IPO Many More
        <!-- Mobile number input field with country flag -->
        <!-- Static Form -->
        <form class="input-container 50" action="./server/send_open_account.php" method="POST">
            <input class="phone" type="tel" name="mobile" placeholder="Enter mobile number" pattern="[0-9]{10}"
                maxlength="10" required oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">

            <button type="submit" class="common-btn">Open Account<span></span></button>

        </form>
        <?php if(isset($_GET['message'])): ?>
        <div class="alert alert-warning w-50 alert-dismissible fade show" role="alert">
            <?php echo htmlspecialchars($_GET['message']); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>

        <span style="font-size: 16px; color: black;">It's quick and easy!</span>
    </h3>

</div>

<style>
.welcome-bar {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: white;
    color: black;
    text-align: center;
    padding: 10px 0;
    box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.2);
    z-index: 9999;
    /* Ensure it's above other elements */
}

.welcome-bar h3 {
    font-size: 18px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    flex-wrap: wrap;
}

#phone {
    width: 100%;
    max-width: 250px;
    /* Adjust based on your layout */
    margin-top: 10px;
}
</style>

<script>
// Initialize intl-tel-input for phone input field
const phoneInput = document.querySelector("#phone");
const iti = window.intlTelInput(phoneInput, {
    initialCountry: "in", // India flag
    preferredCountries: ["in", "us"], // You can specify more countries here
    separateDialCode: true, // Optional, for a cleaner look
});
</script>



<!-- Footer -->
<footer class="footer-area pt-100 mb-75">
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-logo">
                        <a class="footer-inva" href="index.php"  >
                            <img src="assets/img/KLFSLOGO-footer.png" alt="Logo">
                        </a>
                        <p>At Kalpalabdhi Financials, we redefine your investment experience by offering a diverse
                            suite...</p>
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/login/" target="_blank">
                                    <img src="./assets/img/social-media/facebook.webp" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/kalpalabdhifinserv?igsh=amdmNzZ0ZWkyaHV3" target="_blank">
                                    <img src="./assets/img/social-media/instagram.webp" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/kalpalabdhi-financials/" target="_blank">
                                    <img src="./assets/img/social-media/linkdin.webp" alt="">
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-link">
                        <h3>Important Links</h3>
                        <ul>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                                <a href="about">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                                <a href="services">Account Opening page </a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                                <a href="projects">Pricing</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                                <a href="blog">About</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                                <a href="faq">Product & Service</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-hours">
                        <h3>Supports</h3>
                        <ul>
                            <li><i class='bx bx-chevron-right'></i>Contact Us</li>
                            <li><i class='bx bx-chevron-right'></i>FAQ's</li>
                            <li><i class='bx bx-chevron-right'></i>Partner With KLFS </li>
                            <li><i class='bx bx-chevron-right'></i>Downloads </li>
                            <li><i class='bx bx-chevron-right'></i>Fund Transfer </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-contact">
                        <h3>Contact Info</h3>
                        <ul>
                            <li>
                                <i class='bx bxs-location-plus'></i>
                                <span>Shop No.1A, Hare Krishna Nagar, Jawahar Road,Near Samrat Hotel,Opp. Railway
                                    Station,Ghatkopar East,Mumbai – 400077</span>
                            </li>
                            <li>
                                <i class='bx bxs-phone-call'></i>
                                <a href="tel:+91**********">+91**********</a>
                            </li>
                            <li>
                                <i class='bx bxs-paper-plane'></i>
                                <a href="mailto:support@kalpalabdhi.com"><span class="__cf_email__"
                                        data-cfemail="026a676e6e6d426b6c74632c616d6f">support@kalpalabdhi.com</span></a>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-sm-12 col-lg-12 mt-5">
                <div class="footer-item" style="color: #ffffffde; font-size: 15px;">

                    <?php echo html_entity_decode($content); ?>



                </div>
            </div>


        </div>
    </div>











    <div class="copyright-area">
        <div class="container"
            style="display: flex; justify-content: space-between; align-items: center; font-size: 14px; color: #666;">
            <div class="left" style="margin: 0;">
                <p style="font-size: 17px;">© Kalpalabdhi Financial. All rights reserved.</p>
            </div>
            <div class="right" style="margin: 0;">
                <p>Website Design by <a href="https://technobizzar.com" target="_blank"
                        style="text-decoration: none; color:white">Technobizzar</a></p>
            </div>
        </div>

    </div>
    <div class="footer-shape">
        <img src="assets/img/footer-bg.png" alt="Footer">
    </div>
</footer>
<!-- End Footer -->

<!-- Go Top -->
<div class="go-top">
    <i class="bx bxs-up-arrow-alt"></i>
    <i class="bx bxs-up-arrow-alt"></i>
</div>
<!-- End Go Top -->


<script>
// Initialize intl-tel-input for all phone input fields
document.querySelectorAll(".phone").forEach(phoneInput => {
    window.intlTelInput(phoneInput, {
        initialCountry: "in", // Default country (India)
        preferredCountries: ["in", "us"], // Preferred countries
        separateDialCode: true, // Show country code separately
    });
});
</script>


<!-- Include intl-tel-input library (if not included) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>



<!-- Essential JS -->
<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Form Validator JS -->
<script src="assets/js/form-validator.min.js"></script>
<!-- Contact JS -->
<script src="assets/js/contact-form-script.js"></script>
<!-- Ajax Chip JS -->
<script src="assets/js/jquery.ajaxchimp.min.js"></script>
<!-- Mean Menu JS -->
<script src="assets/js/jquery.meanmenu.js"></script>
<!-- Wow JS -->
<script src="assets/js/wow.min.js"></script>
<!-- Owl Carousel JS -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Modal Video JS -->
<script src="assets/js/jquery-modal-video.min.js"></script>
<!-- Odometer JS -->
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/jquery.appear.min.js"></script>
<!-- Smooth Scroll JS -->
<script src="assets/js/smoothscroll.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/custom.js"></script>
</body>

</html>