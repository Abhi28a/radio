<?php
    require_once 'controller.php';
    require 'auth_session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e3831a00ca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="favicon" href="KLR WEB.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>KL Radio - Home</title>
</head>
<body>
    <div class="container" id="container">
        <div class="navigation">
            <div class="for-logo">
                <a><i class="fa fa-bars" id="one"></i></a>
                <a href="index.php"><img src="assets/images/KLR WEB.png" alt="logo"></a>
                <a><i class="fa fa-bars" id="two" onclick="navigation()"></i></a>
            </div>
            <div class="navigation-bar" id="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <!--<li><a href="http://blog.klradio.live">Blog</a></li>-->
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
        <div class="carousel" id="carousel">
            <a href="#"><img src="assets/images/carousel/carousel1.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel2.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel3.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel4.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel5.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel6.jpg" alt=""></a>
            <a href="#"><img src="assets/images/carousel/carousel7.jpg" alt=""></a>
        </div>
        <div class="scroll-animation" id="scroll-animation">
            <div class="notify">
                <p>Notifications</p>
            </div>
            <div class="scroll-text">
                <marquee behavior="scroll" direction="left" width="100%" class="for-marquee">
                    <img src="assets/images/KLR WEB.png" alt="logo"><a href="#">KL Radio, is the official student-run radio station
                        of KL Deemed to be University, the station broadcasts via online 
                        streaming.</a>
                    <img src="assets/images/KLR WEB.png" alt="logo"><a href="#">ZROTRIYA 2022 is going to be conducted on 7th & 8th March.</a>
                    <img src="assets/images/KLR WEB.png" alt="logo"><a href="#">#INCLUDE 2022 is going to be conducted on 4th and 5th of March.</a>
                </marquee>
            </div>
            <div class="control-manager-public-page-heading" id="onex" style="top: 4vh;">
                <h1>Live Station</h1>
            </div>
            <div class="public-page-stream" style="top: 5vh;">
                <div class="live-from-klu">
                    <div class="live-from-klu-heading">
                        <h2>Live Streaming</h2>
                        <!--<div class="listener-count">-->
                        <!--    <p>16</p>-->
                        <!--    <h6><i class="fas fa-headphones-alt"></i> Listeners</h6>-->
                        <!--</div>-->
                    </div>
                    <div class="audio-live">
                        <span><i class="fas fa-music"></i> Now Playing</span>
                        <marquee behavior="scroll" direction="left" scrollamount="3">
                            <!--<p>Top EDM Hits</p>-->
                        </marquee>
                        <audio id="liveone" controls controlsList="noplaybackrate">
                            <source src="assets/images/songs.mp3" type="audio/mpeg">
                        </audio>
                        <button id="play-pause" onclick="changeOne()">Play</button>
                        <button onclick="myTimeOne()">Go live</button>
                    </div>
                </div>
            </div><br><br><br><br>
            <div class="scroll-announcements">
                <a href="#important-notifications">Announcements</a>
                <p>scroll down</p>
                <i class="fa fa-angle-double-right"></i>
            </div>
        </div>
        <div class="chatbot-klu">
            <img src="assets/images/customer-support.png" onclick="openChat()" alt="chatbot">
            <div class="chatbot-form" id="chatbot-form">
                <form action="index.php" method="post">
                    <h1>Grievances</h1>
                    <input type="text" name="name" id="name" placeholder="Enter Name" required>
                    <input type="number" name="sid" id="sid" placeholder="Enter ID number" required>
                    <select name="category" id="category">
                        <option value="Select Category">Select Category</option>
                        <option value="Student Affairs">Student Affairs</option>
                        <option value="CIIE Director">CIIE</option>
                        <option value="ET Facilities">ET Facilities</option>
                        <option value="Skill Development">Skill Development</option>
                        <option value="Placements">Placements</option>
                        <option value="KL Radio">KL Radio</option>
                        <option value="Other">Other</option>
                    </select>
                    <textarea name="message" id="message" cols="10" rows="5" placeholder="Enter Message..." required></textarea>
                    <input type="submit" name="chat-bot" value="Send">
                    <input type="button" value="Close" onclick="closeChat()">
                </form>
            </div>
        </div>
        <div class="about" id="about">
            <h1>Radio section</h1>
            <p>KL Radio, is the official student-run radio station
                of KL Deemed to be University, the station broadcasts via online 
                streaming.<br>There are totally 12 wings which are backbone for radio</p><br>
                <div class="wings">
                    <span><p>Creative</p></span>
                    <span><p>Designing</p></span>
                    <span><p>Radio Jockey</p></span>
                    <span><p>Marketing</p></span>
                    <span><p>Drafting</p></span>
                    <span><p>Database</p></span>
                    <span><p>Technical</p></span>
                    <span><p>Broadcasting</p></span>
                    <span><p>Public Relations</p></span>
                    <span><p>E-Publicity</p></span>
                    <span><p>Audio editing and Scheduling</p></span>
                    <span><p>Web Masters</p></span>
                </div>
                <div class="teammembers" id="teammembers">
                    <a href="team-members.html" target="_blank"><p>Team members</p></a>
                </div>
        </div>
        <div class="recent-on-youtube">
            <h1>Recent on Youtube</h1>
        </div>
        <div class="iframe" id="iframe">
            <iframe src="https://www.youtube.com/embed/37m1PtS8CJQ?version=3&autoplay=1&controls=1&&showinfo=0&loop=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <iframe src="https://www.youtube.com/embed/kixcjOg4Cmk?version=3&autoplay=1&controls=1&&showinfo=0&loop=1&mute=1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <div class="known-for">
            <div class="known-for-main">
                <h1>We are known for our</h1>
                <p data-aos="zoom-out" data-aos-diration="1900">Radio shows</p>
                <p data-aos="zoom-out" data-aos-diration="1900" data-aos-delay="200">Special and commercial events</p>
                <p data-aos="zoom-out" data-aos-diration="1900" data-aos-delay="400">Social media promotions</p>
            </div>
        </div>
        <div class="collaborative-events">
            <h1>Collaborative-events</h1>
        </div>
        <div class="known-for-images">
            <a href="https://www.instagram.com/p/CVZzNSuMTs2/" target="_blank"><img src="assets/images/about-1.jpg" alt="Radio show"></a>
            <a href="https://www.instagram.com/p/B18fMcWnizC/" target="_blank"><img src="assets/images/about-2.jpg" alt="Radio show"></a>
            <a href="https://www.instagram.com/p/CUovxJdBMQb/" target="_blank"><img src="assets/images/about-3.webp" alt="Radio show"></a>
        </div>
        <div class="live-video">
            <button onclick="LiveVideo()">Live video</button>
            <marquee behavior="scroll" direction="left" id="xxx">
                <a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a>
            </marquee>
            <iframe src="https://www.youtube.com/embed/rpaJWGLTI_Q?version=3&autoplay=1&controls=1&&showinfo=0&loop=1&mute=1&playlist=rpaJWGLTI_Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen id="yyy"></iframe>
            <marquee behavior="scroll" direction="right" style="top: 0;" id="zzz">
                <a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a><a href="#">LIVE</a>
            </marquee>
        </div>
        <div class="watch-more-yt" id="watch-more-yt">
            <a href="https://www.youtube.com/channel/UCse4FD6zAmrEl8Xz2y1aaug" target="_blank"><p>Watch more on Youtube</p></a>
        </div><br><br>
        <div class="important-notifications-heading">
            <h1>Announcements</h1>
        </div>
        <div class="important-notifications" id="important-notifications">
            <span><i class="fa fa-angle-double-right"></i><a href="https://internshala.com/grand-summer-fair-2022" target="_blank">Grand Summer Internship Fair, last date to apply is 6th April'22</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="assets/images/Y20 Test-2.pdf" target="_blank">Y20 Batch Regular End Semester Examination April - 2022 (Y20 Batch)</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="assets/images/Y20 Test-2.pdf" target="_blank">Y20 Batch Regular End Semester Examination April - 2022 (Y20 Batch)</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://dare2compete.com/all-opportunities?filters=,all,open,all&types=teamsize,payment,oppstatus,eligible" target="_blank">Hero CoLabs Design Challenge 3.0, Last Date to register: 24 April 2022.</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://forms.office.com/Pages/ResponsePage.aspx?id=PsiMgEal50egP3Oh67ok8xptoKdP1apIuPe4Ji4y5uBUQUFENU5XWjk5VktOVkpQSFdFSFYwSEdGRC4u" target="_blank">All Y21 B.Tech First year Students are requested to fill your Career Choice Options by using the following link.</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/htickets.aspx" target="_blank">Admit Cards/Hall Tickets for KLEEE-2022 online/offline Test Phase-I(27,28 & 29th January-2022)</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/pdfs/INSTRUCTIONS%20TO%20THE%20CANDIDATES%20FOR%20ONLINE-.pdf" target="_blank">Instructions to the candidates for Online (Take from Home) KLEEE-2022 Examination</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/klueeeresult.aspx" target="_blank">KLEEE-2022 Phase-1 Results</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/reg2.aspx" target="_blank">2021-22 Even SEM Registration Schedule and Token Numbers</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/pdfs/Awards%20data%202020-21.pdf" target="_blank">Appreciations For the Faculty Who Recieved Awards,Recognitions And Fellowships.</a></span>
            <span><i class="fa fa-angle-double-right"></i><a href="https://www.kluniversity.in/pdfs/XI%20.pdf" target="_blank">Notification for XI Convocation.</a></span>
        </div>
        <div class="watch-more-yt" id="watch-more-yt" style="top: 50vh;">
            <a href="sponsor.php" target="_blank"><p>Sponsors</p></a>
        </div>
        <div class="for-queries" style="top: 55vh;">
            <h1>Contact</h1>
            <p>For any queries contact us through mail<br>@klradio.in@gmail.com</p>
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
    <div class="preloader" id="preloader" style="display: none;">
        <img src="assets/images/KLR WEB.png" alt="kl radio logo">
        <img src="assets/images/preloader.svg" alt="preloader" id="image-preloader">
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>