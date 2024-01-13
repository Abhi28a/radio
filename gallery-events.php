<?php
 clearstatcache();
 require('auth_session.php');
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
    <title>KL Radio - Gallery</title>
</head>
<body onload="gallery()" oncontextmenu="return false;">
    <div class="container" id="container-gallery">
        <div class="navigation">
            <div class="for-logo">
                <a href="#"><i class="fa fa-bars" id="one"></i></a>
                <a href="index.php"><img src="assets/images/KLR WEB.png" alt="logo"></a>
                <a href="#"><i class="fa fa-bars" id="two" onclick="navigation()"></i></a>
            </div>
            <div class="navigation-bar" id="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <!--<li><a href="http://hrudayweb.42web.io/" target="_blank">Blog</a></li>-->
                        <li><a href="learning.php">E-learning</a></li>
                        <li><a href="student-block.php">Student block</a></li>
                        <li><a href="gallery-allphotos.php">Gallery</a></li>
                        <li><a href="shows.php">Events</a></li>
                        <li><a href="ourteam.php">Our team</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="signout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="gallery-heading">
            <h1>Gallery</h1>
        </div>
        <div class="gallery-filter">
            <a href="gallery-allphotos.php" id="allphotos-g">All photos</a>
            <a href="gallery-recent.php" id="recent-g">Recent</a>
            <a href="gallery-events.php" id="events-g" style="background: red;">Events</a>
            <a href="gallery-team.php" id="team-g">Team</a>
        </div>
        <div class="gallery-allphotos" id="gallery-allphotos" style="display: none;"></div>
        <div class="gallery-recent" id="gallery-recent" style="display: none;"></div>
        <div class="gallery-events" id="gallery-events">
            <div class="events-images"><img src="assets/images/events1.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: .2s;"><img src="assets/images/events2.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: .4s;"><img src="assets/images/events3.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: .6s;"><img src="assets/images/events4.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: .8s;"><img src="assets/images/events5.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 1s;"><img src="assets/images/events6.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 1.2s;"><img src="assets/images/events7.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 1.4s;"><img src="assets/images/events8.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 1.6s;"><img src="assets/images/events9.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 1.8s;"><img src="assets/images/events10.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 2s;"><img src="assets/images/events11.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 2.2s;"><img src="assets/images/events12.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 2.4s;"><img src="assets/images/events13.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 2.6s;"><img src="assets/images/events14.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 2.8s;"><img src="assets/images/events15.JPG" alt="Event image"></div>
            <div class="events-images" style="animation-delay: 3s;"><img src="assets/images/events16.JPG" alt="Event image"></div>
        </div>
        <div class="gallery-team" id="gallery-team" style="display: none;"></div><br>
        <div class="watch-more-yt" id="watch-more-yt">
            <a href="sponsor.php" target="_blank"><p>Sponsors</p></a>
        </div>
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
            <p>Copyright © 2022 | K L Radio Powered By <a href="pronetsolutions.in">ProNetworkSolutions</a></p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>