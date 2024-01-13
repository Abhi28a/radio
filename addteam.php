<?php
    require_once 'controller.php';
    require 'admin_session.php';
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
    <title>KL Radio - Admin</title>
</head>
<body>
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
                        <li><a href="team-members.php">Manage Team</a></li>
                        <li><a href="addteam.php">Add Member</a></li>
                        <li><a href="admin.php">Dashboard</a></li>
                        <li><a href="signout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="admin-heading">
            <h1>Add Team Member</h1>
        </div>
        <div class="container-signup" id="container-signup">
            <div class="form-signup">
                <form action="addteam.php" method="post">
                    <label for="name">Team Member Name</label>
                    <input type="text" placeholder="Enter Fullname" name="name" id="name" required>
                    <label for="name">ID number</label>
                    <input type="number" placeholder="Enter ID number" name="sid" id="sid" required>
                    <label for="Branch">Branch</label>
                        <select name="branch" id="branch" style="width: 100%;padding: 16px 20px;border-radius: 4px;">
                        <option value="ECE">ECE</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ME">ME</option>
                        <option value="ECM">ECM</option>
                        <option value="CSE AI & DS">CSE AI & DS</option>
                        <option value="CE">CE</option>
                        <option value="other">Other</option>
                        </select> 
                    <label for="wing">Wing</label>
                    <select name="wing" id="wing" style="width: 100%;padding: 16px 20px;border-radius: 4px;">
                        <option value="Station Head">Station Head</option>
                        <option value="Broadcasting">Broadcasting</option>
                        <option value="Creative">Creative</option>
                        <option value="Designing">Designing</option>
                        <option value="Drafting">Drafting</option>
                        <option value="E-Publicity">E-Publicity</option>
                        <option value="Marketing">Marketing</option>
                        <option value="Public Realtions">Public Realtions</option>
                        <option value="Radio Jockey Technical">Radio Jockey Technical</option>
                        <option value="Scheduling">Scheduling</option>
                        <option value="Web Master">Web Master</option>
                        </select>
                    <input type="submit" name="add-team-member" value="Add Member">
                </form>
            </div>
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