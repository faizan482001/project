<!-- Footer Start -->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="footer-about">
                    <h2>About Us</h2>
                    <p class=" pra ">
                        At lawy Forge, our mission is clear — to deliver legal solutions with excellence and compassion.
                        We aim to be a beacon of justice, guiding our clients through legal challenges and empowering
                        them with the knowledge they need to make informed decisions.
                        Our team comprises seasoned legal professionals with a wealth of experience across various
                        practice areas. </p>
                </div>
            </div>
            <div class="col-md-6 col-lg-8">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Services Areas</h2>
                            <a href="#practice">Civil Law</a>
                            <a href="#practice">Family Law</a>
                            <a href="#practice">Business Law</a>
                            <a href="#practice">Education Law</a>
                            <a href="#practice">Immigration Law</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-link">
                            <h2>Useful Pages</h2>
                            <a href="#about">About Us</a>
                            <a href="#practice">Case Studies</a>
                            <a href="#Attorneys">Attorneys</a>
                            <a href="#blog">Blogs</a>
                            <a href="#faqs">FAQs</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact" id="contact">
                            <h2>Get In Touch</h2>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-map-marker-alt"></i>Aptech Orangi Town Center Address:
                                LS43, 1st floor, Above Bank Al-Falah, Near 5 No Chowrangi, Sector 11, Orangi Town,
                                Karachi.</p>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-phone-alt"></i>+920326-2383020</p>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-envelope"></i>info-orn@aptech-education.</p>
                            <h2>Project By:</h2>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-user"></i>
                            FAIZAN ALI</p>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-user"></i> ABDUL REHMAN</p>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-user"></i> HARIS REHAN</p>
                            <p class=" pra "style="font-size:12px;"><i class="fa fa-user"></i>
                                ABDUL WAHEED</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Footer End -->



</div>

<!-- Modal -->


<script>
// This script handles the submission response and displays an alert
$(document).ready(function() {
    // Handle question submission form
    $('#questionForm').submit(function(e) {
        e.preventDefault();

        // Perform AJAX submission
        $.ajax({
            type: 'POST',
            url: 'submit_question.php',
            data: $(this).serialize(),
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    // Display a success alert
                    alert(response.message);

                    // Optionally, you can reload the questions and answers section
                    // You may want to consider using AJAX to update the content without page reload
                    location.reload();
                } else {
                    // Display an error alert
                    alert(response.message);
                }
            }
        });
    });
});
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
// Handle form submission using AJAX
$(document).ready(function() {
    $('#questionForm').submit(function(e) {
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: 'submit_question.php',
            data: $(this).serialize(),
            success: function() {
                alert('Question submitted successfully!');
                // You can update the modal content here if needed
            }
        });
    });
});



$(document).ready(function() {
    $('.view-profile-btn').on('click', function() {
        var lawyerId = $(this).data('lawyerid');

        // AJAX request to fetch lawyer details
        $.ajax({
            url: 'path/to/your/server-side-script.php', // Replace with the actual path
            method: 'GET',
            data: {
                lawyerId: lawyerId
            },
            success: function(response) {
                // Update modal content with lawyer details
                $('#profileModalBody').html(response);
            },
            error: function(error) {
                console.error('Error fetching lawyer details: ', error);
            }
        });
    });
});
</script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="vendors/scripts/core.js"></script>
<script src="vendors/scripts/script.min.js"></script>
<script src="vendors/scripts/process.js"></script>
<script src="vendors/scripts/layout-settings.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>