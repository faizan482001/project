<?php
// Include your database connection file
include 'connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $lawyerId = mysqli_real_escape_string($conn, $_POST['lawyerid']);  // Check if the provided Lawyer ID exists in the lawyers table
    $checkQuery = "SELECT * FROM lawyer WHERE bar_council_id = '$lawyerId'";
    $result = mysqli_query($conn, $checkQuery);

    if (mysqli_num_rows($result) > 0) {
        // Lawyer ID exists, fetch the lawyer's data

        // Fetch the lawyer's data
        $lawyerDataQuery = "SELECT * FROM lawyer WHERE bar_council_id = '$lawyerId'";
        $lawyerDataResult = mysqli_query($conn, $lawyerDataQuery);
        $lawyerData = mysqli_fetch_assoc($lawyerDataResult);

        // Open the modal for displaying lawyer's data
        echo '<script>
                $("#viewLawyerModal").modal("show");
                $("#viewLawyerModal").on("shown.bs.modal", function () {
                    // Set the fetched data in the modal
                    $("#lawyerName").text("' . $lawyerData['name'] . '");
                    $("#lawyerField").text("' . $lawyerData['practice_field'] . '");
                    // Add more fields as needed
                });

                // Event listener for the form submission in the viewLawyerModal
                $("#addBlogFormView").on("submit", function(e) {
                    e.preventDefault();
                    // Perform AJAX submission or submit the form normally based on your needs
                    // Once the submission is successful, you can close the modal
                    // For example, you can use AJAX like $.post("submit_blog.php", $("#addBlogFormView").serialize(), function(data) { ... });
                    $("#viewLawyerModal").modal("hide");
                    $("#addBlogModal1").modal("show");
                });
              </script>';
    } else {
        // Lawyer ID does not exist, return an error
        echo '<script>alert("Invalid Lawyer ID. Please enter a valid ID.");</script>';
    }
}
?>


<!-- 
//     if (mysqli_num_rows($result) > 0) {
//         // Lawyer ID exists, fetch additional data
//         $row = mysqli_fetch_assoc($result);
//         $lawyerName = $row['name'];
//         $lawyerField = $row['case_field'];

//         // Insert data into the lawyers_blog table
//         $insertQuery = "INSERT INTO lawyers_blog (lawyer_name, lawyer_field, blog_content) VALUES ('$lawyerName', '$lawyerField', '$blogContent')";

//         if (mysqli_query($conn, $insertQuery)) {
//             // Insertion successful
//             echo '<script>alert("Blog added successfully.");</script>';
//             header('location:home.php');
//         } else {
//             // Insertion failed
//             echo '<script>alert("Error adding blog: ' . mysqli_error($conn) . '");</script>';
//         }
//     } else {
//         // Lawyer ID does not exist, return an error
//         echo '<script>alert("Invalid Lawyer ID. Please enter a valid ID.");</script>';
//     }
// } else {
//     // If the form is not submitted, redirect to an error page or handle accordingly
//     header('Location: error.php');
//     exit();
// }

// // Close the database connection
// mysqli_close($conn);
// ?> -->
