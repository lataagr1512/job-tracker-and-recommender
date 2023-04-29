<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&family=Special+Elite&family=Merriweather&family=Questrial&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Job Tracker and Recommender</title>
</head>

<body>
    <nav>
        <div class="twoTogethers">
            <img src="logoImg.png" alt="" class="logoImg">
            <span class="logo">PROJECT.LY</span>
        </div>
        <!-- <form action="" class="search-form">
            <input type="text" name="search" placeholder="search job with city" class="search-bar">
            <button class="search-btn"><img src="search.png" alt="" class="search-img"></button>
        </form> -->
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="about.html">ABOUT</a></li>
        </ul>
    </nav>

    <!----Search Button----->
    <div class="search_bar_container">
    <input type="text" name="search" placeholder="search job with city" class="search-bar">
    <button class="search-btn" onClick="document.getElementById('middle').scrollIntoView();"><img src="search.png" alt="" class="search-img"></button>
    </div>

    <header class="land-page">
        <!-- <img src="background.gif" alt="" class=""> -->
        <video src="video.mp4" class="background-video" loop muted autoplay></video>

        <div class="content-container">
            <h2 class="land-head">Job Tracker and Recommendor</h2>
            <div class="land-detail">
                <p>Hello !
                    Discover yourself, <br>
                    Register yourself below to find the perfect role for you
                </p>
            </div>
            <div class="button">
                <button class="btn"><a href="form.php" target="_blank">Get Started</a></button>
                <button class="login-btn"><a href="login.php" target="_blank">Log in</a></button>
            </div>
        </div>
    </header>

    <div class="job_card"></div>
    <script src="script.js"></script>
</body>

</html>