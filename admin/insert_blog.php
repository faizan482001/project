<?php

// Include your database connection file
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
    $lawyer_name = $_POST['lawyer_name'];
    $lawyer_img = $_POST['lawyer_img'];
    $lawyer_field = $_POST['lawyer_field'];
    $blog_content = $_POST['blog_content'];
    $date = date("Y-m-d H:i:s");

    // Insert blog into the database
    $insert_query = "INSERT INTO `lawyers_blog` ( `lawyer_name`, `lawyer_img`, `lawyer_field`, `blog_content`) VALUES ('$lawyer_name', '$lawyer_img', '$lawyer_field', '$blog_content')";

    $insert_result = mysqli_query($conn, $insert_query);

    // Check if the insertion was successful
    if ($insert_result) {
       
        echo  "<script>alert('Blog inserted successfully!');</script>";   
    header('location:index.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
// Close the database connection
mysqli_close($conn);
?>
