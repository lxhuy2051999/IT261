<?php
$a = 20;
$b = 30;
$c = $a + $b;
echo $c . '<br>';

$a = 700;
$b = 330;
$c = $a - $b;
echo $c . '<br>';

$a = 50;
$b = 5;
$c = $a * $b;
echo $c . '<br>';

$money = 100;
$money /= 7;
echo $money . '<br>';

$money = 100;
$money /= 7;
$friendly_money = number_format($money, 2);
echo $friendly_money . '<br>';
$friendly_money = floor($money);
echo $friendly_money . '<br>';
$friendly_money = ceil($money);
echo $friendly_money . '<br>';

$radius = '10';
$pie = 3.14;
$circumference = (2 * $pie) * $radius;
echo '<br>';

$celcius = 22;
$far = ($celcius * 9 / 5) + 32;
$friendly_far = floor($far);
echo '<br>';

echo ' ' . $friendly_far . ' degrees';

$canada = 100;
$canada *= .79;
echo $canada;
echo '<p>I have <b>$' . $canada . '</b> American dollars</p>';

$canada = 12445;
$canada *= .79;
$friendly_canada = ceil($canada);
echo $canada;
echo '<p>I have <b>$' . $canada . '</b> American dollars</p>';


echo ceil(2.1);
