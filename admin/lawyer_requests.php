
<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>LAWYERS</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="vendors/images/apple-touch-icon.png"
			
		/><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="vendors/images/favicon-32x32.png"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="vendors/images/favicon-16x16.png"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="vendors/styles/icon-font.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="src/plugins/fullcalendar/fullcalendar.css"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
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
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
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
			.logos{

				margin-right:10px;
				font-size:20px;
				
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
							<input
								type="text"
								class="form-control search-input"
								placeholder="Search Here"
							/>
							<div class="dropdown">
								<a
									class="dropdown-toggle no-arrow"
									href="#"
									role="button"
									data-toggle="dropdown"
								>
									<i class="ion-arrow-down-c"></i>
								</a>
								<div class="dropdown-menu dropdown-menu-right">
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>From</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label">To</label>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-sm-12 col-md-2 col-form-label"
											>Subject</label
										>
										<div class="col-sm-12 col-md-10">
											<input
												class="form-control form-control-sm form-control-line"
												type="text"
											/>
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
						<a
							class="dropdown-toggle"
							href="#"
							role="button"
							data-toggle="dropdown"
						>
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
								<span  class="logos"><i class="fa-brands fa-wpforms"></i></span
								><span class="mtext">Forms</span>
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
								<span class="logos"><i class="fa-solid fa-users"></i></span
								><span class="mtext">Layers Request</span>
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
									<h2>REGISTER</h2>
								</div>
								<nav aria-label="breadcrumb" role="navigation">
									<ol class="breadcrumb">
										<li class="breadcrumb-item">
											<a href="index.php">Home</a>
										</li>
										<li class="breadcrumb-item active" aria-current="page">
											Lawyer's Register
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
								<h4 class="text-blue h4">LAWYERS REQUESTS</h4>
							</div>
							
						</div>
						<?php 
$con = mysqli_connect("localhost", "root", "", "lawyer_form");
?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Law-field</th>
            <th scope="col">Education</th>
            <th scope="col">Experience</th>
            <th scope="col">Year of Admission</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $lawyer_data1 = "SELECT * FROM `lawyer` WHERE `status` = 'pending'";
        $result_query1 = mysqli_query($con, $lawyer_data1);
        while ($row = mysqli_fetch_array($result_query1)) {
        ?>
        <tr>
            <td class="table-plus">
                <div class="name-avatar d-flex align-items-center">
                    <div class="avatar mr-2 flex-shrink-0">
                        <img src="../image/<?php echo $row[3]; ?>"
                            class="border-radius-100 shadow"
                            width="40"
                            height="40"
                            alt=""
                        >
                    </div>
                    <div class="txt">
                        <div class="weight-600"><?php echo $row[1]; ?></div>
                    </div>
                </div>
            </td>
            <td><?php echo $row[7]; ?></td>
            <td><?php echo $row[8]; ?></td>
            <td><?php echo $row[11]; ?></td>
            <td><?php echo $row[10]; ?></td>
            <td>
                <div class="table-actions">
			<!-- Approve button -->
<a href="../home.php?id=<?php echo $row[0]; ?>&approve=true" data-color="#265ed7"><i class="icon-copy dw dw-check"></i></a>


<a href="delete.php?id=<?php echo $row[0] ?>" data-color="#e95959"><i class="delete-link icon-copy dw dw-delete-3"></i></a>
                </div>
            </td>
        </tr>
        <?php
        } // Close the while loop
        ?>
    </tbody>
</table>

		<!-- welcome modal end -->
		<!-- js -->
		<script src="vendors/scripts/core.js"></script>
		<script src="vendors/scripts/script.min.js"></script>
		<script src="vendors/scripts/process.js"></script>
		<script src="vendors/scripts/layout-settings.js"></script>
		<script src="src/plugins/fullcalendar/fullcalendar.min.js"></script>
		<script src="vendors/scripts/calendar-setting.js"></script>
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.php?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
