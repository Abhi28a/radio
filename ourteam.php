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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/images/KLR WEB.png">
    <title>KL Radio - Our team</title>
</head>
<body>
    <div class="container" id="container-ourteam">
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
        <div class="ourteam-heading">
            <h1>Our team</h1>
        </div>
        <div class="ourteam-animated-count">
            <div class="ourteam-radio-members">
                <h1>Radio members</h1>
                <p id="value-1"></p>
            </div>
            <div class="ourteam-radio-wings">
                <h1>Radio Wings</h1>
                <p id="value-2"></p>
            </div>
            <div class="ourteam-radio-leads">
                <h1>Team leads</h1>
                <p id="value-3"></p>
            </div>
            <div class="ourteam-radio-leads">
                <h1>Web masters</h1>
                <p id="value-4"></p>
            </div>
        </div>
        <div class="ourteam-members">
            <div class="ourteam-chief-card">
                <img src="assets/images/Station Head.jpeg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Yoshita Roy</h4>
                    <p>Station Head</p>
                </div>
                <div class="chief-social">
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/RJ _ Technical.jpeg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Charan</h4>
                    <p>Station Head</p>
                </div>
                <div class="chief-social">
                    <a href="https://twitter.com/_sri_charan?t=3OmvHZyWbucjl785fPFVpw&s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100009211038430" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://instagram.com/the_only_s.o.u.l?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="www.linkedin.com/in/sricharanveeramalla" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/EPUB.jpeg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Surya sahit</h4>
                    <p>E-Publicity & Advisor</p>
                </div>
                <div class="chief-social">
                    <a href="https://twitter.com/SuryaSahit1?t=7GlbAnrlfdni-OYAfoy78A&s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100012027249553" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://instagram.com/___naa.peru.surya___?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/surya-sahit-5613a8195" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/Creative.jpg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Aditya</h4>
                    <p>Creative</p>
                </div>
                <div class="chief-social">
                    <a href="https://twitter.com/adith627?t=glARzEDXbW80zelHoz5-Pg&s=09" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/adithya1006" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/_adithya.reddy/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/adithya-reddy-8baa7b1b1" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/Broadcasting.jpeg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Yogesh</h4>
                    <p>Broadcasting</p>
                </div>
                <div class="chief-social">
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/Designing.png" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Roshmi</h4>
                    <p>Designing</p>
                </div>
                <div class="chief-social">
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/Drafting.png" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Vasavi</h4>
                    <p>Drafting</p>
                </div>
                <div class="chief-social">
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/marketing.jpg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Bala shankar</h4>
                    <p>Marketing</p>
                </div>
                <div class="chief-social">
                    <a href="https://twitter.com/balu_kilaru" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.facebook.com/profile.php?id=100014393862230" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/balukilaru/?hl=en" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/balukilaru/" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card">
                <img src="assets/images/PR.jpg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Ananya</h4>
                    <p>Public Realtions</p>
                </div>
                <div class="chief-social">
                    <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card" id="no-display-one" style="margin-left: 20%;">
                <img src="assets/images/Scheduling.jpg" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Praveen</h4>
                    <p>Scheduling</p>
                </div>
                <div class="chief-social">
                    <a href="https://mobile.twitter.com/GVS_1029" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://m.facebook.com/100008250887444/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/gvs1029/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/venkata-siva-praveen-ganipisetty-142854200" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="ourteam-chief-card" id="no-display-one">
                <img src="assets/images/chief-image.png" alt="user">
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h4>Nikhil</h4>
                    <p>Web master</p>
                </div>
                <div class="chief-social">
                    <a href="https://mobile.twitter.com/GVS_1029" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="https://m.facebook.com/100008250887444/" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/gvs1029/" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/mwlite/in/venkata-siva-praveen-ganipisetty-142854200" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
        </div>
        <hr width="90%" style="position: relative;top: 34vh;margin: auto;opacity: .4;">
        <div class="web-masters-heading">
            <h1>TEAM MEMBERS</h1>
        </div>
        <div class="web-masters">
            <?php
                $query="SELECT * FROM `team_members`";
                $sql=mysqli_query($con,$query);
                while($row=mysqli_fetch_assoc($sql)){
            ?>
            <div class="ourteam-chief-card" style="margin-left: 2vh;margin: auto;margin-top: 6vh;">
                <?php if($row['image']=="") { ?>
                    <img src="assets/images/chief-image.png" alt="user">
                <?php }else{ ?>
                    <img src="<?php echo $row['image'] ?>" alt="user">
                <?php } ?>
                <div class="ourteam-chief-icon">
                    <img src="assets/images/KLR WEB.jpg" alt="chief" id="chief">
                </div>
                <div class="chief-info">
                    <h5><?php echo $row['sid'] ?></h5>
                    <h4><?php echo $row['name'] ?></h4>
                    <p><?php echo $row['wing'] ?></p>
                </div>
                <div class="chief-social">
                    <a href="<?php echo $row['twitter'] ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['facebook']?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['instagram'] ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['linkedin'] ?>" target="_blank"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <?php } ?>
        </div>
        <div class="for-queries" style="top: 42vh;">
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
            <p>All rights reserved @klradio</p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>