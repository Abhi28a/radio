<?php
    require_once 'controller.php';
    if(!isset($_SESSION['id'])) {
        header("Location: signin.php");
        exit();
    }
?>