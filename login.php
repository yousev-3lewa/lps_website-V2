<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Los Pollos Hermanos</title>
    <link rel="icon" href="./images/logo/title-logo.png">
    <link href="https://fonts.googleapis.com/css2?family=Chelsea+Market&family=Montserrat:wght@400;800;900&family=Bubblegum+Sans&family=Mali&family=Flamenco&family=Aclonica&family=Carter+One&family=Luckiest+Guy&family=Lato&family=Montserrat+Subrayada&family=Sarabun&family=Viga&family=Wellfleet&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./references/login.css">
    <link rel="stylesheet" href="./references/main.css">
    <link rel="stylesheet" href="./references/footer.css">
    <link rel="stylesheet" href="./references/navigationBar.css">
    <link rel="stylesheet" href="./references/animation.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
</head>

<body>
    <div class="header-container">
        <div class="image-container">
            <a href="./index.php"><img src="./images/logo/lph-logo-gray.png"></a>
        </div>
        <section class="login-container">
            <div class="login-left-panel">
                <form id="login-form">
                    <h1>Sign In</h1><br>
                    <div class="social-container">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-google-plus"></i></a>
                        <a href="#"><i class="fab fa-twitter-square"></i></a>
                    </div><br>
                    <input type="email" name="email" placeholder="Enter Email-ID" required />
                    <input type="password" name="password" placeholder="Enter Password" required minlength="6" />
                    <p><a href="./forgot.php">Forgot Password?</a></p>
                    <input type="submit" value="Login">
                    <div id="login-message"></div>
                </form>
            </div>
            <div class="login-right-panel">
                <form class="right-panel-content" action="./register.php">
                    <h1>Hello, Friend!</h1><br><br>
                    <p>Not Already a User?</p><br><br>
                    <input type="submit" value="Sign Up" />
                </form>
            </div>
        </section>
    </div>
    <script>
        document.getElementById('login-form').addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(this);
            fetch('login_process.php', {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    const messageDiv = document.getElementById('login-message');
                    if (data.success) {
                        messageDiv.innerHTML = '<p style="color: green;">' + data.message + '</p>';
                        window.location.href = './index.php';
                    } else {
                        messageDiv.innerHTML = '<p style="color: red;">' + data.message + '</p>';
                    }
                })
                .catch(error => {
                    document.getElementById('login-message').innerHTML = '<p style="color: red;">An error occurred.</p>';
                });
        });
    </script>

        <!-- fopter -->
        <?php include("./footer.php"); ?>
</body>

</html>