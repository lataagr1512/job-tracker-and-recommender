<?php
include('config.php');


if (isset($_POST['login'])) {
  $email = $_POST["email"];
  $password = $_POST["password"];
  $result = mysqli_query($conn, "SELECT * FROM `register` WHERE `password` = '$password' AND `id`='$email'");
  // $row = mysqli_fetch_assoc($result);
  $rows = mysqli_num_rows($result);
  if ($rows==1) {
    // if ($password == $row['password']) {
      // $_SESSION["email"] = $row["id"];
      // $_SESSION["password"] = $row["password"];
    //   $_SESSION["logged_in"] = true;
      header("Location: coursePage.php");
    //  } //else {
    //   echo 'Wrong Password';
    // }
  } else {
    echo "User Not Registered";
  }
}
?>