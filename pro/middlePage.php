<?php
include('config.php');

if (!empty($_GET)) {
    $userDetails = $_SESSION['user_details'];
    $formDetails = $_GET;
    $username = $userDetails['name'];
    $email = $userDetails['email'];
    $jobTitle = $formDetails['job_title'];
    $orgName = $formDetails['org_name'];
    $job_link = $formDetails['joblink'];
  
        //    print_r($username);
        //    print_r($jobTitle);
        //    print_r($orgName);
        //    print_r($job_link);
        //    print_r("qwydgfhbfhsdbfb");

    $_SESSION["flash_message"] = "Filled successfully";
    $query = "INSERT INTO `trackTable`( `name`, `email`, `jobTitle`, `organ_name`, `date`)
     VALUES ('" . $username . "','" . $email . "','" . $jobTitle . "','" . $orgName . "','" . Date('Y-m-d', time()) . "')";
    mysqli_query($conn, $query);
    header("Location: $job_link");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="middlePageStyle.css">
    <title>Application page</title>
</head>

<body>
    Hello
</body>

</html>