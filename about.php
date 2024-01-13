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
    <title>KL Radio - About</title>
</head>
<body onload="about()">
    <div class="container" id="container-about">
        <div class="navigation">
            <div class="for-logo">
                <a href="#"><i class="fa fa-bars" id="one"></i></a>
                <a href="index.php"><img src="assets/images/KLR WEB.png" alt="logo"></a>
                <a href="#"><i class="fa fa-bars" id="two" onclick="navigation()"></i></a>
            </div>
            <div class="navigation-bar" id="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="user.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <!--<li><a href="http://hrudayweb.42web.io/" target="_blank">Blog</a></li>-->
                        <li><a href="learning.php">E-learning</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="shows.php">Events</a></li>
                        <li><a href="ourteam.php">Our team</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li><a href="signout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="about-page">
            <div class="about-page-heading">
                <h1>About KL Radio</h1>
                <p>KL Radio is a University wide college radio broadcasting started in 
                   2016 from KL University. Today we are operating with more than 35+ 
                   Radio Jockeys and more than 100 Technical and Non-Technical members.
                   We currently have a listenership of 30,000 audiences and is one of 
                   the best college radios in the region.</p>
                <p>We are the official media partners for most of the fests and events 
                   conducted at the university level like Samyak, Surabhi, Yantrik, & 
                   many more. Our team also hosted events for the movies Suryakantham 
                   and Eakam. With a daily growing listenership and expectations, 
                   we thrive to be the best college radio.</p>
                <p>We regularly airs programs like Radio Learning, faculty interviews, 
                   student interactions, and regular news updates.</p>
                <p>Along with socially educating people, we also entertain them with 
                    unique concepts & ideas.</p>
                    <div class="animated-count">
                        <div class="radio-members">
                            <h1>Radio members</h1>
                            <p id="value-1"></p>
                        </div>
                        <div class="radio-wings">
                            <h1>Radio Wings</h1>
                            <p id="value-2"></p>
                        </div>
                        <div class="radio-leads">
                            <h1>Team leads</h1>
                            <p id="value-3"></p>
                        </div>
                        <div class="radio-leads">
                            <h1>Web masters</h1>
                            <p id="value-4"></p>
                        </div>
                    </div>
                   <div class="iframe" id="iframe" style="top: 0;">
                    <iframe src="https://www.youtube.com/embed/rpaJWGLTI_Q?version=3&autoplay=1&controls=1&&showinfo=0&loop=1&mute=1&playlist=rpaJWGLTI_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                   <a href="https://www.youtube.com/watch?v=fFyjnOa5m3I&t=1s" id="about-yt" target="_blank">Watch on youtube</a>
            </div>
        </div><br>
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