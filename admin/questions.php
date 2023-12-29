

<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>LAWYERS</title>

    <!-- Site favicon --><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="title">
                            <h2>QUESTIONS</h2>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.php">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Users Questions
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 card-box mb-30">
                
                <!-- calendar modal -->
                <!-- basic table  Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix mb-20">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Questions</h4>
                    </div>
                    
                </div>





<!-- Display unanswered questions with pending status -->
<div class="unanswered-questions">
    <?php
    include 'connection.php';

    // Modify the query to include only questions with a pending status
    $unanswered_query = "SELECT * FROM `qa` WHERE status = 'pending'";
    $result_unanswered = mysqli_query($conn, $unanswered_query);

    // Check if there are unanswered questions
    if (mysqli_num_rows($result_unanswered) > 0) {
        ?>
        <table class="table" style="border:2px solid black;">
            <thead>
                <tr>
                    <th style="border:2px solid black; font-size:20px; font-weight: 900;">Question</th>
                    <th style="border:2px solid black; font-size:20px; font-weight: 900;">Action</th>
                </tr>
            </thead>
            <tbody style="border:2px solid black;">
                <?php
                while ($row_unanswered = mysqli_fetch_assoc($result_unanswered)) {
                    ?>
                    <tr>
                        <td style="border:2px solid black;"><?php echo $row_unanswered['question']; ?></td>
                        <td style="border:2px solid black;">
                            <button class="btn btn-primary answer-btn" data-qid="<?php echo $row_unanswered['id']; ?>">Answer</button>
                        </td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <?php
    } else {
        // No unanswered questions
        echo "No  questions available.";
    }
    ?>
</div>


<script>

$(document).ready(function () {
    $('.answer-btn').click(function () {
        // Get the question ID from the button's data attribute
        var questionId = $(this).data('qid');

        // Assuming you want to prompt for an answer
        var userAnswer = prompt('Provide an answer:');

        // Check if the user provided an answer
        if (userAnswer !== null) {
            // Send the answer to the server (you need to implement this)
            $.ajax({
                type: 'POST',
                url: 'process_answer.php',
                data: {
                    qid: questionId,
                    answer: userAnswer
                },
                success: function (response) {
                    // Handle the server response
                    if (response === 'success') {
                        alert('Answer submitted successfully.');
                     
                        // Remove the answered question from the display
                        $('[data-qid="' + questionId + '"]').closest('.card').remove();
                    } else {
                        alert('Failed to submit answer. Please try again.');
                    }
                }
            });
        }  header('location:questions.php');
    });
});


</script>







































    
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