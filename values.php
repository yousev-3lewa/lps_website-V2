<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Values | Los Pollos Hermanos</title>
    <link rel="icon" href="./images/logo/title-logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat:wght@400;800;900&family=Bubblegum+Sans&family=Mali&family=Flamenco&family=Aclonica&family=Carter+One&family=Luckiest+Guy&family=Lato&family=Montserrat+Subrayada&family=Sarabun&family=Viga&family=Wellfleet&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./references/values.css">
    <link rel="stylesheet" href="./references/footer.css">
    <link rel="stylesheet" href="./references/navigationBar.css">
    <link rel="stylesheet" href="./references/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>

<body>
    <!--NavigationBar-->
    <nav class="bg-red">
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
                    <a href="#" class="active">WHAT WE VALUE</a>
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

    <!--Header-->
    <header class="header">
        <div class="hero">

            <a href="index.php">
                <img id="main-logo" src="images/logo/lph-logos.png" alt="LosPollosHermanos" />
            </a>
            <br><br>
            <h1>WHAT WE VALUE</h1>

        </div>
    </header>
    <!--EndofHeader-->

    <!--MainSection-->
    <!--MainValues-->
    <div class="main-values-container">
        <div class="values-left-panel">
            <h1>Creating Joy & Opportunity Through Food, Family, & Community.</h1><br><br>
        </div>
        <div class="values-right-panel">
            <p>Gustavo Fring opened the first Los Pollos Hermanos’ restaurant with an unwavering commitment to serve
                fresh food, at a fair price, in a comfortable atmosphere. He founded Los Pollos Hermanos’s on the
                premise that Quality Is Our Recipe®, and
                the quality our customers expect from every restaurant visit begins long before products and ingredients
                reach the kitchen.</p>
            <br><br>
            <p>More than 50 years later, we remain committed to the values Gus taught us, and we believe that doing the
                right thing – for our people, our customers and our planet – is the only responsible way to do business.
            </p>
        </div>
    </div>
    <!--EndofMainValues-->

    <!--FoodPeopleFootPrint-->
    <div class="values-grid-container">
        <div class="values-grid-box">
            <div class="grid-head">
                <img src="./images/icons/food-icon-3.png" />
                <br><br>

                <h3>Food</h3>
            </div>
            <br>
            <p>We take pride in the freshly prepared food we serve—and the traceable, responsible practices that make it
                possible.</p>
            <br><a href="#"><span>Quality Food ></span></a>
            <br> <a href="#"><span>Nutrition & Health ></span></a>
            <br><a href="#"><span>Animal Welfare ></span></a>
            <br><a href="#"><span>Supply Chain Practices ></span></a>
        </div>
        <div class="values-grid-box">
            <div class="grid-head">
                <img src="./images/icons/people-icon-2.png" />
                <br><br>
                <h3>People</h3>
            </div>
            <br>
            <p>Respect, equality and fair treatment for our team members, franchisees and partners is a central part of
                our business. And so is giving something back.</p>
            <a href="#"><span>Careers ></span></a>
            <br><a href="#"><span>Tour our Restaurant Support Center ></span></a>
            <br><a href="#"><span>Foster Care Adoption ></span></a>
            <br><a href="#"><span>Give Something Back ></span></a>
        </div>
        <div class="values-grid-box">
            <div class="grid-head">
                <i class="fas fa-globe-americas"></i>
                <br><br>
                <h3>Footprint
                </h3>
            </div>
            <br>
            <p>Squarely Sustainable™, a nod to Los Pollos Hermanos signature curly fries, is our four-pronged approach
                to sustainability and reducing our environmental footprint.</p>
            <a href="#"><span>Environmental Sustainability ></span></a>
            <br><a href="#"><span>Squarely Sustainable ></span></a>
            <br><a href="#"><span>Sustainable Los Pollos Hermanos’ Way ></span></a>
            <br><a href="#"><span>Better Buildings Challange ></span></a>
        </div>
    </div>
    <!--FoodPeopleFootPrint-->

    <!--GoodDoneRIght-->
    <div class="good-done-right">
        <div class="gdr-left">
            <img src="./images/logo/good-done-right.png" /><br><br>
        </div>
        <div class="gdr-right">
            <h1>Good Done Right.</h1><br><br>
            <p>Our corporate social responsibility (CSR) efforts are now under one united banner called Good Done Right.
                These efforts include strengthening existing initiatives and launching new ones to enhance our approach
                to Food, People and our Footprint.</p>
            <p>Read more in our 2019 CSR Report.</p>
        </div>
    </div>
    <!--EndofGoodDoneRight-->

    <!--OurCommitments-->
    <section class="commitment-section">
        <h1>Our Commitments</h1><br>
        <p>You've heard us say we're all about serving up better food. Here's how we actually do it.</p>
        <div class="commitment-grid-container">
            <div>
                <img src="./images/commitments/third-party-human.jpg" /><br><br>
                <p>Third Party Human Rights</p>
            </div>
            <div>
                <img src="./images/commitments/palm-oil.jpg" /><br><br>
                <p>Certified Sustainable Palm Oil</p>
            </div>
            <div>
                <img src="./images/commitments/reduced-antibiotics.jpg" /><br><br>
                <p>Reduce Antibiotics</p>
            </div>
            <div>
                <img src="./images/commitments/beef.jpg" /><br><br>
                <p>Sustainable Beef Production</p>
            </div>
            <div>
                <img src="./images/commitments/pig.jpg" /><br><br>
                <p>Eliminate Gestation Stalls</p>
            </div>
            <div>
                <img src="./images/commitments/adoption-home-2.jpg" /><br><br>
                <p>One Adoption Is All It Takes</p>
            </div>
            <div>
                <img src="./images/commitments/reduced-energy-consumption.jpg" /><br><br>
                <p>Reduce Energy Consumption</p>
            </div>
        </div>
    </section>
    <!--EndOfOurCommitments-->

    <!--Adoption-->
    <div class="adoption-container">
        <div class="adoption-container-content">
            <h1>Helping Kids Find a Home</h1><br><br>
            <p>The Gustavo Fring Foundation for Adoption®, a non-profit public charity, works to dramatically increase
                the adoptions of children from foster care. With more than 110,000 children in the United States waiting
                to be adopted, we believe that
                no child should live without a loving family.</p>
            <br>
            <button>Learn More</button>
        </div>
    </div>
    <!--EndofAdoption-->
    <!-- footer -->
    <?php include("./footer.php"); ?>
    <!--EndofMainSection-->

</body>

</html>