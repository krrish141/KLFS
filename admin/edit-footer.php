<?php
session_start();
include('includes/config.php');
error_reporting(0);

if(strlen($_SESSION['login'])==0) { 
    header('location:index.php');
} else {
    $msg = ''; // Initialize success message variable
    $error = ''; // Initialize error message variable
    
    if(isset($_POST['update'])) {
        $content = mysqli_real_escape_string($con, $_POST['description']); // Fixed field name
        $id = intval($_GET['id']); // Fetching ID securely

        // Update the content
        $query = "UPDATE footer SET content='$content' WHERE id = $id";

        if(mysqli_query($con, $query)) {
            $msg = "Data updated successfully.";
        } else {
            $error = "Error updating data: " . mysqli_error($con);
        }
    }

    // Fetch the existing data
    $id = intval($_GET['id']);
    $query = mysqli_query($con, "SELECT * FROM footer WHERE id='$id'");
    $row = mysqli_fetch_array($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <title>Kalpalabdhi Financials |Edit Footer</title>

    <!-- App css -->
    <!-- Summernote css -->
    <link href="plugins/summernote/summernote.css" rel="stylesheet" />

    <!-- Select2 -->
    <link href="plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />

    <!-- Jquery filer css -->
    <link href="plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
    <link href="plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/switchery/switchery.min.css">
    <script src="assets/js/modernizr.min.js"></script>

</head>


<body class="fixed-left">

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Top Bar Start -->
        <?php include('includes/topheader.php');?>
        <!-- Top Bar End -->


        <!-- ========== Left Sidebar Start ========== -->
        <?php include('includes/leftsidebar.php');?>
        <!-- Left Sidebar End -->
        <div class="content-page">
            <!-- Start content -->
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="page-title-box">
                                <h4 class="page-title">Edit Footer</h4>
                                <ol class="breadcrumb p-0 m-0">
                                    <li>
                                        <a href="#">Admin</a>
                                    </li>
                                    <li>
                                        <a href="#">Footer </a>
                                    </li>
                                    <li class="active">
                                        Edit Footer
                                    </li>
                                </ol>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-sm-12">


                            <div class="row">
                                <div class="col-sm-6">
                                    <!---Success Message--->
                                    <?php if($msg){ ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Well done!</strong> <?php echo htmlentities($msg);?>
                                    </div>
                                    <?php } ?>
                                    <!---Error Message--->
                                    <?php if($error){ ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Oh snap!</strong> <?php echo htmlentities($error);?>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-md-12">
                                    <form name="editpost" method="post">
                                        <div class="form-group m-b-20">
                                            <label for="description">Footer Content</label>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="card-box">
                                                        <h4 class="m-b-30 m-t-0 header-title"><b>Post Details</b>
                                                        </h4>
                                                        <textarea class="summernote" name="description"
                                                            required><?php echo htmlspecialchars($row['content']); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" name="update"
                                            class="btn btn-success waves-effect waves-light">Update</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php include('includes/footer.php');?>
    </div>
    </div>
    <!-- END wrapper -->



    <script>
    var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="plugins/summernote/summernote.min.js"></script>
    <!-- Select 2 -->
    <script src="plugins/select2/js/select2.min.js"></script>
    <!-- Jquery filer js -->
    <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>

    <!-- page specific js -->
    <script src="assets/pages/jquery.blog-add.init.js"></script>

    <!-- App js -->
    <script src="assets/js/jquery.core.js"></script>
    <script src="assets/js/jquery.app.js"></script>

    <script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 240, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false // set focus to editable area after initializing summernote
        });
        // Select2
        $(".select2").select2();

        $(".select2-limiting").select2({
            maximumSelectionLength: 2
        });
    });
    </script>
    <script src="plugins/switchery/switchery.min.js"></script>

    <!--Summernote js-->
    <script src="plugins/summernote/summernote.min.js"></script>



</body>

</html>
<?php } ?>