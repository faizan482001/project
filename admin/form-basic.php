<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>LAWYERS</title>

    <!-- Site favicon -->
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
    </style>
</head>

<body>
    <?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the keys are set in the $_POST array
    if (isset($_POST['name'], $_POST['city'], $_POST['email'], $_POST['contact'], $_POST['case_field'], $_POST['date'], $_POST['time'], $_POST['lawyer'])) {
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $city = mysqli_real_escape_string($conn, $_POST['city']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $contact = mysqli_real_escape_string($conn, $_POST['contact']);
        $case_field = mysqli_real_escape_string($conn, $_POST['case_field']);
        $date = mysqli_real_escape_string($conn, $_POST['date']);
        $time = mysqli_real_escape_string($conn, $_POST['time']);
        $lawyer = mysqli_real_escape_string($conn, $_POST['lawyer']);
        $charges = mysqli_real_escape_string($conn, $_POST['charges']);

        $insert_query = "INSERT INTO appointments (name, city, email, contact, case_field, date, time, lawyer,lawyer_fee) 
        VALUES ('$name', '$city', '$email', '$contact', '$case_field', '$date', '$time', '$lawyer','$charges')";

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
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <div class="title">
                                <h4>Form</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Client Form
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">

                        </div>
                    </div>
                </div>
                <!-- Default Basic Forms Start -->
                <div class="pd-20 card-box mb-30">
                    <div class="clearfix">
                        <div class="pull-left">
                            <h4 class="text-blue h4">Client Appoinment</h4>

                        </div>





                        <?php	
    // include 'connection.php'; // You already included it at the beginning
    $category_query = "SELECT * FROM `laywer_category`";
    $category_result = mysqli_query($conn, $category_query);

	$lawyer_query = "SELECT * FROM `lawyer`";
    $lawyer_result = mysqli_query($conn, $lawyer_query);
    ?>
                    </div>



                    <form method="POST">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" type="text" name="name" placeholder="Name Here" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">City</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" placeholder="City Here" name="city" type="City" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="email" placeholder="xyz@example.com" type="email"
                                    required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Contact</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control" name="contact" placeholder="(111)-111-1111" type="tel"
                                    required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Case field</label>
                            <div class="col-sm-12 col-md-10">
                                <select id="case_field" name="case_field" class="form-control" required>
                                    <?php
                    while ($category_row = mysqli_fetch_assoc($category_result)) {
                        echo "<option value='{$category_row['Name']}'>{$category_row['Name']}</option>";
                    }
                    ?>
                                </select>
                            </div>
                        </div>



                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Date</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control date-picker" name="date" placeholder="Select Date"
                                    type="text" required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Time</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="time" class="form-control time-picker" placeholder="Select time"
                                    type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Lawyer</label>
                            <div class="col-sm-12 col-md-10">
                                <select id="lawyer" name="lawyer" class="form-control" required>
                                    <?php
            $lawyer_query = "SELECT * FROM `lawyer`";
            $lawyer_result = mysqli_query($conn, $lawyer_query);

            while ($lawyer_row = mysqli_fetch_assoc($lawyer_result)) {
                echo "<option value='{$lawyer_row['name']}'>{$lawyer_row['name']}</option>";
            }
            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Lawyer fee</label>
                            <div class="col-sm-12 col-md-10">
                                <input type="text" name="charges" class="form-control time-picker" value="100$"
                                    readonly>
                            </div>
                        </div>

                        <input class="btn btn-primary" type="submit" name="submit" value="Get Appointment">
                    </form>


                    <!-- welcome modal end -->
                    <!-- js -->
                    <script src="vendors/scripts/core.js"></script>
                    <script src="vendors/scripts/script.min.js"></script>
                    <script src="vendors/scripts/process.js"></script>
                    <script src="vendors/scripts/layout-settings.js"></script>
                    <script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
                    <script src="vendors/scripts/calendar-setting.js"></script>
                    <!-- Google Tag Manager (noscript) -->
                    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0"
                            style="display: none; visibility: hidden"></iframe></noscript>
                    <!-- End Google Tag Manager (noscript) -->
</body>

</html>