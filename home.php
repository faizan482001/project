<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        // Redirect to the login page or display a message
        header('location:login.php'); // Adjust 'login.php' to your actual login page
        exit();
    }
?>


<?php
include 'home_interface/m-header.php';
include 'home_interface/m-slider.php';
include 'home_interface/m-about.php';
include 'home_interface/m-service.php';
include 'home_interface/top-feature.php';
include 'home_interface/m-team.php';
include 'home_interface/m-faq.php';
include 'home_interface/m-blog.php';
include 'home_interface/m-footer.php';



?>            

    