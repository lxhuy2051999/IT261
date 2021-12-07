<?php
session_start();
include 'config.php';

if(!isset($_SESSION['username'])){
    $_SESSION['msg'] = 'You  must login first';
    header('Location: login.php');
}

if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

 if(isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
?>
<?php if(isset($_SESSION['username'])) : ?>
<?php include('./includes/header.php'); ?>
    <h2>Thank you for your order. I will contact you as soon as possible.</h2>
<?php 
endif ;
include 'footer.php';
?>