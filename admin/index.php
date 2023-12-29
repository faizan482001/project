

<?php
    session_start();
    if (!isset($_SESSION['login_user'])) {
       
        header('location:adminlogin.php');
        exit();
    }
?>




<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>LAWYERS</title>

    <!-- Site favicon -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="src/plugins/fullcalendar/fullcalendar.css" />
    <link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
        crossorigin="anonymous"></script>
    <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            "gtm.start": new Date().getTime(),
            event: "gtm.js"
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->







    <style>
    .logos {

        margin-right: 10px;
        font-size: 20px;

    }


    /* Center text in the loader-logo */
    .loader-logo {
        text-align: center;
    }

    /* Center text in the header */
    .header {
        text-align: center;
    }

    /* Center text in the title section */
    .title {
        text-align: center;
    }

    /* Center text in the main-container */
    .main-container {
        text-align: center;
    }

    /* Center text in the card-box */
    .card-box {
        text-align: center;
    }

    /* Add some spacing between the icons in logos */
    .logos {
        margin-right: 10px;
        font-size: 20px;
    }

    /* Center text in the user-list */
    .user-list {
        text-align: center;
    }

    /* Center text in the disease chart */
    #diseases-chart {
        margin: 0 auto;
    }

    /* Center text in the upgrade section */
    .max-width-300 {
        max-width: 300px;
        margin: 0 auto;
    }

    /* Center text in the table header */
    .data-table thead th {
        text-align: center;
    }

    /* Center text in the table cells */
    .data-table td {
        text-align: center;
    }

    /* Center text in the modal */
    #editModal {
        text-align: center;
    }
    </style>
</head>

<body>


    <div class="header">
        <div class="header-left">
            <div class="menu-icon bi bi-list"></div>

            <div class="header-search">
                <form>
                    <div class="form-group mb-0">
                        <i class="dw dw-search2 search-icon"></i>
                        <input type="text" class="form-control search-input" placeholder="Search Here" />
                        <div class="dropdown">
                            <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                <i class="ion-arrow-down-c"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">From</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">To</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-12 col-md-2 col-form-label">Subject</label>
                                    <div class="col-sm-12 col-md-10">
                                        <input class="form-control form-control-sm form-control-line" type="text" />
                                    </div>
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-primary">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="header-right">
            <div class="dashboard-setting user-notification">

            </div>

            <div class="user-info-dropdown">
                <div class="dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="user-icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                        <span class="user-name">Admin Panel Control</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">


                        <a class="dropdown-item" href="../logout.php"><i class="dw dw-user"></i> Logout</a>
                        <a class="dropdown-item" href="../login.php"><i class="dw dw-home"></i> Home</a>

                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="left-side-bar">
        <div class="brand-logo">
            <a href="index.php">
                <h2 style=" color:white;"> LAWYERS </h2>

            </a>
            <div class="close-sidebar" data-toggle="left-sidebar-close">
                <i class="ion-close-round"></i>
            </div>
        </div>
        <div class="menu-block customscroll">
            <div class="sidebar-menu">
                <ul id="accordion-menu">



                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle">
                            <span class="logos"><i class="fa-brands fa-wpforms"></i></span><span
                                class="mtext">Forms</span>
                        </a>
                        <ul class="submenu">
                            <li><a href="form-basic.php">Get appoinment</a></li>
                            <li><a href="registration_lawyer.php">lawyer register</a></li>
                            <li><a href="Field-description.php">insert Fields Descriptions </a></li>


                        </ul>
                    </li>
                    <li>
                        <a href="questions.php" class="dropdown-toggle no-arrow">
                            <span class="logos"><i class="fa-regular fa-file"></i></span><span
                                class="mtext">Questions</span>
                        </a>
                    </li>

                    <li>
                        <a href="lawyer_requests.php" class="dropdown-toggle no-arrow">
                            <span class="logos"><i class="fa-solid fa-users"></i></span><span class="mtext">Layers
                                Request</span>
                        </a>
                    </li>


                </ul>
            </div>
        </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="main-container">
        <div class="xs-pd-20-10 pd-ltr-20">
            <div class="title pb-20">
                <h2 class="h3 mb-0">Lawyers Overview</h2>
            </div>

            <div class="row pb-10">
                <?php
include 'connection.php';

// Query to count total appointments
$totalAppointmentsQuery = "SELECT COUNT(*) as totalAppointments FROM appointments WHERE `status` = 'true'";
$totalAppointmentsResult = mysqli_query($conn, $totalAppointmentsQuery);

if (!$totalAppointmentsResult) {
    die("Query failed: " . mysqli_error($conn));
}

$totalAppointments = mysqli_fetch_assoc($totalAppointmentsResult)['totalAppointments'];
?>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark"><?php echo $totalAppointments; ?></div>
                                <div class="font-14 text-secondary weight-500">
                                    Appointments
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i class="fa-regular fa-calendar" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <?php
include 'connection.php';

// Query to count total clients
$totalClientsQuery = "SELECT COUNT(*) as totalClients FROM user";
$totalClientsResult = mysqli_query($conn, $totalClientsQuery);

if (!$totalClientsResult) {
    die("Query failed: " . mysqli_error($conn));
}

$totalClients = mysqli_fetch_assoc($totalClientsResult)['totalClients'];
?>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark"><?php echo $totalClients; ?>+</div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Clients
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#ff5b5b">
                                    <span class="icon-copy ti-heart"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
include 'connection.php';


$totalCasesQuery = "SELECT COUNT(*) as totalCases FROM appointments  WHERE `status` = 'true'"; 
$totalCasesResult = mysqli_query($conn, $totalCasesQuery);

if (!$totalCasesResult) {
    die("Query failed: " . mysqli_error($conn));
}

$totalCases = mysqli_fetch_assoc($totalCasesResult)['totalCases'];
?>
                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark"><?php echo $totalCases ; ?></div>
                                <div class="font-14 text-secondary weight-500">
                                    Total Cases
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i class="fa-regular fa-file" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                include 'connection.php';

                // Query to fetch the sum of lawyer's fee for appointments with status 'true'
                $earningQuery = "SELECT SUM(lawyer_fee) AS total_earning FROM appointments WHERE status = 'true'";
                $result = mysqli_query($conn, $earningQuery);
                
                if ($result) {
                    $row = mysqli_fetch_assoc($result);
                    $totalEarning = $row['total_earning'];



?>

                <div class="col-xl-3 col-lg-3 col-md-6 mb-20">
                    <div class="card-box height-100-p widget-style3">
                        <div class="d-flex flex-wrap">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark"><?php echo number_format($totalEarning) ;?>$
                                </div>
                                <div class="font-14 text-secondary weight-500">Earning</div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#09cc06">
                                    <i class="icon-copy fa fa-money" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php  }?>

            <div class="card-box min-height-200px pd-20 mb-20" data-bgcolor="#455a64">
                <div class="d-flex justify-content-between pb-20 text-white">
                    <div class="icon h1 text-white">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <!-- <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i> -->
                    </div>
                    <div class="font-14 text-right">
                        <div><i class="icon-copy ion-arrow-up-c"></i> 2.69%</div>
                        <div class="font-12">Since last month</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-end">
                    <div class="text-white">
                        <div class="font-14">Appointments</div>
                        <div class="font-24 weight-500"><?php echo $totalAppointments; ?></div>
                    </div>
                    <div class="max-width-150">
                        <div id="appointment-chart"></div>
                    </div>
                </div>
            </div>


            <div class="card-box min-height-200px pd-20" data-bgcolor="#265ed7">
                <div class="d-flex justify-content-between pb-20 text-white">
                    <div class="icon h1 text-white">
                        <i class="fa-regular fa-file" aria-hidden="true"></i>
                    </div>
                    <div class="font-14 text-right">
                        <div><i class="icon-copy ion-arrow-down-c"></i> 3.69%</div>
                        <div class="font-12">Since last month</div>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-end">
                    <div class="text-white">
                        <div class="font-14">Cases</div>
                        <div class="font-24 weight-500"><?php echo $totalCases ; ?></div>
                    </div>
                    <div class="max-width-150">
                        <div id="surgery-chart"></div>
                    </div>
                </div>
            </div>
            <?php
// Include your database connection file
include 'connection.php';

// Query to get approved lawyers from the database
$query = "SELECT * FROM `lawyer` WHERE `status` = 'approved'";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

?>

            <div class="card-box min-height-200px pd-20 my-5">
                <div class="d-flex justify-content-center pb-20 align-items-center">
                    <div class="h5 mb-0">
                        <h1>Our Lawyers</h1>
                    </div>
                </div>

                <div class="user-list" style="max-height: 100%; overflow-y: auto;">
                    <ul>
                        <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                        <hr style="border-top: 1px solid black;">
                        <li class="d-flex align-items-center justify-content-between">
                            <div class="name-avatar d-flex align-items-center pr-2">
                                <div class="avatar mr-2 flex-shrink-0">
                                    <img src="../image/<?php echo $row['image']; ?>" class="border-radius- box-shadow"
                                        width="50" height="50" alt="" />
                                </div>
                                <div class="txt  d-flex align-items-center justify-content-between">
                                    <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                        data-color="#265ed7">4.9</span>
                                    <div class="font-14 px-2 weight-600"><?php echo $row['name']; ?></div>
                                    <div class="font-12 px-2 weight-500" data-color="#b2b1b9">
                                        <?php echo $row['practice_field']; ?>
                                    </div>
                                </div>
                            </div>
                            <div class="cta flex-shrink-0">
                                <a href="#" class="btn btn-sm btn-outline-primary" data-toggle="modal"
                                    data-target="#addBlogModal<?php echo $row['Id'] ?>">Add Blog</a>

                                <a href="index_lawyer_delt.php?id=<?php echo $row['Id'] ?>"
                                    class="btn btn-sm btn-outline-danger">Delete</a>
                            </div>
                        </li>

                        <!-- Add Blog Modal -->
                        <div class="modal fade" id="addBlogModal<?php echo $row['Id'] ?>" tabindex="-1" role="dialog"
                            aria-labelledby="addBlogModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="addBlogModalLabel">Add Blog</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Form to insert blog -->
                                        <form action="insert_blog.php" method="POST" class="mt-4">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-8 mx-auto">
                                                        <div class="team-img mb-3"
                                                            style="height: 250px; background-size: cover; background: no-repeat center fixed;">
                                                            <img style="height: 100%;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                                                src="../image/<?php echo $row['image']; ?>"
                                                                alt="Team Image" name="lawyer_img">


                                                        </div>
                                                        <div class="form-group">
                                                            <label for="lawyer_name"
                                                                style="font-size:20px;font-weight:900;">Lawyer
                                                                Name</label>
                                                            <input class="form-control"
                                                                style="text-align:center;border:1px solid black;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                                                readonly name="lawyer_name"
                                                                value="<?php echo $row['name']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="lawyer_field"
                                                                style="font-size:20px;font-weight:900;">Lawyer
                                                                Field</label>
                                                            <input class="form-control"
                                                                style="text-align:center;border:1px solid black;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                                                readonly name="lawyer_field"
                                                                value="<?php echo $row['practice_field']; ?>">
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="blog_content"
                                                                style="font-size:20px;font-weight:900;">Blog
                                                                Content</label>
                                                            <textarea class="form-control"
                                                                style="border:1px solid black;border-radius: 8px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"
                                                                id="blog_content" name="blog_content" rows="5"
                                                                required></textarea>
                                                        </div>
                                                        <input type="hidden" name="lawyer_img" value="../image/<?php echo $row['image']; ?>">


                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Submit
                                                                Blog</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
            }
            ?>
                    </ul>
                </div>
            </div>
            <?php


// Close the database connection
mysqli_close($conn);
?>



            <?php
include 'connection.php';

// Fetch client appointments data from the database
$client_appointments_query = "SELECT * FROM appointments WHERE `status` = 'pending'";
$client_appointments_result = mysqli_query($conn, $client_appointments_query);
?>

            <div class="card-box pb-10">
                <div class="h5 pd-20 mb-0">
                    <h1>Client Appointments</h1>
                </div>
                <table class="data-table table nowrap " style="text-align">
                    <thead>
                        <tr>
                            <th class="table-plus">Name</th>
                            <th>City</th>
                            <th>Contact</th>
                            <th>Case Field</th>
                            <th>Appointment Date</th>
                            <th>Appoint Lawyer</th>
                            <th class="datatable-nosort">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($appointment_row = mysqli_fetch_assoc($client_appointments_result)) : ?>
                        <tr>
                            <td class="table-plus">
                                <div class="name-avatar d-flex align-items-center">
                                    <div class="txt">
                                        <div class="weight-600"><?php echo $appointment_row['name']; ?></div>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $appointment_row['city']; ?></td>
                            <td><?php echo $appointment_row['contact']; ?></td>
                            <td><?php echo $appointment_row['case_field']; ?></td>
                            <td><?php echo $appointment_row['date']; ?></td>
                            <td><?php echo $appointment_row['lawyer']; ?></td>
                            <td>
                                <div class="table-actions">
                                    <a href="appoinment_check.php?id=<?php echo $appointment_row['id']; ?>"
                                        class="edit-btn" data-id="<?php echo $appointment_row['id']; ?>"><i
                                            class="icon-copy dw dw-check"></i></a>

                                    <a href="delet_apoinment.php?id=<?php echo $appointment_row['id']; ?>"
                                        class="delete-btn" data-id="<?php echo $appointment_row['id']; ?>"><i
                                            class="icon-copy dw dw-delete-3"></i></a>
                                </div>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>





            <!-- Modal for Editing -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <!-- Your modal content goes here -->
            </div>

            <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
            <script src="script.js"></script>

            <!-- welcome modal end -->
            <!-- js -->
            <script src="vendors/scripts/core.js"></script>
            <script src="vendors/scripts/script.min.js"></script>
            <script src="vendors/scripts/process.js"></script>
            <script src="vendors/scripts/layout-settings.js"></script>
            <script src="src/plugins/apexcharts/apexcharts.min.js"></script>
            <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <script src="vendors/scripts/dashboard3.js"></script>
            <!-- Google Tag Manager (noscript) -->
            <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0"
                    style="display: none; visibility: hidden"></iframe></noscript>
            <!-- End Google Tag Manager (noscript) -->
</body>

</html>