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
    <title>KL Radio - Events</title>
</head>
<body onload="events()">
    <div class="container" id="container-events">
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
        <div class="events-heading">
            <h1>Events</h1>
        </div>
        <div class="events-filter">
            <a href="shows.php" style="background: red;">Shows/Programs</a>
            <a href="special-events.php">Interviews</a>
            <a href="instagram-blogs.php">Special Events</a>
        </div>
        <div class="shows-flex-main">
            <div class="podcasts-heading">
                <h1>Podcasts</h1>
            </div>
            <div class="flexing-events-row">
                <div class="shows-programs-fer">
                    <div class="shows-programs-image">
                        <a href="https://www.instagram.com/p/CYvAq9HhJmZ/" target="_blank"><img src="assets/images/cancerday.png" alt=""></a>
                    </div><br><br><br>
                    <div class="shows-programs-data">
                        <p>Cancer day Special show by RJ Ronith</p><br>
                        <audio controls>
                            <source src="assets/images/cancerday.mp3">
                        </audio>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 3s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CYvAq9HhJmZ/" target="_blank"><img src="assets/images/republicday.png" alt=""></a>
                    </div><br><br><br>
                    <div class="shows-programs-data" style="animation-delay: 3s;opacity: 0;">
                        <p>Republic day Special show by RJ Alekhya</p><br>
                        <audio controls>
                            <source src="assets/images/republicday.mp3">
                        </audio>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 4.5s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CYvAq9HhJmZ/" target="_blank"><img src="assets/images/sirivennela.png" alt=""></a>
                    </div>
                    <div class="shows-programs-data" style="animation-delay: 4.5s;opacity: 0;">
                        <p>A Tribute To Legendary Lyricist Sirivennela Sitarama Sastry Garu By RJ Charmilla</p><br>
                        <audio controls>
                            <source src="assets/images/sirivennela.mp3">
                        </audio>
                    </div>
                </div>
            </div>
        </div>
        <hr width="90%" style="position:relative;top: 27vh;margin: auto;opacity: .3;"><br><br>
        <div class="shows-flex-main">
            <div class="podcasts-heading">
                <h1>Popular Shows</h1>
            </div>
            <div class="flexing-events-row">
                <div class="shows-programs-fer">
                    <div class="shows-programs-image">
                        <a href="https://www.instagram.com/p/CT2U414hl2C/" target="_blank"><img src="assets/images/popular-shows1.jpg" alt=""></a>
                    </div>
                    <div class="shows-programs-data">
                        <p>"Failures are stepping stones for success" by RJ Reshmi on 16th September, at 10AM and 5PM. </p><br>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 3s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CTz1UG3Blpy/" target="_blank"><img src="assets/images/popular-shows2.jpg" alt=""></a>
                    </div>
                    <div class="shows-programs-data" style="animation-delay: 3s;opacity: 0;">
                        <p>Special show on "Engineers" by RJ Likitha on 15th September at 10AM and 5PM.</p><br>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 4.5s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CRjeOl-Mdfg/" target="_blank"><img src="assets/images/popular-shows3.jpg" alt=""></a>
                    </div><br>
                    <div class="shows-programs-data" style="animation-delay: 4.5s;opacity: 0;">
                        <p>Special show on "A weekend with friends" by RJ Varsha on 21st July at 10AM and 5PM . </p><br>
                    </div>
                </div>
            </div>
        </div>
            <hr width="90%" style="position:relative;top: 27vh;margin: auto;opacity: .3;"><br><br>
        <div class="shows-flex-main">
                <div class="podcasts-heading">
                    <h1>RJ Shows</h1>
                </div>
            <div class="flexing-events-row">
                <div class="shows-programs-fer">
                    <div class="shows-programs-image">
                        <a href="https://www.instagram.com/p/CRCEdaSM1yP/" target="_blank"><img src="assets/images/RJ-shows1.jpg" alt=""></a>
                    </div><br>
                    <div class="shows-programs-data">
                        <p>Special show on<br>"E-bikes" 🚲 by RJ Varsha on 8th July at 10AM and 5PM.</p><br>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 3s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CRiJXvzsaIY/" target="_blank"><img src="assets/images/RJ-shows2.jpg" alt=""></a>
                    </div>
                    <div class="shows-programs-data" style="animation-delay: 3s;opacity: 0;">
                        <p>Special show on "Types of people after a pandemic" by RJ Likitha on 20th July at 10AM and 5PM.</p><br>
                    </div>
                </div>
                <div class="shows-programs-fer">
                    <div class="shows-programs-image" style="animation-delay: 4.5s;opacity: 0;">
                        <a href="https://www.instagram.com/p/CQ6dSTQM_xK/" target="_blank"><img src="assets/images/RJ-shows3.jpg" alt=""></a>
                    </div><br>
                    <div class="shows-programs-data" style="animation-delay: 4.5s;opacity: 0;">
                        <p>Special show on "snapchat" by RJ Likitha on 5th July at 10AM and 5PM.</p><br>
                    </div>
                </div>
            </div>
            </div>
        <hr width="90%" style="position:relative;top: 27vh;margin: auto;opacity: .3;"><br><br>
        <div class="explore-shows">
            <span>Explore more in our <a href="https://www.instagram.com/younifyklradio/" target="_blank">Instagram</a> and <a href="https://www.youtube.com/channel/UCse4FD6zAmrEl8Xz2y1aaug" target="_blank">youtube</a> channel</span>
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
            <p>Copyright © 2022 | All rights reserved by @klradio</p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>