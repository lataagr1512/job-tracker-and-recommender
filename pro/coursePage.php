<?php
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Special+Elite&family=Merriweather&family=Questrial&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="course-styling.css">
    <title>Document</title>
</head>

<body>
    <nav>
        <div class="twoTogethers">
            <img src="logoImg.png" alt="" class="logoImg">
            <span class="logo">PROJECT.LY</span>
        </div>
        <ul>
            <li><a href="index.html" >HOME</a></li>
            <li><a href="about.html" title="About Us">ABOUT</a></li>
            <li><a href="logout.php" name="logout">LOGOUT</a> </li>
            <li><a href="profile.php" title="Profile"><img src="profile-pic.jpeg" alt="Profile Pic" class="profile-btn-img"></a></li>
        </ul>
    </nav>
    <header>
        <h2 class="course-page-head">Suggestions for you :</h2>
    </header>
    <div class="grey-container">
        <h3 id="inner-box-head" class="one-inner-head">COURSES</h3>
        <a href="suggestCourse.html"><div class="course-box" id="inner-cij-box"></div></a>
        <img src="read.png" alt="" id="icon-img" class="course-icon">
        <h3 id="inner-box-head" class="three-inner-head">JOBS</h3>
        <a href="joblisting.html" target="_blank"><div class="job-box" id="inner-cij-box"></div></a>
        <img src="working-woman.png" alt="" id="icon-img" class="intern-icon">
        
        <!-- <img src="promotion.png" alt="" id="icon-img" class="job-icon"> -->
    </div>
</body>

</html>