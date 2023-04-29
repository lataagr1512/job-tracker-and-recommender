<?php
include ('config.php');
// if (!empty($_SESSION["is_submit"])) { 
//     header("Location: login.php");
// }
if (isset($_POST["submit"])) {  
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $age = $_POST["age"];
    $confirmpassword = $_POST["confirmpassword"];
    // $duplicate = mysqli_query($conn, "SELECT * FROM `register` WHERE `name` = '$name' OR `id`='$email'");
    // if (mysqli_num_rows($duplicate) > 0) {
    //     echo
    //         "<script> alert('Username or Email Has Already Taken'); </script>";
    // } else {
        if ($password == $confirmpassword) {
            $_SESSION["flash_message"] = "Registration successfully";
            $query = "INSERT INTO `register`(`name`, `age`, `id`, `password`)
             VALUES ('$name','$age','$email','$password') ";
            mysqli_query($conn, $query);
             header("Location: login.php");

        } else {
            echo
                "Password Does Not Match";
        }
    //}
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formStyle.css">
    <title>Registration Form</title>
</head>

<body>
    <h1>Registration Form</h1>

    <!-- Create Form -->
    <form id="form" method="POST">

        <!-- Details -->
        <div class="form-control">
            <label for="name" id="label-name">
                Name
            </label>

            <!-- Input Type Text -->
            <input type="text" id="nam" name="name" placeholder="Enter your name" />
        </div>

        <div class="form-control">
            <label for="email" id="label-email">
                Email
            </label>

            <!-- Input Type Email-->
            <input type="email" id="emai" name="email" placeholder="Enter your email" />
        </div>

        <div class="form-control">
            <label for="age" id="label-age">
                Age
            </label>

            <!-- Input Type Text -->
            <input type="text" id="ag" name="age" placeholder="Enter your age" />
        </div>

        <div class="form-control">
            <label for="password" id="label-password">
                Password
            </label>

            <!-- Input Type Text -->
            <input type="password" id="passw" name="password" placeholder="Enter your password" />
        </div>

        <div class="form-control">
            <label for="confirmpassword" id="label-password">
                Confirm Password
            </label>

            <!-- Input Type Text -->
            <input type="password" id="confirmpass" name="confirmpassword" placeholder="Enter your password" />
        </div>


        <!-- Multi-line Text Input Control -->
        <button type="submit" name="submit" value="submit">
            Submit
        </button>
        <!-- <a href="#" class="submit">Submit</a> -->
    </form>
</body>

</html>



<!-- SELECT * FROM `registration` WHERE 1 -->