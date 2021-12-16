<?php
ob_start();  // prevents header errors before reading the whole page!
define('DEBUG', 'TRUE');  // We want to see our errors

include('credentials.php');

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['programs.php'] = 'Programs';
$nav['!#'] = 'logo';
$nav['contact.php'] = 'Contact';
$nav['student.php'] = 'Student';

$title = '';
$body = '';
$header = '';
$path = 'home.php';

function create_nav($nav){
    $result = '';
    foreach($nav as $key => $value){
        if(THIS_PAGE == $key){
            $result .= '<li><a href="'.$key.'" class="current">'.$value.'</a></li>';
        }elseif($value == 'logo'){
            $result .= '<li><a href="index.php" class="logo"><img src="https://seattlecentral.edu/sites/default/files/2020-07/seattle-central-tigers.png" alt="Seattle Central College\'s logo"></a></li>';

        }
        else{
            $result .= '<li><a href="'.$key.'" class="">'.$value.'</a></li>';
        }
    }

    return $result;
}

switch (THIS_PAGE) {
    case 'index.php':
        $title = 'Seattle Central College';
        $body = 'home';
        break;
    case 'contact.php':
        $title = 'Contact Seattle Central College';
        $body = 'about inner';

        break;
    case 'programs.php':
        $title = 'Programs in Seattle Central College';
        $body = 'programs inner';
        break;
    case 'student.php':
        $title = 'Student in Seattle Central College';
        $body = 'student inner';
        break;
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