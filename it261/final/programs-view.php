<?php
//check if user is logged in
session_start();
include 'config.php';

 if(isset($_SESSION['success'])) {
    unset($_SESSION['success']);
}


if(isset($_GET['id'])){
    $id = intval($_GET['id']);

}else{
    header('location: project.php');
}
// INSERT INTO 'sharks' (name, size, life_span, description) VALUES()

$sql = "SELECT * FROM programs WHERE id = $id";


$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $name = stripslashes($row['name']);
        $image_url = stripslashes($row['image_url']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
}else{
    $feedback = '<p>Oops, something went wrong.</p>';
}

include 'includes/header.php';
if($feedback == ''){
    echo '<div class="program-image">
    <img src="'.$image_url.'">
</div>';
}

    ?>
<h1 class="page-title"><?php echo ucwords(implode(' ',explode('_',$name))); ?> at Seattle Central College</h1>
<div class="detail-container">

    <?php
if($feedback == ''){
    echo '<p class="program-description">' . $description . '</p>';
    echo '<p >Return back to the <a class"return" href="programs.php">Project page</a></p>';
}
?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($iConn);
include 'includes/footer.php';
?>