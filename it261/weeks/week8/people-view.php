<?php

include 'config.php';

if(isset($_GET['id'])){
    $id = intval($_GET['id']);

}else{
    header('location: people.php');
}

$sql = "SELECT * FROM people WHERE id = $id";


$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        $first_name = stripslashes($row['first_name']);
        $last_name = stripslashes($row['last_name']);
        $email = stripslashes($row['email']);
        $birthdate = stripslashes($row['birthdate']);
        $occupation = stripslashes($row['occupation']);
        $description = stripslashes($row['description']);
        $feedback = '';
    }
}else{
    $feedback = '<p>Houston, we have a problem.</p>';
}

include 'includes/header.php';
?>
<main>
<h1>Welcome to <?php echo $first_name; ?>'s page</h1>

<?php
if($feedback == ''){
    echo '<ul>';
    echo '<li><b>First Name:</b> ' . $first_name . '</li>';
    echo '<li><b>Last Name:</b> ' . $last_name . '</li>';
    echo '<li><b>Email:</b> ' . $email . '</li>';
    echo '<li><b>Birthdate:</b> ' . $birthdate . '</li>';
    echo '<li><b>Occupation:</b> ' . $occupation . '</li>';
    echo '</ul>';
    echo '<p>' . $description . '</p>';
    echo '<p>Return back to the <a href="people.php">people page</a></p>';
}



?>
</main>
<aside>
    <?php
    if($feedback == ''){
        echo '<img src="images/people'.$id.'.jpg" alt="$first_name">';
    }
    ?>
    </aside>
</div> <!-- end wrapper -->
<?php
mysqli_free_result($result);
mysqli_close($iConn);
include 'includes/footer.php';
?>