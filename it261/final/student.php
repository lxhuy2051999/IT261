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

//actions ----------------------------------------------------------------
$actions = array();
$actions[0] = array('name' => 'Start Fish', 'icon' => '<i class="fa-solid fa-star"></i>');
$actions[1] = array('name' => 'Cct Link', 'icon' => '<i class="fa-solid fa-link"></i>');
$actions[2] = array('name' => 'Canvas', 'icon' => '<i class="fa-solid fa-chalkboard-user"></i>');
$actions[3] = array('name' => 'My Central', 'icon' => '<i class="fa-solid fa-user"></i>');
$actions[4] = array('name' => 'SCC Login', 'icon' => '<i class="fa-solid fa-pen"></i>');
$actions[5] = array('name' => 'Office 365', 'icon' => '<i class="fa-brands fa-microsoft"></i>');
$actions[6] = array('name' => 'Library', 'icon' => '<i class="fa-solid fa-book"></i>');
$actions[7] = array('name' => 'Calendar', 'icon' => '<i class="fa-solid fa-calendar-days"></i>');
$actions[8] = array('name' => 'Faculty Site', 'icon' => '<i class="fa-solid fa-desktop"></i>');
$actions[9] = array('name' => 'Class Schedule', 'icon' => '<i class="fa-solid fa-calendar-week"></i>');
$actions[10] = array('name' => 'Student Handbook', 'icon' => '<i class="fa-solid fa-book-open"></i>');
$actions[11] = array('name' => 'Hand Shake', 'icon' => '<i class="fa-solid fa-handshake"></i>');
// end actions ----------------------------------------------------------------

function generateActions($actions){
    $html = '';
    foreach($actions as $action){
        $html .= '<a href="!#" class="action">';
        $html .= ''.$action['icon'].'';
        $html .= '<div class="name">'.$action['name'].'</div>';
        $html .= '</a>';
    }
    return $html;
}

?>
<?php if(isset($_SESSION['username'])) : ?>
<?php include('./includes/header.php'); ?>
<h1 class="page-title"><?php echo $title; ?></h1>

<div class="actions-container">
    <?php echo generateActions($actions); ?>
</div>
<?
endif;
include('includes/footer.php');
?>