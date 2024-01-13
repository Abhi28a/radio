<?php
require_once 'controller.php';
require 'auth_session.php';
$id=$_SESSION['id'];
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
    <title>KL Radio - Profile</title>
</head>
<body>
    <div class="container" id="container-events">
        <div class="navigation">
            <div class="for-logo">
                <a href="#"><i class="fa fa-bars" id="one"></i></a>
                <a href="index.html"><img src="assets/images/KLR WEB.png" alt="logo"></a>
                <a href="#"><i class="fa fa-bars" id="two" onclick="navigation()"></i></a>
            </div>
            <div class="navigation-bar" id="navigation-bar">
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.html">About</a></li>
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
        <div class="profile-heading">
            <h1>Profile</h1>
        </div>
        <?php
        $query="SELECT * FROM `user` WHERE id='$id'";
        $sql=mysqli_query($con,$query);
        $row=mysqli_fetch_row($sql);
        $createdOn=$row[6];
        ?>
        <div class="profile-left">
            <div class="profile-image">
                <img src="<?php echo $row[8] ?>" alt="profile-picture">
            </div>
            <div class="profile-nav">
                <ul>
                    <li><a href="#profile-account">Account</a></li>
                    <li <?php if((Int)$row[7]==0){ echo "style='display:none';";} ?> ><a href="#team-member-account">Team Page Profile Info</a></li>
                    <li><a href="#profile-password">Password</a></li>
                    <li><a href="#profile-statistics">Statistics</a></li>
                </ul>
            </div>
        </div>
        <div class="profile-account" id="profile-account">
            <h1>Account Settings</h1>
            <form action="profile.php" method="post">
                <label for="p-name">Name</label>
                <input type="text" name="name" id="name" value="<?php echo $row[2] ?>"><br>
                <label for="p-email">Email</label>
                <input type="email" name="email" id="p-email" value="<?php echo $row[1] ?>" disabled><br>
                <label for="p-idnumber">ID number</label>
                <input type="number" name="sid" id="sid" value="<?php echo $row[3] ?>" disabled><br>
                <label for="p-phonenumber">Phone number</label>
                <input type="number" name="mobile" id="mobile" value="<?php echo $row[4] ?>"><br>
                <input type="submit" name="update-profile" value="Update" onclick="updated()">
            </form>
            <p id="profile-updated-message"><i class="fa fa-check" id="profile-check-icon"></i> Profile updated</p>
        </div>
        <?php
        $sid=$row[3];
        $query="SELECT * FROM `team_members` WHERE `sid`='$sid'";
        $sql=mysqli_query($con,$query);
        $res=mysqli_fetch_row($sql);
        ?>

        <div class="profile-account" id="team-member-account"<?php if($row[7]==0){ echo "style='display:none';"; }?> >
            <h1>Team Page Profile Info</h1>
            <form action="profile.php" method="post" enctype="multipart/form-data">
                <label for="name">Display Name</label>
                <input type="text" name="name" id="name" value="<?php echo $res[1] ?>"><br>
                <label for="twitter">Twitter Handle(URL)</label>
                <input type="text" name="twitter" id="twitter" value="<?php echo $res[5] ?>"><br>
                <label for="facebook">Facebook Handle(URL)</label>
                <input type="text" name="facebook" id="facebook" value="<?php echo $res[6] ?>"><br>
                <label for="insta">Instagram Handle(URL)</label>
                <input type="text" name="instagram" id="instagram" value="<?php echo $res[7] ?>"><br>
                <label for="likedIn">LinkedIn Handle(URL)</label>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo $res[8] ?>"><br>
                <label for="image">Display Image</label>
                <input type="file" name="image" id="image" required>
                <input type="submit" name="update-team-profile" value="Update">
            </form>
        </div>
        <div class="profile-password" id="profile-password">
            <h1>Password Settings</h1>
            <?php if(count($errors) > 0){ ?>
                <div>
                    <?php foreach($errors as $showerror){ ?>
                    <li><?php echo $showerror; ?></li>
                    <?php } ?>
                </div> <?php }  ?>
            <form action="profile.php" method="post">
                <label for="oldpassword">Old Password</label><br>
                <input type="password" name="oldpassword" id="oldpassword"><br>
                <label for="password">Password</label><br>
                <input type="password" name="password" id="password"><br>
                <input type="submit" name="update-password" value="Update">
            </form>
        </div>
        <div class="profile-statistics" id="profile-statistics">
            <h1>Statistics</h1>
            <div class="statistics-aligning">
                <div class="ps-flexing-left">
                    <?php 
                    $query="SELECT * FROM `login_history` WHERE id='$id'";
                    $sql=mysqli_query($con,$query);
                    $row=mysqli_fetch_row($sql);
                    $last_login=$row[2];
                    ?>
                    <div class="login-count">
                        <h4>Login count</h4>
                        <p id="login-count-display"><?php echo $row[1] ?></p>
                    </div>
                    <?php
                    $query="SELECT * FROM `update_history` WHERE `id`='$id'";
                    $sql=mysqli_query($con,$query);
                    $row=mysqli_fetch_row($sql);
                    ?>
                    <div class="login-count">
                        <h4>Last Updated On</h4>
                        <p id="login-count-display"><?php 
                        if(mysqli_num_rows($sql)>0)
                        echo $row[1] ?></p>
                    </div>
                    <div class="login-count">
                        <h4>Created On</h4>
                        <p id="login-count-display"><?php echo $createdOn ?></p>
                    </div>
                </div>
                <div class="ps-flexing-right">
                    <div class="active-status">
                        <h4 style="border: 0;">Last Login</h4>
                        <p><i class="fa fa-dot-circle-o" style="color: green;background: transparent;"><?php echo $last_login ?></i></p>
                    </div>
                    <h4>Login History</h4>
                    <div class="login-history" id="login-history-display" style="padding:10px;height:auto;">
                    <?php 
                        $query="SELECT * FROM `session_history` WHERE `id`='$id'";
                        $sql=mysqli_query($con,$query);
                        while($row=mysqli_fetch_assoc($sql)){
                    ?>
                    <p><?php echo $row['session'] ?></p>
                    <?php } ?>
                    </div>
                </div>
            </div>
        </div><br>
        <div class="watch-more-yt" id="watch-more-yt">
            <a href="sponsor.html" target="_blank"><p>Sponsors</p></a>
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