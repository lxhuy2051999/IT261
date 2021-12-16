<?php
session_start();
include 'config.php';
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('Location: login.php');
}

 if(isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}
?>
<?php include('./includes/header.php'); ?>
<h1 class="thank">Thank you for your order. I will contact you as soon as possible.</h1>

<?
include('./includes/footer.php');

?>