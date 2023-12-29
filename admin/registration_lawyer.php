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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
                                        Lawyer Form
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
                            <h4 class="text-blue h4">Lawyer Registration Form</h4>

                        </div>
                        <?php
    include 'connection.php';

    if (isset($_POST['submit'])) {
        $L_name = mysqli_real_escape_string($conn, $_POST['name']);
        $L_email = mysqli_real_escape_string($conn, $_POST['email']);
        $L_phone = $_POST['phone'];
        $L_address = $_POST['address'];
        $L_bar_council_id = $_POST['bar_council_id'];
        $L_practice_areas = $_POST['practice_areas'];
        $L_education = $_POST['education'];
        $L_experience = $_POST['experience'];
        $L_charges = $_POST['charges'];
        $L_license_number = $_POST['license_number'];
        $L_admission_year = $_POST['admission_year'];

        if (isset($_FILES['img'])) {
            $imgname = $_FILES['img']['name'];
            $imgtmpname = $_FILES['img']['tmp_name'];
            move_uploaded_file($imgtmpname, "../image/" . $imgname);
        }

        $query = "INSERT INTO `lawyer`(`name`, `email`, `image`, `phone`, `address`, `bar_council_id`, `practice_field`, `education`, `licenseNumber`, `yearOfAdmission`, `experience`,`lawyer_fee`) VALUES ('$L_name','$L_email','$imgname','$L_phone','$L_address','$L_bar_council_id','$L_practice_areas','$L_education','$L_license_number','$L_admission_year','$L_experience','$L_charges')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '<script>alert("Your registration request has been sent.");</script>';
        } else {
            echo "Error: " . mysqli_error($conn);
        }

    }

    $category_query = "SELECT * FROM `laywer_category`";
    $category_result = mysqli_query($conn, $category_query);
    ?>

                    </div>
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Name</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="name" class="form-control" type="text" placeholder="Name Here" required />
                            </div>
                        </div>
                        <div class=" mb-3 form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Image</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="img" class="form-control" placeholder="City Here" type="file" id="formFile"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Email</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="email" class="form-control" placeholder="xyz@example.com" type="email"
                                    required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Contact</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="phone" class="form-control" placeholder="(111)-111-1111" type="tel"
                                    required />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label"> Address </label>
                            <div class="col-sm-12 col-md-10">
                                <input name="address" class="form-control" placeholder="(111)-111-1111" type="tel"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label"> Bar Council ID</label>
                            <div class="col-sm-12 col-md-10">
                                <input name="bar_council_id" class="form-control" placeholder="(111)-111-1111"
                                    type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Case field</label>
                            <div class="col-sm-12 col-md-10">
                                <select id="case_field" name="practice_areas" class="form-control" required>
                                    <?php
                    while ($category_row = mysqli_fetch_assoc($category_result)) {
                        echo "<option value='{$category_row['Name']}'>{$category_row['Name']}</option>";
                    }
                    ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Education</label>
                            <div class="col-sm-12 col-md-10">
                                <select id="case_field" name="education" class="form-control" required>
                                    <?php
            $education_query = "SELECT * FROM `laywer_education`";
            $education_result = mysqli_query($conn, $education_query);

            while ($education_row = mysqli_fetch_assoc($education_result)) {
                echo "<option value='{$education_row['Name']}'>{$education_row['Name']}</option>";
            }
            ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Experience (in years)</label>
                            <div class="col-sm-12 col-md-10">
                                <input experience class="form-control " name="experience"
                                    placeholder="insert Experience" type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Lawyer Fee</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control " name="charges" type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">License Number</label>
                            <div class="col-sm-12 col-md-10">
                                <input experience class="form-control " name="license_number" placeholder="insert number"
                                    type="text" required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-12 col-md-2 col-form-label">Year of Admission</label>
                            <div class="col-sm-12 col-md-10">
                                <input class="form-control " name="admission_year" placeholder="Select Month"
                                    type="date" required />
                            </div>
                        </div>


                        <input name="submit" id="" class="btn btn-primary" type="submit" value="submit">
                    </form>


                    <!-- welcome modal end -->
                    <!-- js -->
                    <script src="vendors/scripts/core.js"></script>
                    <script src="vendors/scripts/script.min.js"></script>
                    <script src="vendors/scripts/process.js"></script>
                    <script src="vendors/scripts/layout-settings.js"></script>
                    <!-- Google Tag Manager (noscript) -->
                    <noscript><iframe src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS" height="0" width="0"
                            style="display: none; visibility: hidden"></iframe></noscript>
                    <!-- End Google Tag Manager (noscript) -->
</body>

</html>