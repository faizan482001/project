<?php
// Include your database connection file
include 'connection.php';

// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Get the appointment ID from the URL
    $appointmentId = $_GET['id'];

    // Update the status in the database
    $updateQuery = "UPDATE appointments SET status = 'true' WHERE id = '$appointmentId'";
    
    if (mysqli_query($conn, $updateQuery)) {
        echo "<script> alert('Appoinment Success') </script>";
        header('location:index.php');
    } else {
        echo "Error updating status: " . mysqli_error($conn);
    }
} else {
    // Handle the case when 'id' is not set in the URL
    echo "Invalid request. Please provide a valid appointment ID.";
}
?>
