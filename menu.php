<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu | Los Pollos Hermanos</title>
    <link rel="icon" href="./images/logo/title-logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat:wght@400;800;900&family=Bubblegum+Sans&family=Mali&family=Flamenco&family=Aclonica&family=Carter+One&family=Luckiest+Guy&family=Lato&family=Montserrat+Subrayada&family=Sarabun&family=Viga&family=Wellfleet&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./references/menu.css">
    <link rel="stylesheet" href="./references/footer.css">
    <link rel="stylesheet" href="./references/navigationBar.css">
    <link rel="stylesheet" href="./references/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>

    <!--NavigationBar-->
    <nav class="bg-blue">
        <div class="navitems">
            <input class="nav-checkbox" type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <ul>
                <li>
                    <a href="#" class="active">VIEW OUR MENU</a>
                </li>
                <li>
                    <a href="./values.php">WHAT WE VALUE</a>
                </li>
                <li>
                    <a href="./history.php">WHO WE ARE</a>
                </li>
                <li>
                    <a href="./traning.php">EMPLOYEE & TRAINING</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
    <!--EndofNavigationBar-->

    <!--MENU SECTION-->
    <section class="menu-section">
        <br><br>
        <h1>Menu</h1>
        <hr><br><br>
        <div>
            <div class="first-grid">
                <div class="grid-item">
                    <a href="#"> <img id="breakfast-ad" src="./images/menu/breakfast.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Combos</p>
                    <a href="#"> <img src="./images/menu/combos.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Feed the Fam Deals</p>
                    <a href="#"> <img src="./images/menu/feed-fam-deals.jpg" /></a>
                </div>
            </div>
            <div class="first-grid">
                <div class="grid-item" style="margin-left: 0;">
                    <p>Hamburgers</p>
                    <a href="#"> <img src="./images/menu/hamburgers.jpg" /></a>
                </div>
                <div class="grid-item chick-sand" style="margin-left: 0; margin-top: -10px;">
                    <p>Chicken Sandwiches & Nuggets</p>
                    <a href="#"> <img src="./images/menu/chicken-sandwich-nuggets.jpg" /></a>
                </div>
                <div class="grid-item" style="margin-left: -7%;">
                    <p>Fresh-Made Salads</p>
                    <a href="#"> <img src="./images/menu/salads.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Fries & Sides</p>
                    <a href="#"> <img src="./images/menu/siders.jpg" /></a>
                </div>
            </div>
            <div class="first-grid">
                <div class="grid-item">
                    <p>Breakfast Combos</p>
                    <a href="#"> <img src="./images/menu/breakfast-combos.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Croissants</p>
                    <a href="#"> <img src="./images/menu/croissants.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Biscuits</p>
                    <a href="#"> <img src="./images/menu/biscuits.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Classics</p>
                    <a href="#"> <img src="./images/menu/classics.jpg" /></a>
                </div>
            </div>
            <div class="first-grid">
                <div class="grid-item">
                    <p>Coffee</p>
                    <a href="#"> <img src="./images/menu/coffee.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Sides & more</p>
                    <a href="#"> <img src="./images/menu/sides-more.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Beverages</p>
                    <a href="#"> <img src="./images/menu/beverages.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Frosty</p>
                    <a href="#"> <img src="./images/menu/frosty.jpg" /></a>
                </div>
            </div>
            <div class="first-grid">
                <div class="grid-item">
                    <p>Bakery</p>
                    <a href="#"> <img src="./images/menu/bakery.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>LPH's kids meal</p>
                    <a href="#"> <img src="./images/menu/kids-meal.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Value Menu</p>
                    <a href="#"> <img src="./images/menu/value-menu.jpg" /></a>
                </div>
                <div class="grid-item">
                    <p>Meal Deals</p>
                    <a href="#"> <img src="./images/menu/meal-deals.jpg" /></a>
                </div>
            </div>
        </div>
        <div class="nutrition-info">
            <p>2,000 calories a day is used for general nutrition advice, but calorie needs vary. <br>Additional
                Nutrition information available upon request.</p>
        </div><br>
    </section>
    <!--END OF MENU SECTION-->
    
    <!-- fopter -->
    <?php include("./footer.php"); ?>
</body>

</html>