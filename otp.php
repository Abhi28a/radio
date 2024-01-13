<?php
    require_once 'controller.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e3831a00ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/KLR WEB.png">
    <title>KL Radio - Account</title>
</head>
<body onload="login()">
    <div class="container" id="container-login">
        <div class="navigation">
            <div class="for-logo">
                <a href="#"><i class="fa fa-bars" id="one"></i></a>
                <a href="index.html"><img src="assets/images/KLR WEB.png" alt="logo"></a>
                <a href="#"><i class="fa fa-bars" id="two" onclick="navigation()"></i></a>
            </div>
            <div class="navigation-bar" id="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <!--<li><a href="http://hrudayweb.42web.io/" target="_blank">Blog</a></li>-->
                        <li><a href="signin.html">Gallery</a></li>
                        <li><a href="signin.html">Events</a></li>
                        <li><a href="signin.html">Our team</a></li>
                        <li><a href="signin.html">login/signup</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="container-signin" id="container-signin">
            <?php if(count($errors) > 0){ ?>
                <div>
                    <?php foreach($errors as $showerror){ ?>
                    <li><?php echo $showerror; ?></li>
                    <?php } ?>
                </div> <?php }  ?>
            <div class="form-signin">
                <h1 style="width: auto;">OTP&nbsp;</h1>
                <form action="otp.php" method="post">
                    <label for="password">Enter OTP</label>
                    <input type="number" name="otp" id="otp" required>
                    <input type="submit" name="verify" value="Verify">
                </form>
            </div>
        </div><br>
        <div class="watch-more-yt" id="watch-more-yt">
            <a href="sponsor.html" target="_blank"><p>Sponsors</p></a>
        </div><br>
        <div class="for-queries">
            <h1>Contact</h1>
            <p>For any queries contact us through mail<br>klradio.in@gmail.com</p>
        </div>
        <div class="contact" id="contact">
            <h1>Meet us at</h1><br>
            <a><i class="fa fa-map-marker" style="font-size: 24px;color: red;"></i> KL University, Vaddeswaram, Andhra pradesh, India 522502</a><br>
            <h1>Connect with us</h1><br>
            <h5>LIKE, FOLLOW, SHARE</h5>
            <span>
                <a href="https://twitter.com/younify_klradio" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/kluradio" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/younifyklradio/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                <a href="https://t.me/klradio" target="_blank"><i class="fa fa-telegram"></i></a>
                <a href="https://www.youtube.com/channel/UCse4FD6zAmrEl8Xz2y1aaug" target="_blank"><i class="fa fa-youtube"></i></a>
            </span><br>
            <p>Copyright © 2022 | All rights reserved by @klradio</p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>