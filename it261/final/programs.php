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

<?php

$sql = "SELECT * FROM programs";

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
?>

<h1 class="page-title"><?php echo $title; ?></h1>
<section class="programs-container">

    <?php

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<div class="card">';
        echo '<div class="image"><img src="'.$row['image_url'].'"></div>';
        echo '<a class="name" href="programs-view.php?id='.$row['id'].'"><b>' . $row['name']. '</b></a>';
        echo '</div>';
    }
}else{
    echo '<h2>Oops Somthing went wrong</h2>';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</section>
<div class="image"><img src=""></div>
<?php
include('./includes/footer.php');

?>