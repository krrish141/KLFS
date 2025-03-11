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

    <style>
    table {
        width: 50%;
        border-collapse: collapse;
        text-align: center;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        background-color: white;
    }

    .head {
        background-color: #45a049;
        color: white;
    }

    th {
        background-color: #333;
        color: white;
        padding: 10px;
        font-size: 20px;
    }

    td {
        border: 1px solid #ddd;
        padding: 20px;
        font-size: 14px;
        background-color: #4CAF50;
        color: white;
        vertical-align: middle;
    }

    td:hover {
        background-color: rgb(0, 71, 4);
        color: white;
        /* Change background on hover */
    }

    table th {
        background-color: #333;
        color: white;
        padding: 10px;
        font-size: 20px;
    }
    </style>

    <style>
    .nav-pills .nav-item {
        flex: 1;
        /* This makes all items equally distributed */
        text-align: center;
        /* Center the text inside each tab */
    }

    .nav-pills .nav-link {
        width: 100%;
        /* Ensure that each tab spans the entire width of its container */
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
                        <h2><span> Kalpalabdhi
                                Financials</span><br>Pricing Details and Options </h2>
                        <ul>
                            <li>
                                <a href="index.php">Home</a>
                            </li>
                            <li>
                                <i class='bx bx-chevron-right'></i>
                            </li>
                            <li>
                                <span>Pricing </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <section class="founder-area section-overlay pt-100 pb-70">
        <div class="container">
            <div class="row align-items-center justify-content-center">

                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                $(document).ready(function() {
                    $('.nav-pills .nav-link').hover(function() {
                        $(this).tab('show');
                    });
                });
                </script>

                <style>
                .nav-pills .nav-link:hover {
                    background-color: #1f5d2e !important;
                    /* Change color on hover */
                    color: white !important;
                }
                </style>


                <div class="col-lg-12">
                    <div class="founder-content">

                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Brokerage Charges</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                                    role="tab" aria-controls="pills-profile" aria-selected="false">Statutory Charges</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                                    role="tab" aria-controls="pills-contact" aria-selected="false">Exchange Fees</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-demat-tab" data-bs-toggle="pill" href="#pills-demat"
                                    role="tab" aria-controls="pills-demat" aria-selected="false">Demat Transaction</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-sebi-tab" data-bs-toggle="pill" href="#pills-sebi"
                                    role="tab" aria-controls="pills-sebi" aria-selected="false">SEBI Charges</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-clearing-tab" data-bs-toggle="pill" href="#pills-clearing"
                                    role="tab" aria-controls="pills-clearing" aria-selected="false">Clearing Charges</a>
                            </li>
                        </ul>



                        <div class="tab-content" id="pills-tabContent">

                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <tr>
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">Brokerage Charges
                                            </th>
                                        </tr>
                                        </tr>

                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">Brokerage</td>

                                            <td style="vertical-align: middle;">₹18 per executed order</td>
                                            <td style="vertical-align: middle;">₹18 per executed order or 0.05% <br>
                                                (whichever is lower)</td>
                                            <td style="vertical-align: middle;">₹18 per executed order or 0.05% <br>
                                                (whichever is lower)</td>
                                            <td style="vertical-align: middle;">Flat ₹18 per executed order</td>
                                        </tr>
                                        <tr>
                                            <td style="vertical-align: middle;">NRI Account
                                            </td>
                                            <td>₹200 per executed order or 0.05%
                                                <br> (whichever is lower)
                                            </td>
                                            <td>NA</td>
                                            <td>₹100 per executed order using a CP code</td>
                                            <td>₹100 per executed order using a CP code</td>
                                        </tr>
                                        <tr>
                                            <td>NRI (NRO - Non PIS Acc) </td>
                                            <td>₹200 per executed order or 0.05% <br> (whichever is lower)</td>
                                            <td>NA</td>
                                            <td>₹100 per executed order or 0.05% <br> (whichever is lower)</td>
                                            <td>₹100 per executed order or 0.05%</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">Statutory Charges
                                            </th>
                                        </tr>

                                        <!-- Table Column Names -->
                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>

                                        <!-- STT/CTT Data -->
                                        <tr>
                                            <td>STT/CTT (From 1st October)</td>
                                            <td>0.1% on buy & sell</td>
                                            <td>0.025% on the sell side</td>
                                            <td>0.02% on sell-side</td>
                                            <td>0.1% on sell side (on premium)</td>
                                        </tr>

                                        <!-- GST Data -->
                                        <tr>
                                            <td>GST</td>
                                            <td>18% (on brokerage + transaction + demat charges)</td>
                                            <td>18% (on brokerage + transaction charges)</td>
                                            <td>18% (on brokerage + transaction charges)</td>
                                            <td>18% (on brokerage + transaction charges)</td>
                                        </tr>

                                        <!-- Stamp Duty Data -->
                                        <tr>
                                            <td>Stamp Duty</td>
                                            <td>0.015% or ₹1500 / crore on buy side</td>
                                            <td>0.003% or ₹300 / crore on buy side</td>
                                            <td>0.002% or ₹200 / crore on buy side</td>
                                            <td>0.003% or ₹300 / crore on buy side</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>



                            <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                                aria-labelledby="pills-contact-tab">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">Exchange Fees</th>
                                        </tr>

                                        <!-- Table Column Names -->
                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>

                                        <!-- Transaction Charges Data -->
                                        <tr>
                                            <td>Transaction charges (From 1st October 2024)</td>
                                            <td>NSE 0.00297% per trade on buy & sell.</td>
                                            <td>NSE 0.00297% per trade on buy & sell.</td>
                                            <td>NSE Exchange turnover charge: 0.00173%</td>
                                            <td>NSE 0.03503% (on premium)</td>
                                        </tr>

                                        <!-- BSE Charges Data -->
                                        <tr>
                                            <td></td>
                                            <td>BSE charges vary as per the scrip group</td>
                                            <td>BSE charges vary as per the scrip group</td>
                                            <td>BSE Nil</td>
                                            <td>BSE 0.0325% (on premium)</td>
                                        </tr>
                                    </table>
                                </div>

                            </div>

                            <div class="tab-pane fade" id="pills-demat" role="tabpanel" aria-labelledby="pills-demat">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">Demat Transaction
                                                Charges
                                            </th>
                                        </tr>

                                        <!-- Table Column Names -->
                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>

                                        <!-- Transaction Charges Data -->


                                        <!-- DP Charges Data -->
                                        <tr>
                                            <td>DP Charges</td>
                                            <td>₹15 per scrip per day only on sell</td>
                                            <td>No charges</td>
                                            <td>No charges</td>
                                            <td>No charges</td>
                                        </tr>
                                    </table>


                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-sebi" role="tabpanel" aria-labelledby="pills-sebi">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">SEBI Charges
                                            </th>
                                        </tr>

                                        <!-- Table Column Names -->
                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>

                                        <!-- Transaction Charges Data -->


                                        <!-- DP Charges Data -->
                                        <tr>
                                            <td>SEBI Charges</td>
                                            <td>₹10/crore </td>
                                            <td>₹10/crore</td>
                                            <td>₹10/crore</td>
                                            <td>₹10/crore</td>
                                        </tr>
                                    </table>


                                </div>
                            </div>

                            <div class="tab-pane fade" id="pills-clearing" role="tabpanel"
                                aria-labelledby="pills-clearing">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <!-- Table Header -->
                                        <tr>
                                            <th colspan="5" style="background: #1f5d2e; color:white">Clearing Charges
                                            </th>
                                        </tr>

                                        <!-- Table Column Names -->
                                        <tr>
                                            <td></td>
                                            <td>Equity Delivery</td>
                                            <td>Equity Intraday</td>
                                            <td>Equity Futures</td>
                                            <td>Equity Options</td>
                                        </tr>

                                        <!-- Transaction Charges Data -->


                                        <!-- DP Charges Data -->
                                        <tr>
                                            <td>TM Clearing Charges</td>
                                            <td>₹300/crore </td>
                                            <td>₹30/crore</td>
                                            <td>₹30/crore</td>
                                            <td>₹300/crore</td>
                                        </tr>
                                    </table>
                                </div>


                            </div>



                        </div>
                    </div>
                </div>

            </div>

            <div class="section-title pt-5">
                <div class="row ">
                    <div class="col-lg-12 text-center">
                        <!-- <span class="sub-title">Our Pricing</span> -->
                        <h2 style="font-size: 35px;"><span>Schedule A-</span> Tariff Structure for Individuals / HUF /
                            Corporates </h2>
                    </div>

                </div>
            </div>

            <div class="col-lg-12 mt-5">
                <div class="founder-content">

                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a style="font-size:13px" class="nav-link active" id="pills-poa-ddpi-tab" data-bs-toggle="pill"
                                href="#pills-poa-ddpi" role="tab" aria-controls="pills-poa-ddpi"
                                aria-selected="true">POA /  DDPI </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style="font-size:13px" class="nav-link" id="pills-maintenance-tab" data-bs-toggle="pill"
                                href="#pills-maintenance" role="tab" aria-controls="pills-maintenance"
                                aria-selected="false">Annual Maintenance </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style="font-size:13px" class="nav-link" id="pills-transaction-tab" data-bs-toggle="pill"
                                href="#pills-transaction" role="tab" aria-controls="pills-transaction"
                                aria-selected="false">Transaction Charges</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style="font-size:13px" class="nav-link" id="pills-dematcharges-tab" data-bs-toggle="pill"
                                href="#pills-dematcharges" role="tab" aria-controls="pills-dematcharges"
                                aria-selected="false">Demat Charges</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a style="font-size:13px" class="nav-link" id="pills-periodic-tab" data-bs-toggle="pill" href="#pills-periodic"
                                role="tab" aria-controls="pills-periodic" aria-selected="false">Periodic Statement</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  style="font-size:13px"class="nav-link" id="pills-adhoc-tab" data-bs-toggle="pill" href="#pills-adhoc"
                                role="tab" aria-controls="pills-adhoc" aria-selected="false">Adhoc / Non Periodic </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a  style="font-size:13px" class="nav-link" id="pills-other-charges-tab" data-bs-toggle="pill"
                                href="#pills-other-charges" role="tab" aria-controls="pills-other-charges"
                                aria-selected="false">Other  Charges </a>
                        </li>
                    </ul>




                    <div class="tab-content" id="pills-tabContent">

                        <div class="tab-pane fade show active" id="pills-poa-ddpi" role="tabpanel"
                            aria-labelledby="pills-poa-ddpi">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <!-- Table Header -->
                                    <tr>
                                        <th colspan="3" style="background: #1f5d2e; color:white">POA / DDPI</th>
                                    </tr>

                                    <!-- Table Content -->
                                    <tr>
                                        <td>1</td>
                                        <td>DDPI Clients Stamp Charges
                                            Payable Upfront </td>
                                        <td>Rs. 500/- </td>
                                    </tr>
                                    <tr>

                                        <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                            charges
                                        </th>

                                    </tr>
                                </table>
                            </div>

                        </div>


                        <div class="tab-pane fade" id="pills-maintenance" role="tabpanel"
                            aria-labelledby="pills-maintenance-tab">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th colspan="3" style="background: #1f5d2e; color:white">Annual Maintenance Charges
                                        (charged annually) </th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Individuals </td>
                                    <td>Rs 300/-</td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td>HUF / NRI's </td>
                                    <td>Rs 600/-</td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td>Non-Individuals / Corporates </td>
                                    <td>Rs 900/-</td>
                                </tr>

                                <tr>

                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>
                            </table>

                        </div>



                        <div class="tab-pane fade" id="pills-transaction" role="tabpanel"
                            aria-labelledby="pills-transaction-tab">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th colspan="3" style="background: #1f5d2e; color:white">Transaction Charges</th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Market Trades - Buy</td>
                                    <td>NIL</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Market Trades - Sell</td>
                                    <td>Rs. 15/-</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Off Market Trades - Buy</td>
                                    <td>NIL</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Off Market Trades / Intradepository - Sell</td>
                                    <td>0.03% or Rs. 50/- whichever is higher</td>
                                </tr>

                                <tr>

                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>

                            </table>

                        </div>

                        <div class="tab-pane fade" id="pills-dematcharges" role="tabpanel"
                            aria-labelledby="pills-dematcharges">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th colspan="3" style="background: #1f5d2e; color:white">Demat Charges</th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Demat (per certificate)</td>
                                    <td>Rs. 150/- per certificate</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Remat (per certificate)</td>
                                    <td>Rs. 50/- per request + CDSL actuals, Currently <br>
                                        a) Rs. 50/- for every hundred securities or part thereof; or <br>
                                        b) a flat fee of Rs. 50/- per certificate whichever is higher <br>
                                        (subject to maximum - ₹5,00,000/-)
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Courier Charges (per Demat/Demat Rejection/CMR)</td>
                                    <td>Rs. 100/-</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Pledge Request</td>
                                    <td>Rs. 20/- or 0.02% (whichever is higher) as per ISIN request</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Unpledge Request</td>
                                    <td>Rs. 20/- or 0.02% (whichever is higher) as per ISIN request</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Pledge / Margin Pledge Invocation</td>
                                    <td>0.05% of the transaction charges subject to a minimum of Rs. 50</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Margin Pledge / Unpledge</td>
                                    <td>Rs. 20/- or 0.02% (whichever is higher) as per ISIN request</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Margin Repledge / Re-Unpledge</td>
                                    <td>Rs. 20/- or 0.02% (whichever is higher) as per ISIN request</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Buyback/Takeover/Delisting Charges</td>
                                    <td>₹ 50</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Offer For Sale</td>
                                    <td>₹ 50</td>
                                </tr>

                                <tr>

                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>
                            </table>


                        </div>


                        <div class="tab-pane fade" id="pills-periodic" role="tabpanel" aria-labelledby="pills-periodic">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th colspan="3" style="background: #1f5d2e; color:white">Periodic Statement</th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Mail</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Physical</td>
                                    <td>Rs. 50/- per request upto 10
                                        pages. Every Additional page at
                                        Rs. 5 + Courier charges</td>
                                </tr>

                                <tr>

                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>
                            </table>
                        </div>

                        <div class="tab-pane fade" id="pills-adhoc" role="tabpanel" aria-labelledby="pills-adhoc">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th colspan="3" style="background: #1f5d2e; color:white">Adhoc / Non Periodic
                                        Statement Requests</th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Mail</td>
                                    <td>Free</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Physical</td>
                                    <td>Rs. 50/- per request upto 10 pages. Every additional page at Rs. 5 + Courier
                                        charges</td>
                                </tr>

                                <tr>
                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>
                            </table>

                        </div>

                        <div class="tab-pane fade" id="pills-other-charges" role="tabpanel"
                            aria-labelledby="pills-other-charges">
                            <table class="table table-bordered">
                                <!-- Table Header -->
                                <tr>
                                    <th style="background: #1f5d2e; color:white">Sr. No.</th>
                                    <th style="background: #1f5d2e; color:white">Description</th>
                                    <th style="background: #1f5d2e; color:white">Charges</th>
                                </tr>

                                <!-- Table Content -->
                                <tr>
                                    <td>1</td>
                                    <td>Failed Transactions</td>
                                    <td>Rs. 50/- per ISIN</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Cheque Bounce Charges</td>
                                    <td>Rs 500/-</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Modification in CML</td>
                                    <td>Rs. 50/- per request</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>KRA Upload / Download</td>
                                    <td>Rs. 50/- per request</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Auto Square-off</td>
                                    <td>₹ 50</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Call & Trade</td>
                                    <td>₹ 50</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Interest on Delayed Payment</td>
                                    <td>0.05% per day on account debit (negative balance)</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Netbanking charges (Atom)</td>
                                    <td>₹ 15</td>
                                </tr>


                                <tr>

                                    <th colspan="3" style="font-size:15px">PL Note - 18% GST applicable on all above
                                        charges</th>

                                </tr>
                            </table>

                        </div>

                    </div>

                    <div style="display: flex;">
                        <a class="common-btn" href="./assets/material/KLFS Brokerage & Demat Charges - Dec 2024.pdf"
                            target="_blank" style="margin-left: auto;">
                            View all
                            <span></span>
                        </a>
                    </div>

                </div>
            </div>


        </div>
        </div>
    </section>
    <!-- End Founder -->


    <?php include("./footer.php") ?>