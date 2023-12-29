<?php
$con = mysqli_connect("localhost", "root", "", "lawyer_form");

// Check if the ID parameter is set
$dltappoint = $_GET['id'] ?? null;

if ($dltappoint) {
   
    $deleteQuery = "DELETE FROM `appointments` WHERE `Id` = '$dltappoint'";
    mysqli_query($con, $deleteQuery);
}

// Redirect back to the admin page after deletion
header('Location:index.php');
exit();
?>
