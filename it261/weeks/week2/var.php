<?php

$name = "Huy";
$weather = "today is a rainy day";
$body_temp = 37.2;


echo $name;
echo '<br>';
echo 'My name is $name';
echo '<br>';
echo "My name is $name";
echo '<br>';
echo 'My name is ' . $name . '';
echo '<br>';
echo $weather;
echo '<br>';
echo $body_temp;
echo '<br>';
echo 'The normal body temperature is ' . $body_temp . ' and all is well';
echo '<br>';
$name = 'Huy Lieu';
echo $name;
echo '<br>';

$x = 20;
$y = 5;
echo $x;
echo '<br>';
$z = $x * $y;
echo '<br>';
echo $z;


$first_name = "Huy";
$last_name = "Lieu";

echo '<br>';
echo $first_name . ' ' . $last_name;
echo '<br>';
echo 'Here are the name with single quote! ' . $first_name . ' ' . $last_name . '';
echo '<br>';
echo "Here are the name with a double quote! $first_name $last_name";


$x = 20;
$x *= 2;
echo $x;

$x = 120;
$x *= .09;
echo $x;

$x = 137;
$x /= 4;
$friendly_x = number_format($x, 0);
echo $friendly_x;

echo date('Y');
echo '<br>';
echo date('l');

$fruit[] = 'orange';
$fruit[] = 'banana';
$fruit[] = 'grapes';
$fruit[] = 'apples';
$fruit[] = 'cherries';


$fruit = array(
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
);

echo '<br>';
echo $fruit[3];
$fruit = [
    'orange',
    'banana',
    'grapes',
    'apples',
    'cherries'
];

echo $fruit;
echo '<br>';
print_r($fruit);
var_dump($fruit);

$nav[] = 'Home';
$nav[] = 'About';
$nav[] = 'Daily';
$nav[] = 'Contact';
$nav[] = 'Gallery';

echo '<br>';
echo $nav[0];
echo '<br>';

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

$nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
);

echo '<br>';
echo '<pre>';
var_dump($nav);
echo '</pre>';
echo '<br>';

$show = 'The Crown';
$show_actor = 'Olivia Colman';
$show_genre = 'Historical Fiction';

echo 'My favorite series during 2020 was "' . $show . '" starring, ' . $show_actor . ' and it is a ' . $show_genre . ' ';
