<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

$title = '';
$body = '';
$header = '';
$path = 'home.php';

function create_nav($nav){
    $result = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $result .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        }else{
            $result .= '<li><a href="'.$key.'" class="">'.$value.'</a></li>';
        }
    }

    return $result;
}

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Home page of our IT 261 Website';
        $body = 'home';
        $headLine = 'Welcome to our Home page of our IT261 Website!';
        break;
    case 'about.php':
        $title = 'About page of our IT 261 Website';
        $body = 'about inner';
        $headLine = 'Welcome to our About page of our IT261 Website!';

        break;
    case 'daily.php':
        $title = 'Daily page of our IT 261 Website';
        $body = 'daily inner';
        $headLine = 'Welcome to our Daily page of where my Homework 3 Switch will display!';
        break;
    case 'project.php':
        $title = 'Project page of our IT 261 Website';
        $body = 'project inner';
        $headLine = 'Welcome to our Project page of our IT261 Website!';
        break;
    case 'contact.php':
        $title = 'Contact page of our IT 261 Website';
        $body = 'contact inner';
        $headLine = 'Welcome to our Contact page of our IT261 Website!';
        break;
    case 'gallery.php':
        $title = 'Gallery page of our IT 261 Website';
        $body = 'gallery inner';
        $headLine = 'Welcome to our Gallery page of our IT261 Website!';
        break;
}


$today = '';

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}


function random_pics($photos){
    $photo_count = count($photos);
    $random_photo = rand(0, $photo_count - 1);
    return '<img src="images/'.$photos[$random_photo].'.jpg">';
}

function myError($myFile, $myLine, $errorMsg)
{
    if(defined('DEBUG') && DEBUG)
    {
        echo 'Error in file: <b> '.$myFile.' </b> on line: <b> '.$myLine.' </b>';
        echo 'Error message: <b> '.$errorMsg.'</b>';
        die();
    }  else {
        echo ' Houston, we have a problem!';
        die();
    }
    
    
}
      ?>