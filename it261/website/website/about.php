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
<div class="page-content-wrapper w-100 box-padding fl-col-top h-auto fl-gap">
    <div class="main-wrapper fl-row-wide w-100 fl-gap">
        <main class="fl-col-8 fl-col-top fl-gap box-padding">
            <img src="./images/database.png" alt="A photo of my database" srcset="./images/database.png 2x">
        </main>
        <div class="side fl-col-4  fl-col-top box-padding">
            <h3>Our Aside for our About</h3>
        </div>
    </div>
</div>

<?
endif;
include('./includes/footer.php');
?>