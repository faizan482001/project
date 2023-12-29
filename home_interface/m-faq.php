<!-- FAQs Start -->
<!-- FAQs Start -->
<div class="faqs"id="faqs">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="faqs-img">
                    <img src="img/4.jpeg" alt="Image">
                </div>
            </div>
            <div class="col-md-7">
                <div class="section-header">
                    <h2>Have A Questions?</h2>
                </div>
                <div id="accordion" style="max-height: 400px; overflow-y: auto;">

                <?php
include 'connection.php';

// Use a different variable for the FAQ query result to avoid conflicts
$faq_query = "SELECT * FROM `qa`";
$result_faq = mysqli_query($conn, $faq_query);
$count = 1;

while ($row_faq = mysqli_fetch_assoc($result_faq)) {
    // Check if the status is 'true' before displaying the question
    if ($row_faq['status'] == 'true') {
        echo '<div class="card">
                <div class="card-header">
                    <a class="card-link collapsed" data-toggle="collapse" href="#collapse' . $count . '" aria-expanded="false">
                        <span>' . $count . '</span>' . $row_faq['question'] . '
                    </a>
                </div>
                <div id="collapse' . $count . '" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        ' . $row_faq['answer'] . '
                    </div>
                </div>
            </div>';
        $count++;
    }
}
?>

                <a class="btn" href="#" data-toggle="modal" data-target="#askMoreModal">Ask more</a>
            </div>
        </div>
    </div>
</div>
<!-- FAQs End -->

<!-- Modal Start -->
<div class="modal fade" id="askMoreModal" tabindex="-1" role="dialog" aria-labelledby="askMoreModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="askMoreModalLabel">Ask a Question</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <?php
include 'connection.php';

if (isset($_POST['submit'])) {
    // Check if the "question" key is present in the $_POST array
    if (isset($_POST['question'])) {
        $question = $_POST['question'];

        $insert_qa_query = "INSERT INTO `qa` (question) VALUES ('$question')";

        if (mysqli_query($conn, $insert_qa_query)) {
            echo "<script>alert('Your question has been sent. Please wait for any response.');</script>";
        }
    } 
}
mysqli_close($conn);
?>


            
            <div class="modal-body">
                <!-- Form to submit questions -->
                <form  method="POST">
                    <div class="form-group">
                        <label for="question">Your Question:</label>
                        <textarea class="form-control"  name="question" rows="3" required></textarea>
                    </div>
                    <button type="submit" name="submit"class="btn btn-primary">Submit Question</button>
                </form>
         
              
                
            </div>
        </div>
    </div>
</div>


