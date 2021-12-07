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
    <div class="hero w-100 bg-yellow fl-col-top">
        <?php
        $photos = array(
            'photo1',
            'photo2',
            'photo3',
            'photo4',
            'photo5',
        );
        echo random_pics($photos);
         ?>
        <pre>
            function random_pics($photos){

            }
        </pre>
    </div>
    <div class="main-wrapper fl-row-wide w-100 fl-gap">
        <main class="fl-col-8 bg-green fl-col-top fl-gap box-padding">
            <h1><?php echo $headLine ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum deleniti pariatur tempore labore ad laboriosam reprehenderit veniam animi impedit, deserunt beatae recusandae iusto cumque fugiat, nostrum illum non. Eaque enim alias culpa pariatur vero magni nulla distinctio, quisquam consectetur quam? Veniam, eos in beatae minus architecto itaque quo. Rem vel ex reiciendis perspiciatis. Sed, obcaecati adipisci facilis quam laborum voluptatum optio exercitationem quod consequatur magni illo libero consectetur repellat minus impedit architecto omnis odit voluptatibus veritatis soluta eum corrupti? Cumque?</p>
        </main>
        <div class="side fl-col-4 bg-red"></div>
    </div>
</div>

<?php endif; ?>

<?
include('./includes/footer.php');
?>


