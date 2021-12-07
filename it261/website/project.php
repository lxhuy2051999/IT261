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
            <h1><?php echo $headLine ?></h1>
            <div class="card-wrapper fl-col-left w-100 h-auto fl-gap">

                
                <?php

$sql = "SELECT * FROM sharks";

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));


if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<ul class="card fl-col-left">';
        echo '<li>Name: <b>' . ucwords(str_replace('_',' ', $row['name'])) . '</b></li>';
        echo '<li>Size: <b>' . str_replace('_',' ',$row['size']) . '</b></li>';
        echo '<li>Life Span: <b>' . str_replace('_', ' ', $row['life_span']) . '</b></li>';
        echo '<p>For more information about '.ucwords(implode(' ',explode('_',$row['name']))) . '  please click <a class="fc-green" href="project-view.php?id='.$row['id'].'">here</a></p>';
        echo '</ul>';
    }
}else{
    echo '<h2>Oops Somthing went wrong</h2>';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</div>

        </main>
        <div class="side fl-col-4  fl-col-top box-padding">
            <h3>Our Aside for our Project</h3>
        </div>
    </div>
</div>
<?

endif;
include('./includes/footer.php');

?>