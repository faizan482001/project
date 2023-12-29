

<?php



// Check if approval parameter is set
$approve = $_GET['approve'] ?? null;

if ($approve === 'true') {
    // Assuming the ID is also passed in the URL
    $approvedLawyerId = $_GET['id'] ?? null;

    // Update the status of the lawyer to approved in the database
    $updateQuery = "UPDATE `lawyer` SET `status` = 'approved' WHERE `Id` = '$approvedLawyerId'";
    mysqli_query($conn, $updateQuery);

    // Redirect to the home page without the approval parameter
}

// Fetch only approved lawyers
$lawyer_data_query = "SELECT * FROM `lawyer` WHERE `status` = 'approved'";
$result_query = mysqli_query($conn, $lawyer_data_query);
?>
<div class="team" id="Attorneys">
    <div class="container">
        <div class="section-header">
            <h2>Meet Our Expert Attorneys</h2>
        </div>
        <div class="row">
            <?php
            while ($row = mysqli_fetch_array($result_query)) {
                echo '
                    <div style="height:500px" class="col-lg-3 col-md-6">
                        <div class="team-item">
                            <div class="team-img " style="height:250px; background-size: cover; background: no-repeat center fixed;">
                                <img style="height:100%;" src="image/' . $row[3] . '" alt="Team Image">
                            </div>
                            <div class="team-text">
                                <h2>' . $row[1] . '</h2>
                                <p>' . $row[7] . '</p>
                                <div class="team-social">
                                    <a class="social-tw view-profile-btn" data-toggle="modal" data-target="#profileModal' . $row[0] . '" data-lawyerid="' . $row[0] . '" href="#">View Profile</a>
                                </div>
                            </div>
                        </div>
                    </div>
                ';
            }
            ?>
        </div>
    </div>
</div>

<?php
// Fetch only approved lawyers (again to display modals)
$result_query = mysqli_query($conn, $lawyer_data_query);

while ($row = mysqli_fetch_array($result_query)) {
    echo '
        <!-- Your updated modal for displaying lawyer details -->
        <div class="modal fade" id="profileModal' . $row[0] . '" tabindex="-1" role="dialog" aria-labelledby="profileModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="profileModalLabel">Lawyer Details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="profileModalBody">
                        <!-- Lawyer details sections -->
                        <div class="row">
                            <div class="col-md-4" style="height:350px;width:350px;">
                                <img style="height:100% ; width:100%;background-size:cover;object-fit:cover; border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" src="image/' . $row[3] . '" alt="Lawyer Image" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <h3>Name:</h3> <p>' . $row[1] . '</p>
                                <h3>Specialization: </h3>  <p>' . $row[7] . '</p>
                                <h3>Education:</h3><p>' . $row[8] . '</p>
                                <h3>Experience:</h3><p>' . $row[11] . '</p>
                                <h3>Appoinment Fee:</h3><p>' . $row[12] . '</p>
                                <!-- Add more details as needed -->
                            </div>
                        </div>

                        <!-- Additional details or sections can be added based on your requirements -->

                        <!-- Appointment button -->
                        <div class="text-center mt-3">
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#appointmentModal' . $row[0] . '">Request Appointment</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

        <!-- Your new modal for appointment request -->
        <div class="modal fade" id="appointmentModal' . $row[0] . '" tabindex="-1" role="dialog" aria-labelledby="appointmentModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="appointmentModalLabel">Appointment Request</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- Your HTML code for the form -->
                        <form method="POST">
                        <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Name</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" type="text" name="name" placeholder="Name Here" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">City</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" placeholder="City Here" name="city" type="City" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Email</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="email" placeholder="xyz@example.com" type="email" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Contact</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control" name="contact" placeholder="(111)-111-1111" type="tel" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Case field</label>
                                <div class="col-sm-12 col-md-10">
                                    <select id="case_field" name="case_field" class="form-control" required>
                                        <option value="'. $row[7] . '">' . $row[7] . '</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Date</label>
                                <div class="col-sm-12 col-md-10">
                                    <input class="form-control date-picker" name="date" placeholder="Select Date" type="date" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Time</label>
                                <div class="col-sm-12 col-md-10">
                                    <input name="time" class="form-control time-picker" placeholder="Select time" type="time" required />
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Lawyer</label>
                                <div class="col-sm-12 col-md-10">
                                    <select id="lawyer" name="lawyer" class="form-control" required>
                                        <option value="'. $row[1] . '">' . $row[1] . '</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-12 col-md-2 col-form-label" style="color:black;">Lawyer Fee</label>
                                <div class="col-sm-12 col-md-10">
                                    <input type="text" name="charges" class="form-control time-picker" value="'. $row[12] . '" readonly>
                                </div>
                            </div>
                            
                            <input class="btn btn-primary" type="submit" name="submite" value="Get Appointment">
                            </div>
                        </form>
                   
                </div>
            </div>
        </div>
    ';
}
?>
<?php
$conn = mysqli_connect("localhost", "root", "", "lawyer_form");

include 'connection.php';

if (isset($_POST['submite']))  {
    // Check if the keys are set in the $_POST array
    if (isset($_POST['name'], $_POST['city'], $_POST['email'], $_POST['contact'], $_POST['case_field'], $_POST['date'], $_POST['time'], $_POST['lawyer'], $_POST['charges'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $case_field = mysqli_real_escape_string($conn, $_POST['case_field']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $lawyer = mysqli_real_escape_string($conn, $_POST['lawyer']);
        $charges = mysqli_real_escape_string($conn, $_POST['charges']);

        $insert_query = "INSERT INTO appointments (name, city, email, contact, case_field, date, time, lawyer, lawyer_fee) 
        VALUES ('$name', '$city', '$email', '$contact', '$case_field', '$date', '$time', '$lawyer', '$charges')";

        if (mysqli_query($conn, $insert_query)) {
            echo "<script>alert('Appointment booked successfully.');</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Please fill in all the required fields.');</script>";
    }
}
?>
