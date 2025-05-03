<footer>
    <div class="footer">
        <div class="footer-left">
            <?php
            if (isset($_SESSION['user_name'])) {
                echo '<span><a href="./signout.php">' . $_SESSION['user_name'] . ' <i class="fas fa-sign-out-alt"></i></a></span>';
            } else {
                echo '<span><a href="./login.php">Sign in  <i class="fas fa-sign-in-alt"></i></a></span>';
            }
            ?>
            <span><a href="./feedback.php">FEEDBACK  <i class="far fa-comment-dots"></i></a></span>
            <span><a href="./index.php">HOME  <i class="fas fa-home"></i></a></span>
        </div>

        <div class="footer-right">
            <a href="https://x.com/yousev_3lewa" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/yousev_3lewa/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/yousef.jo.12139862" target="_blank"><i class="fab fa-facebook-f"></i></a>
        </div>
    </div>
    <div class="footer-copyright">
        <h6>FOR ENTERTAINMENT PURPOSES.</h6>
        <h6>&copy; 2024 Quality is Our Recipie. All Rights Reserved.</h6>
        <p class="email-id"> YOUSEF ELEWA</p>
    </div>
</footer>