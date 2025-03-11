<?php 

include('../admin/includes/config.php');
// error_reporting(0);

if(isset($_POST['mobile'])) { 
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    // Capture current timestamp
    $timestamp = date("Y-m-d H:i:s");

    // Capture and extract device name
    function getDeviceName($userAgent) {
        if (stripos($userAgent, 'Windows') !== false) return 'Windows';
        if (stripos($userAgent, 'Mac') !== false) return 'Mac';
        if (stripos($userAgent, 'iPhone') !== false) return 'iPhone';
        if (stripos($userAgent, 'iPad') !== false) return 'iPad';
        if (stripos($userAgent, 'Android') !== false) return 'Android';
        if (stripos($userAgent, 'Linux') !== false) return 'Linux';
        return 'Unknown';
    }

    $device = getDeviceName($_SERVER['HTTP_USER_AGENT']);

    $status = 1;

    // Insert data into the database
    $query = "INSERT INTO openaccount (mobile, device, created_at, Is_Active) VALUES ('$mobile', '$device', '$timestamp', '$status')";
    
    if(mysqli_query($con, $query)) {
        // Redirect to index.php with success message
        header("Location: ../index.php?message=We will connect you shortly");
        exit();
    } else {
        // Redirect to index.php with an error message
        header("Location: ../index.php?message=Error inserting data");
        exit();
    }
}

?>
