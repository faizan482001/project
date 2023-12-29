<?php
session_start();

include 'connection.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $useremail = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "SELECT * FROM `user` WHERE `email`='$useremail' AND `password`='$password'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $row['name'];
        header('location:home.php');
       
    }else {
       
        echo "<script>alert('Invalid account. Please try again.');</script>";
           
        }
        
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
   
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
            overflow: hidden; 
            position: relative;
        }

        body::before {
            content: '';
            background: url('img/3.jpeg') no-repeat center center fixed;
            background-size: cover;
            filter: blur(2px);
            opacity: 0.8;
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            z-index: -1; 
        }

        form {
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
            width: 90%;
            max-width: 400px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.8);
            position: relative; 
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

        input[type="email"],
        input[type="password"] {
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
            transition: 0.5s ease;
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
        <h1> User Login Form</h1>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <div class="foot">
            <a href="index.php">Don't have an account? Sign up here.</a>
            <input type="submit" name="submit" value="Log In" class="submit">
            <a href="admin/adminlogin.php">. . . . . . . . . .  For Admin  . . . . . . . . . .</a>

        </div>
    </form>
</body>

</html>
