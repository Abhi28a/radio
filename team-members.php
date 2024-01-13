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
    <title>KL Radio - Team members</title>
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
        <div class="total-team" id="total-team">
            <h1>Team members</h1>
        </div>
        <?php 
        $query="SELECT * FROM `team_members`";
        $sql=mysqli_query($con,$query);
        ?>
        <div class="total-team-table">
            <table>
                <tr>
                    <th>Name</th>
                    <th>ID number</th>
                    <th>Branch</th>
                    <th>Team</th>
                    <th>Member Since</th>
                    <th>Remove</th>
                </tr>
                <?php while($row=mysqli_fetch_assoc($sql)){ ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['sid'] ?></td>
                    <td><?php echo $row['branch'] ?></td>
                    <td><?php echo $row['wing'] ?></td>
                    <td><?php echo $row['addedOn'] ?></td>
                    <td>
                        <form action="team-members.php" method="post">
                                <input type="number" name="id" id="id" value="<?php echo $row['id'] ?>" style="display:none;">
                                <input type="submit" name="remove-member" id="remove-member" value="Remove">
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>
        <div class="print-dashboard">
            <form action="admin.php" method="post">
                <button type="submit" name="download-team-data" id="download-team-data">Print</button>
            </form>
        </div>
        <div class="for-queries">
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
            <p>Copyright © 2022 | All rights reserved by @klradio</p>
        </div>
    </div>
    <script src="assets/js/script.js"></script>
</body>
</html>