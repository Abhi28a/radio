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
                        <li><a href="signout.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <?php
            $query="SELECT * FROM `user`";
            $sql=mysqli_query($con,$query);
        ?>
        <div class="admin-heading">
            <h1>Admin Page</h1>
        </div>
        <div class="dashboard-heading">
            <h1><a href="admin.php">Dashboard</a></h1>
        </div>
        <div class="dashboard-main-content">
            <div class="dashboard-all">
                <div class="dashboard-all-data">
                    <h4>Total Accounts</h4><br>
                    <h4><?php echo mysqli_num_rows($sql) ?></h4>
                </div>
                <div class="dashboard-all-details">
                    <a href="#dashboard-totalaccounts">View details</a>
                </div>
            </div>
            <?php
                $query="SELECT * FROM `user` WHERE `status`=1";
                $sql=mysqli_query($con,$query);
            ?>
            <div class="dashboard-active">
                <div class="dashboard-active-data">
                    <h4>Active Accounts</h4><br>
                    <h4><?php echo mysqli_num_rows($sql) ?></h4>
                </div>
                <div class="dashboard-active-details">
                    <a href="#dashboard-activeaccounts">View details</a>
                </div>
            </div>
            <?php
                $query="SELECT * FROM `user` WHERE `status`=0";
                $sql=mysqli_query($con,$query);
            ?>
            <div class="dashboard-inactive">
                <div class="dashboard-inactive-data">
                    <h4>Inactive Accounts</h4><br>
                    <h4><?php echo mysqli_num_rows($sql) ?></h4>
                </div>
                <div class="dashboard-inactive-details">
                    <a href="#dashboard-inactiveaccounts">View details</a>
                </div>
            </div>
        </div>
        <div class="control-manager">
            <div class="control-manager-heading">
                <h1>Control Manager</h1>
            </div>
            <div class="control-manager-navigation">
                <ul>
                    <li><a href="#control-manager-profile"><i class="far fa-image"></i> Profile</a></li>
                    <li><a href="#onex"><i class="fas fa-globe-americas"></i> Public Page</a></li>
                    <li><a href="#upload-stream-file"><i class="fas fa-music"></i> Music Files</a></li>
                    <li><a href="#upload-stream-file"><i class="far fa-clock"></i> Schedule</a></li>
                </ul>
            </div>
            <div class="control-manager-profile" id="control-manager-profile">
                <div class="control-manager-profile-heading">
                    <h1>Profile</h1>
                </div>
                <div class="control-manager-profile-content">
                    <div class="live-from-klu">
                        <div class="live-from-klu-heading">
                            <h2>Live Streaming</h2>
                            <div class="listener-count">
                                <p>5</p>
                                <h6><i class="fas fa-headphones-alt"></i> Listeners</h6>
                            </div>
                        </div>
                        <div class="audio-live">
                            <span><i class="fas fa-music"></i> Now Playing</span>
                            <audio id="live" controls controlsList="noplaybackrate">
                                <source src="https://vhostels.s3.amazonaws.com/songs.mp3" type="audio/mpeg">
                            </audio>
                            <button onclick="myTime()">Go live</button>
                            <marquee behavior="scroll" direction="left" scrollamount="3">
                                <p>Top Hits 2021</p>
                            </marquee>
                        </div>
                    </div>
                    <div class="broadcasting-service">
                        <div class="live-from-klu-heading-fake">
                            <h2>Broadcasting Service</h2>
                            <p>KL University</p>
                        </div>
                        <div class="radio-running">
                            <h4>Running...</h4>
                        </div>
                        <a href="#upload-stream-file"><i class="fas fa-cog"></i>Manage</a>
                    </div>
                </div>
                <div class="control-manager-public-page-heading" id="onex">
                    <h1>Public Page</h1>
                </div>
                <div class="public-page-stream">
                    <div class="live-from-klu">
                        <div class="live-from-klu-heading">
                            <h2>Live Streaming</h2>
                            <div class="listener-count">
                                <p>5</p>
                                <h6><i class="fas fa-headphones-alt"></i> Listeners</h6>
                            </div>
                        </div>
                        <div class="audio-live">
                            <span><i class="fas fa-music"></i> Now Playing</span>
                            <marquee behavior="scroll" direction="left" scrollamount="3">
                                <p>Top Hits 2021</p>
                            </marquee>
                            <audio id="liveone" controls controlsList="noplaybackrate">
                                <source src="https://vhostels.s3.amazonaws.com/songs.mp3" type="audio/mpeg">
                            </audio>
                            <button id="play-pause" onclick="changeOne()">Play</button>
                            <button onclick="myTimeOne()">Go live</button>
                        </div>
                    </div>
                </div>
                <div class="control-manager-music-files-heading">
                    <h1>Music Files</h1>
                </div>
                <div class="upload-stream-file" id="upload-stream-file">
                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <input type="file" name="file" id="stream-file" class="stream-file">
                    <input id="Submit" name="submit" type="submit" value="Submit" />
                </form>
                </div>
            </div>
        </div>
        <div class="dashboard-totalaccounts" id="dashboard-totalaccounts">
            <h1>Total Accounts</h1>
        </div>
        <?php
        $query="SELECT * FROM `user` JOIN login_history on user.id=login_history.id;";
        $sql=mysqli_query($con,$query);
        ?>
        <div class="totalaccounts-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID number</th>
                    <th>Phone number</th>
                    <th>No. of logins</th>
                    <th>Created On</th>
                    <th>Last Login</th>
                    <th>Delete</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($sql)) { ?>
                    <tr>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['sid'] ?></td>
                        <td><?php echo $row['mobile'] ?></td>
                        <td><?php echo $row['log_count'] ?></td>
                        <td><?php echo $row['createdOn'] ?></td>
                        <td><?php echo $row['last_login'] ?></td>
                        <td>
                            <?php if((Int)$row['designation']==0){ ?>
                            <form action="admin.php" method="post">
                                <input type="number" name="id" id="id" value="<?php echo $row['id'] ?>" hidden>
                                <input type="submit" name="delete-profile" id="delete-profile" value="Delete">
                            </form>
                            <?php } else {?>
                            <?php echo "Team Member"; }?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </div>
        <div class="dashboard-activeaccounts" id="dashboard-activeaccounts">
            <h1>Active Accounts</h1>
        </div>
        <?php
        $query="SELECT * FROM `user` JOIN `login_history` ON user.id=login_history.id WHERE `status`='1';";
        $sql=mysqli_query($con,$query);
        ?>
        <div class="activeaccounts-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID number</th>
                    <th>Phone number</th>
                    <th>No. of logins</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($sql)){ ?>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['log_count'] ?></td>
                <?php } ?>
            </table>
        </div>
        <?php
        $query="SELECT * FROM `user` JOIN `login_history` ON user.id=login_history.id WHERE `status`='0';";
        $sql=mysqli_query($con,$query);
        ?>
        <div class="dashboard-inactiveaccounts" id="dashboard-inactiveaccounts">
            <h1>Inactive Accounts</h1>
        </div>
        <div class="inactiveaccounts-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID number</th>
                    <th>Phone number</th>
                    <th>No. of logins</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($sql)){ ?>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['email'] ?></td>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['mobile'] ?></td>
                    <td><?php echo $row['log_count'] ?></td>
                <?php } ?>
            </table>
        </div>
        <div class="dashboard-inactiveaccounts" id="dashboard-inactiveaccounts">
            <h1>Grievences</h1>
        </div>
        <div class="activeaccounts-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>ID number</th>
                    <th>Category</th>
                    <th>Message</th>
                </tr>
                
                    <td>xyz</td>
                    <td>example@gmail.com</td>
                    <td>190040000</td>
                    <td>student affairs</td>
                    <td>xyzxyz</td>
            </table>
        </div>
        <div class="all-contact-info" style="position: relative;top: 88vh;margin-top: 0;">
        <div class="print-dashboard">
            <form action="admin.php" method="post">
                <button type="submit" name="download-user-data" id="download-user-data">Print</button>
            </form>
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
    </div>
    <script src="assets/js/script.js"></script>
    <script>
        function print(){
            let form_data = new FormData();
            form_data.append("download-user-data","name");
            var ajax_request = new XMLHttpRequest();
            ajax_request.open('POST','controller.php');
            ajax_request.send(form_data);
            ajax_request.onreadystatechange = function() {
                if(ajax_request.readyState == 4  && ajax_request.status == 200) {
                    console.log(ajax_request.response);
                    console.log("File is Ready");
                    var new_request= new XMLHttpRequest();
                    ajax_request.open('GET','user_data.xls');
                }
            }
        }
    </script>
</body>
</html>