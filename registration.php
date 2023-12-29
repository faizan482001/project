<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        // Redirect to the login page or display a message
        header('location:login.php'); // Adjust 'login.php' to your actual login page
        exit();
    }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lawyer Registration Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background-color: #9bc5c3;
            color: #333;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden; /* Prevents background overflow */
            position: relative;
        }

        body::before {
            content: '';
            background: url('img/3.jpeg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(2px);
            opacity: 0.8; /* Adjust the opacity to control the blur intensity */
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1; /* Places the pseudo-element behind other elements */
        }

        form {
            background-color: rgba(255, 255, 255, 0.8); /* Light background with some transparency */
            color: #333;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            position: relative; /* Necessary for stacking order */
            z-index: 1; /* Places the form above the pseudo-element */
            overflow-y: auto; /* Add a vertical scrollbar */
            max-height: 90vh; /* Set a maximum height for the form container */
            box-sizing: border-box;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 5px 0;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="date"],
        input[type="file"],
        input[type="tel"],
        input[type="number"],
        Select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"],
        a {
            
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            cursor: pointer;
            
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        input[type="submit"]:hover,
        a:hover {
            background-color: #fff;
            color: #333;
            border: 2px solid #333;
            transition: 0.5s ease;
        }

        .foot {
            text-align: center;
        }

        @media screen and (max-width: 600px) {
            form {
                width: 100%;
                max-width: none;
            }
        }
    </style>
</head>

<body>
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
        $L_license_number = $_POST['license_number'];
        $L_admission_year = $_POST['admission_year'];
        $L_charges = $_POST['Fees'];

        if (isset($_FILES['img'])) {
            $imgname = $_FILES['img']['name'];
            $imgtmpname = $_FILES['img']['tmp_name'];
            move_uploaded_file($imgtmpname, "image/" . $imgname);
        }

        $query = "INSERT INTO `lawyer`(`name`, `email`, `image`, `phone`, `address`, `bar_council_id`, `practice_field`, `education`, `licenseNumber`, `yearOfAdmission`, `experience`, `lawyer_fee`) VALUES ('$L_name','$L_email','$imgname','$L_phone','$L_address','$L_bar_council_id','$L_practice_areas','$L_education','$L_license_number','$L_admission_year','$L_experience','$L_charges')";
        $result = mysqli_query($conn, $query);

        if ($result) {
            echo '<script>alert("Your registration request has been sent.");</script>';
            header('location:home.php');
            
        } else {
            echo "Error: " . mysqli_error($conn);
        }
        
    }

    $category_query = "SELECT * FROM `laywer_category`";
    $category_result = mysqli_query($conn, $category_query);
    ?>

    <form method="POST" enctype="multipart/form-data">
        <h1>Lawyer Registration Form</h1>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="image">Image:</label>
        <input type="file" class="form-control form-control-sm" id="formFileSm image" name="img" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="bar_council_id">Bar Council ID:</label>
        <input type="text" id="bar_council_id" name="bar_council_id" required>

        <label for="practice_areas">Practice Areas:</label>
        <select id="practice_areas" name="practice_areas" required>
            <?php
            while ($category_row = mysqli_fetch_assoc($category_result)) {
                echo "<option value='{$category_row['Name']}'>{$category_row['Name']}</option>";
            }
            ?>
        </select>

        <label for="education">Education:</label>
        <select id="education" name="education" required>
            <?php
            $education_query = "SELECT * FROM `laywer_education`";
            $education_result = mysqli_query($conn, $education_query);

            while ($education_row = mysqli_fetch_assoc($education_result)) {
                echo "<option value='{$education_row['Name']}'>{$education_row['Name']}</option>";
            }
            ?>
        </select>

        <label for="experience">Experience (in years):</label>
        <input type="text" id="experience" name="experience" required>

        <label for="fees">Lawyer Fee</label>
        <input type="text" id="Fees" name="Fees" placeholder="Default Fee 100$" required>

        <label for="license_number">License Number:</label>
        <input type="text" id="license_number" name="license_number" required>

        <label for="admission_year">Year of Admission:</label>
        <input type="date" id="admission_year" name="admission_year" required>
        <br>

        <input type="submit" name="submit">
        <a href="home.php">back</a>
    </form>
</body>

</html>
