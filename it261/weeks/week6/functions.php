<?php
function sayHello(){
    echo "Hello";
}

sayHello();
echo '<br>';

function sayHello2($name){
    echo "Hello $name";
}

sayHello2('Huy');
echo '<br>';
sayHello2('Lieu');
echo '<br>';

function sayHello3($name, $age){
    echo "Hello $name, you are $age years old";
}

sayHello3('Huy', 22);
echo '<br>';

function cube($n){
    $cube = pow($n, 3);
    echo $cube;
}

cube(5);
echo '<br>';

function celsius_converter($temp){
    $celsius = ($temp * 9/5) + 32;
    echo $celsius;
}

$far = celsius_converter(15);
echo $far. '<br>';

//function calculate area volume
function area($length, $width, $height){
    $area = $length * $width;
    $vol = $length * $width * $height;
    return array($area, $vol);
}

list($my_area, $my_volume) = area(10, 20, 30);
echo '<b>Area</b>: ' .$my_area. '<br>';
echo '<b>Volume</b>: ' .$my_volume. '<br>';