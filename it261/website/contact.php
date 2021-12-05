<?php
include 'config.php';
include('./includes/header.php');
?>
<div class="page-content-wrapper w-100 box-padding fl-col-top h-auto fl-gap">
    <div class="main-wrapper fl-row-wide w-100 fl-gap">
        <main class="fl-col-8 fl-col-top fl-gap box-padding">
            <h1><?php echo $headLine ?></h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum deleniti pariatur tempore labore ad laboriosam reprehenderit veniam animi impedit, deserunt beatae recusandae iusto cumque fugiat, nostrum illum non. Eaque enim alias culpa pariatur vero magni nulla distinctio, quisquam consectetur quam? Veniam, eos in beatae minus architecto itaque quo. Rem vel ex reiciendis perspiciatis. Sed, obcaecati adipisci facilis quam laborum voluptatum optio exercitationem quod consequatur magni illo libero consectetur repellat minus impedit architecto omnis odit voluptatibus veritatis soluta eum corrupti? Cumque?</p>
            <h2>Please fill out our form!</h2>
            <?php
            include 'includes/form.php';
             ?>
        </main>
        <div class="side fl-col-4  fl-col-top box-padding">
            <h3>Our Aside for our Form</h3>
        </div>
    </div>
</div>
<?
include('./includes/footer.php');

?>