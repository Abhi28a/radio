<?php
    require_once 'controller.php';
    if(!isset($_SESSION['admin'])) {
        header("Location: signin.php");
        exit();
    }
?>