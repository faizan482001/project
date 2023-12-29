<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the question ID and answer from the POST data
    $questionId = $_POST['qid'];
    $userAnswer = mysqli_real_escape_string($conn, $_POST['answer']);

    // Update the answer in the database using prepared statement
    $updateQuery = "UPDATE `qa` SET answer = ?, status = 'true' WHERE id = ?";
    $stmt = mysqli_prepare($conn, $updateQuery);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "si", $userAnswer, $questionId);
    
    // Execute the statement
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Return success message if the update is successful
        echo 'success';
      ;
    } else {
        // Return error message if the update fails
        echo 'error';
    }

    // Close the statement
    mysqli_stmt_close($stmt);
}
?>
