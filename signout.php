<?php
    require_once 'controller.php';
    $id=$_SESSION['id'];
    $query="UPDATE `user` SET `status`=0 WHERE `id`='$id'";
    $sql=mysqli_query($con,$query);
    session_start();
    if(session_destroy()) {
        header("Location: register.php");
    }
?>