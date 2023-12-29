<!-- Service Start -->
<div class="service" id="practice">
    <div class="container">
        <div class="section-header">
            <h2>Our Practice Areas</h2>
        </div>
        <div class="row">
            <?php
            include 'connection.php';
            $category_query = "SELECT * FROM `services`";
            $category_result = mysqli_query($conn, $category_query);

            while ($category_row = mysqli_fetch_assoc($category_result)) {
                // You need to adjust these fields based on your database structure
                $service_id = $category_row['id'];
                $service_name = $category_row['name'];
                $service_description = $category_row['description'];
            ?>
                <div class="col-lg-4 col-md-6 min-vh-400px">
                    <div class="service-item custom-min-height">
                        <div class="service-icon">
                            <i class="fa fa-landmark"></i>
                        </div>
                        <h3><?php echo $service_name; ?></h3>
                        <p>
                            <?php echo substr($service_description, 0, 100); ?>... <br><br>
                            <a href="#" class="btn" data-toggle="modal" data-target="#learnMoreModal<?php echo $service_id; ?>">Learn More</a>
                        </p>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="learnMoreModal<?php echo $service_id; ?>" tabindex="-1" role="dialog" aria-labelledby="learnMoreModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h3 class="modal-title" id="learnMoreModalLabel"><?php echo $service_name; ?></h3>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body" style="color:black;">
                                <?php echo $service_description; ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
<!-- Service End -->
