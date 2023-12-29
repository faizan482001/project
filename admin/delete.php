



<?php
$con = mysqli_connect("localhost", "root", "", "lawyer_form");

// Check if the ID parameter is set
$lawyerId = $_GET['id'] ?? null;

if ($lawyerId) {
   
    $deleteQuery = "DELETE FROM `lawyer` WHERE `Id` = '$lawyerId'";
    mysqli_query($con, $deleteQuery);
}

// Redirect back to the admin page after deletion
header('Location:registration-lawyer.php');
exit();
?>
