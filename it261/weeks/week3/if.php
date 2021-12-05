<?php
$temp = 91;
if ($temp <= 90) {
    echo 'not that hot';
} else {
    echo 'It\'s a scorcher';
}

echo '<br>';
$temp = 84;
if ($temp <= 78) {
    echo 'It is liveable';
} elseif ($temp <= 85) {
    echo 'It\'s getting hotter';
} else {
    echo 'It\'s really hot';
}

echo '<br>';

$sale = 599000;
$salary = 200000;
if ($sale >= 800000) {
    $salary *= 1.1;
    echo $salary;
} elseif ($sale >= 600000) {
    $salary *= 1.05;
    echo $salary;
} else {
    echo $salary;
}
