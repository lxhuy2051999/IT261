<?php
//check if user is logged in
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
    // end check
include('./includes/header.php');


if(isset($_GET['id'])){
    $id = intval($_GET['id']);

}else{
    header('location: project.php');
}

// INSERT INTO 'sharks' (name, size, life_span, description) VALUES()

$sql = "SELECT * FROM sharks WHERE id = $id";


$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $name = stripslashes($row['name']);
        $size = stripslashes($row['size']);
        $life_span = stripslashes($row['life_span']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
}else{
    $feedback = '<p>Oops, something went wrong.</p>';
}

include 'includes/header.php';
?>
<main>
<h1>Welcome to <?php echo ucwords(implode(' ',explode('_',$name))); ?>'s page</h1>

<?php
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>Name:</b> ' . $name . '</li>';
    echo '<li><b>Size:</b> ' . $size . '</li>';
    echo '<li><b>Life span:</b> ' . $life_span . '</li>';
    echo '</ul>';
    echo '<p>' . $description . '</p>';
    echo '<p>Return back to the <a href="project.php">Project page</a></p>';
}



?>
</main>
<aside>
    <?php
    if($feedback == ''){
        echo '<img src="images/'.str_replace('shark', '',implode('',explode('_',$name))).'.jpg" alt="'.implode(' ',explode('_',$name)).'">';
    }
    ?>
    </aside>
</div> <!-- end wrapper -->


<?php
mysqli_free_result($result);
mysqli_close($iConn);
endif;
include 'includes/footer.php';
?>