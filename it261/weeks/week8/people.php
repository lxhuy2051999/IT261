<?php

include 'config.php';
include 'includes/header.php';

// for your big database asignment, your header include would go right here
?>
        <main>
        <h1>Welcome to my Poeple Page Class Excercise</h1>

<?php

$sql = "SELECT * FROM people";

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

 
$result = mysqli_query($iConn, $sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));
 

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo '<ul>';
        echo '<li>First Name: <b>' . $row['first_name'] . '</b></li>';
        echo '<li>Last Name: <b>' . $row['last_name'] . '</b></li>';
        echo '<li>Email: <b>' . $row['email'] . '</b></li>';
        echo '</ul>';
        echo '<p>For more information about '.$row['first_name'] . ' '.$row['last_name'].' please click <a href="people-view.php?id='.$row['id'].'">here</a></p>';
    }
}else{
    echo '<p>Houston, we have a problem.</p>';
}

mysqli_free_result($result);
mysqli_close($iConn);

?>
</main>
<aside>

</aside>
</div> <!-- end wrapper -->
<?php
include 'includes/footer.php';
?>