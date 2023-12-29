<?php
    session_start();

    include 'connection.php';

    if (isset($_POST['submit'])) {
        $username = mysqli_real_escape_string($conn, $_POST['name']);
        $useremail = mysqli_real_escape_string($conn, $_POST['email']);
        $phone = mysqli_real_escape_string($conn, $_POST['phone']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        $query = "INSERT INTO `user` (`name`, `phone`, `email`, `password`) VALUES ('$username', '$phone', '$useremail', '$password')";

        if ($password === $cpassword) {
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['user'] = $username;
                header('location: Home.php');
                exit();
            } else {
                echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
            }
        } else {
            echo "<script>alert('Password and Confirm Password do not match.');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>

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
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin: 10px 0;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="phone"],
        input[type="password"],
        input[type="cpassword"]
         {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            border: 2px solid #333;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        input[type="submit"]:hover {
            background-color: #fff;
            color: #333;
            border: 2px solid #333;
            transition: 0.5s ease ;
        }

        a {
            display: block;
            text-align: center;
            margin: 10px 0;
            color: black;
            font-weight: bold;
            text-decoration: none;
        }

        a:hover {
            color: blue;
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

<form method="POST" enctype="multipart/form-data">
    <h1>Sign Up Form</h1>

    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

    <label for="phone">Phone:</label>
    <input type="text" id="phone" name="phone" required>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>

    <label for="cpassword">Confirm Password:</label>
    <input type="password" id="cpassword" name="cpassword" required>

    <div class="foot">
        <a href="login.php">Already have an account? Log in here.</a>
        <input type="submit" name="submit" value="Sign Up" class="submit">
    </div>
</form>

</body>
</html>