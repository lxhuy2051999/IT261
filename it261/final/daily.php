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
if(isset($_SESSION['username'])) : 
include('./includes/header.php');

include('includes/daily.php');

endif;
include('includes/footer.php');
?>
