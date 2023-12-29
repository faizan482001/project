<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="path/to/owl.carousel.min.css">
<link rel="stylesheet" href="path/to/owl.theme.default.min.css">

<!-- Blog Start -->
<div class="blog" id="blog">
    <div class="container">
        <div class="section-header">
            <h2>Latest From Blog</h2>
        </div>

        <?php
        // Include your database connection file
        include 'connection.php';

        // Query to get blog items from the database
        $query = "SELECT * FROM `lawyers_blog`";
        $result = mysqli_query($conn, $query);

        // Check if the query was successful
        if (!$result) {
            die("Query failed: " . mysqli_error($conn));
        }
        ?>

        <div class="owl-carousel blog-carousel"style=" border:2px solid #ddd;padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);">
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <div class="item">
                    <div class="blog-item" style=" padding: 15px; border-radius: 8px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);">
                        <img style="height: 250px; width: 100%; background-size: cover; background: no-repeat center fixed; border-radius: 8px;"
                            src="./image/<?php echo $row['lawyer_img']; ?>" alt="Blog Image">
                        <h2><?php echo $row['lawyer_name']; ?></h2>
                        <div class="meta">
                            <i class="fa fa-list-alt"></i>
                            <a href="#"><?php echo $row['lawyer_field']; ?></a>
                            <i class="fa fa-calendar-alt"></i>
                            <p><?php echo date("d-M-Y", strtotime($row['date'])); ?></p>
                        </div>
                        <p>
                            <?php echo substr($row['blog_content'], 0, 150) . '...'; ?>
                        </p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>

<!-- Owl Carousel JS -->
<script src="path/to/jquery.min.js"></script>
<script src="path/to/owl.carousel.min.js"></script>

<!-- Initialize Owl Carousel -->
<script>
    $(document).ready(function () {
        $(".blog-carousel").owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: true
                },
                1000: {
                    items: 3,
                    nav: true,
                    loop: false
                }
            }
        });
    });
</script>


<?php
// Close the database connection
mysqli_close($conn);
?>

        </div>
    </div>
</div>
<!-- Blog End -->

<!-- Newsletter Start --> 
<div class="newsletter">
    <div class="container">
        <div class="section-header">
            <h2>Subscribe Our Newsletter</h2>
        </div>

        <?php
include 'connection.php';

if (isset($_POST['submit']))  {
    $useremail1 = mysqli_real_escape_string($conn, $_POST['email']);
    $query1="INSERT INTO `subscriber`(`email`) VALUES ('$useremail1')";
    $result12=mysqli_query($conn,$query1);
    if($result12){
        echo "<script>alert('THANK YOU FOR SUBSCRIBING.');</script>";
    }
}

?>



        <div class="form"method="post">
            <form method="post" onsubmit="return validateForm()">

                <input class="form-control" name="email"  placeholder="Email here"
                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                <input type="submit" class="btn" name="submit" id="submit">

            </form>
        </div>
    </div>
</div>
<!-- Newsletter End -->


<script>
function validateForm() {
    // Get the email input value
    var emailInput = document.getElementById('emailInput').value;

    // Define a regular expression for valid email format
    var emailRegex = [a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$;

    // Check if the email is in a valid format
    if (!emailRegex.test(emailInput)) {
        alert('Please enter a valid email address.');
        return false; // Prevent form submission
    }

    // If the email is valid, allow form submission
    return true;
}
</script>