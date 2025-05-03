<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback | Los Pollos Hermanos</title>
    <link rel="icon" href="./images/logo/title-logo.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat:wght@400;800;900&family=Bubblegum+Sans&family=Mali&family=Flamenco&family=Aclonica&family=Carter+One&family=Luckiest+Guy&family=Lato&family=Montserrat+Subrayada&family=Sarabun&family=Viga&family=Wellfleet&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./references/feedback.css">
    <link rel="stylesheet" href="./references/footer.css">
    <link rel="stylesheet" href="./references/navigationBar.css">
    <link rel="stylesheet" href="./references/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <nav class="bg-gray" style="border-bottom: none;">
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
                    <a href="./traning.php">EMPLOYEE & TRAINING</a>
                </li>
            </ul>
        </div>
    </nav><br><br>
    <div class="main-heading">
        <h1>FEED US BACK</h1>
    </div>
    <div class="sub-part">
        <p>Help us know you better, so that we can serve you better. Information provided herein will be used solely for
            research purposes and will not be sold to any third parties.</p>
    </div>
    <section class="main-form">
        <form id="feedback-form">
            <div class="flex-container">
                <h5>Let us know you better*</h5><br>
                <input class="text-field" type="text" name="name" placeholder="Customer Name*" required /><br>
                <label for="dob">Date of Birth</label>
                <input class="date-time" type="date" name="dob" /><br>
                <select name="gender" id="select-list" required>
                    <option value="-">-- Select Gender</option>
                    <option value="m">Male</option>
                    <option value="f">Female</option>
                    <option value="o">Other</option>
                </select><br>
                <input class="text-field" type="email" name="email" placeholder="E-mail*" required /><br><br>
                <h5>Contact Details*</h5><br>
                <input class="text-field" type="text" name="ph-no" placeholder="Mobile No.*" required /><br>
                <select name="contact-time" id="select-list" required>
                    <option value="-">-- Preferred Time for Contact</option>
                    <option value="mor">09am - 12pm</option>
                    <option value="noon">12pm - 4pm</option>
                    <option value="aft">4pm - 7pm</option>
                    <option value="eve">7pm - 9pm</option>
                </select><br>
                <textarea name="address-area" id="address-area" cols="78" rows="5" placeholder="Address*"
                    required></textarea><br><br>
                <h5>Type of Order*</h5>
                <div class="radio-grid">
                    <div>
                        <input type="radio" id="dine-in" name="order-type" value="dine-in">
                        <label for="dine-in">Dine In</label><br>
                    </div>
                    <div>
                        <input type="radio" id="take-away" name="order-type" value="take-away">
                        <label for="take-away">Take Away</label><br>
                    </div>
                    <div>
                        <input type="radio" id="delivery" name="order-type" value="delivery">
                        <label for="delivery">Delivery</label>
                    </div>
                    <div>
                        <input type="radio" id="drive-thru" name="order-type" value="drive-thru">
                        <label for="drive-thru">Drive Thru</label><br>
                    </div>
                    <div>
                        <input type="radio" id="online" name="order-type" value="online">
                        <label for="online">Online Ordering</label><br>
                    </div>
                    <div>
                        <input type="radio" id="cater" name="order-type" value="cater">
                        <label for="cater">Outdoor Catering</label>
                    </div>
                </div><br>
                <select name="visit-count" id="visit-count" required>
                    <option value="-">-- How often do you visit LPH?</option>
                    <option value="daily">Daily</option>
                    <option value="week">Weekly</option>
                    <option value="month">Monthly</option>
                    <option value="quart">Quarterly</option>
                </select><br>
                <label for="dov">Date of Visit</label>
                <input class="date-time" name="dov" type="date"><br><br>
                <button id="submit">Submit</button>
                <div id="feedback-message"></div>
            </div>
        </form>
        <div class="right-panel">
            <img src="./images/history-culture/promote.png" />
            <img src="./images/history-culture/give-back.png" />
            <img src="./images/history-culture/team.png" />
        </div>
    </section>

    <?php include("./footer.php"); ?>
    <script>
        document.getElementById('feedback-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch('feedback_process.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    const messageDiv = document.getElementById('feedback-message');
                    if (data.success) {
                        messageDiv.innerHTML = '<p style="color: green;">' + data.message + '</p>';
                        this.reset();
                    } else {
                        messageDiv.innerHTML = '<p style="color: red;">' + data.message + '</p>';
                    }
                })
                .catch(error => {
                    document.getElementById('feedback-message').innerHTML = '<p style="color: red;">An error occurred.</p>';
                });
        });
    </script>
</body>

</html>