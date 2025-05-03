<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee & Training | Los Pollos Hermanos</title>
    <link rel="icon" href="./images/logo/title-logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat:wght@400;800;900&family=Bubblegum+Sans&family=Mali&family=Flamenco&family=Aclonica&family=Carter+One&family=Luckiest+Guy&family=Lato&family=Montserrat+Subrayada&family=Sarabun&family=Viga&family=Wellfleet&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./references/training.css">
    <link rel="stylesheet" href="./references/footer.css">
    <link rel="stylesheet" href="./references/navigationBar.css">
    <link rel="stylesheet" href="./references/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>



    <!--NavigationBar-->
    <nav class="bg-gray" style="padding-bottom: 17px;">
        <div class="navitems">
            <input class="nav-checkbox" type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <a href="./menu.php">VIEW OUR MENU</a>
                </li>
                <li>
                    <a href="./values.php">WHAT WE VALUE</a>
                </li>
                <li>
                    <a href="./history.php">WHO WE ARE</a>
                </li>
                <li>
                    <a href="#" class="active">EMPLOYEE & TRAINING</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
    <!--EndofNavigationBar-->

    <!--Intro-->
    <section class="intro-section">
        <div class="intro-content">
            <h1>One Big Family</h1><br><br>
            <p>What’s it REALLY like to work at Los Pollos Hermanos? We’re a pretty tight bunch. And we have a ton of
                fun. Get a peek into the action here and see the possibilities that a job at Los Pollos Hermanos can
                lead to.</p>
        </div>
    </section>
    <!--EndofIntro-->

    <!--Culture-->
    <section class="main-culture">
        <div class="culture-grid-container culture-1">
            <div>
                <img src="./images/history-culture/culture-1.jpg" />
            </div>
            <div class="culture-grid-item">
                <p>Los Pollos Hermanos knows what family tastes like and we bring that warmth and goodness into our food
                    every single day. We always have something delicious cooking, be it our crispy fried chicken, new
                    spicy curly fries, or delicious dipping
                    sauces.
                </p>
            </div>
        </div>
        <div class="culture-grid-container culture-2">
            <div class="culture-grid-item ">
                <p>We know how important it is to feed your family right, and we hold those values near and dear to our
                    heart. Every meal we feed you will be FLAVORFUL, WARM, FRESH, and filled with LOVE and CARE. That is
                    our promise to you.
                </p>
                <p>
                    Our motto: "Los Pollos Hermanos! Taste the Family!"
                </p>
            </div>
            <div>
                <img src="./images/history-culture/culture-2.jpg" />
            </div>
        </div>
    </section>
    <!--EndOfCulture-->
    <div style="clear: both;">
    </div>
    <!--Training-->
    <section class="main-people">
        <div class="grid-people-container">
            <div>
                <img src="./images/people/people-1.jpg" />
            </div>
            <div>
                <img src="./images/people/people-4.jpg" />
            </div>
            <div>
                <img src="./images/people/people-3.jpg" />
            </div>
            <div>
                <img src="./images/people/people-2.jpg" />
            </div>
        </div>
        <h1>All applicants who are chosen to join the Los Pollos Hermanos family will be required to complete a 10-week
            video training course hosted by our owner and proprietor, Gus Fring.
        </h1><br><br>
    </section>


    <section class="video-section">
        <div class="grid-video-container" style="border-radius: 10px;">
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/B9RgougnhiE" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h1>Communication</h1><br><br>
            </div>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OTDlbmBoFIs" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h1>Code of Conduct</h1><br><br>
            </div>
        </div>
        <div class="grid-video-container" style="border-radius: 10px;">
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/OJ10cVu2R5I" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h1>Cleanliness</h1><br><br>
            </div>
            <div>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/547FLQEjdF8" frameborder="0"
                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
                <h1>Customer Service</h1><br><br>
            </div>

        </div>

        <div class="button">
            <a href="http://www.amc.com/shows/better-call-saul/exclusives/los-pollos-hermanos-employee-training"
                target="_blank">Continue to Full Traning Cource</a>
        </div><br><br><br>
    </section>
    
    <!-- fopter -->
    <?php include("./footer.php"); ?>
    
    <!--EndofTraining-->
</body>

</html>