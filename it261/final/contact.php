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
<h1 class="page-title"><?php echo $title; ?></h1>
<section class="contact">

    <?php
include 'includes/form.php';
?>
</section>
<?
include('./includes/footer.php');

?>