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

include 'includes/header.php';

if(isset($_SESSION['success'])): ?>
<div class="success">
    <?php echo $_SESSION['success']; 
    unset($_SESSION['success']);
    ?>
    </h3>
</div>
<?php endif;    
if(isset($_SESSION['username'])): ?> 

<div class="welcome-logout">
    <h3>
        Hello <?php echo $_SESSION['username'];?>
    </h3>
    <p><a href="index.php?logout='1'">Log out</a></p>
</div>
<?php endif; ?>
</header>
<div class="wrapper">
    <h1>Welcome to the home page! </h1> 
</div>

<?php 
include 'includes/footer.php';

?>
