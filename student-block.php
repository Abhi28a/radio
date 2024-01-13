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
    <title>Student Block</title>
</head>
<body>
    <div class="container-student">
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
        <div class="remain-student">
            <div class="what-is-student">
                <a href="#" onclick="alert('Here you can post your Startup ideas, queries and you can share your thoughts to the other students')">What is Student block?</a>
            </div>
            <?php
                $id=$_SESSION['id'];
                $query="SELECT * FROM `student_block` WHERE `sid`='$id'";
                $sql=mysqli_query($con,$query);
            ?>
            <div class="student-activity">
                <div class="activity-box">
                    <div class="activity-box-top">
                        <h3>Total Participated</h3>
                        <p><?php echo mysqli_num_rows($sql) ?></p>
                    </div>
                    <div class="activity-box-bottom">
                        <a href="#student-chat">Browse</a>
                    </div>
                </div>
                <?php 
                $query="SELECT DISTINCT sid FROM `student_block`";
                $res=mysqli_query($con,$query);
                ?>
                <div class="activity-box">
                    <div class="activity-box-top">
                        <h3>Active Users</h3>
                        <p><?php echo mysqli_num_rows($res) ?></p>
                    </div>
                    <div class="activity-box-bottom">
                        <a href="#student-chat">Browse</a>
                    </div>
                </div>
            </div>
            <div class="student-chat" id="student-chat">
                <div class="student-chat-left">
                    <h2><i class="fas fa-star"></i> My Ideas</h2>
                    <div class="my-ideas-data">
                        <?php
                            while($row=mysqli_fetch_assoc($sql)){ 
                        ?>
                        <div class="my-ideas-data-history">
                            <h3><?php echo $row['title'] ?></h3>
                            <p><?php echo $row['description'] ?></p>
                            <p>Posted at <?php echo "  ".$row['addedOn'] ?></p>
                            <form action="student-block.php" method="post">
                                <input type="number" name="id" id="id" value="<?php echo $row['id'] ?>" hidden>
                                <input type="submit" name="delete-idea" id="delete-idea" value="Delete">
                            </form>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="student-chat-right">
                    <div class="student-top-feed">
                        <h2>Top Feed</h2>
                        <!--<button onclick="window.location.reload()"><i class="fa fa-refresh"></i> New Ideas</button>-->
                    </div>
                    <div class="student-feed-content">
                        <?php 
                        $query="SELECT * FROM `student_block` JOIN `user` ON user.id= `student_block`.sid;";
                        $sql=mysqli_query($con,$query);
                        while($row=mysqli_fetch_assoc($sql)){
                        ?>
                        <div class="student-feed-line">
                            <h3><?php echo $row['title'] ?></h3>
                            <p><?php echo $row['description'] ?></p>
                                <div class="student-feed-image">
                                    <img src="<?php echo $row['image'] ?>" alt="">
                                </div>
                                <div class="delete-time">
                                    <span><?php echo "Posted By: ".$row['name']." ".$row['sid']." at ".$row['addedOn'] ?></span>
                                </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
        <button id="postjob" onclick="displayPost()"><i class="fa fa-plus"></i> Post your Idea</button>
        <div class="post-job" id="post-job">
            <form action="student-block.php" method="post" enctype="multipart/form-data"> 
                <h3>Post your Idea</h3>
                <input type="text" name="title" id="title" placeholder="Title" required>
                <textarea name="description" id="description" cols="30" rows="5" placeholder="Description" required></textarea>
                <input type="file" name="image" id="image">
                <div class="send-close">
                    <button id="close" onclick="closePost()">Close</button>
                    <input type="submit" id="post-idea" name="post-idea" value="Send">
                </div>
            </form>
        </div>
        <div class="for-queries" style="top: 38vh;">
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
            <p>Copyright © 2022 | All rights reserved by @klradio.live</p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>