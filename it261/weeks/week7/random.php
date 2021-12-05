<?php 
$dice = rand(1,6);
echo $dice;
echo '</br>';

$dice1 = rand(1,6);
$dice2 = rand(1,6);

echo $dice1;
echo '</br>';
echo $dice2;
echo '</br>';


if($dice1 == $dice2){
    echo 'I won';
}
else{
    echo 'I did not win';
}

$i= rand(1,20);
echo '</br>';
echo $i;

$photos = array(
    'photo1',
    'photo2',
    'photo3',
    'photo4',
    'photo5',
);

$i = rand(0,4);
$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'">';
