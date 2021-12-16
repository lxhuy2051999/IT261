<?php
$variable = 'Life is good!';
if (isset($variable)) {
    echo 'Yippy-skippy!!!';
} else {
    echo 'Not';
}


$today = '';

if (isset($_GET['today'])) {
    $today = $_GET['today'];
} else {
    $today = date('l');
}

$pic = '';
$content = '';
$coffee = '';
$alt = '';

switch ($today) {
    case 'Monday':
        $coffee = '<h2>Our special today is Bun Bo Hue!</h2>';
        $pic =  'bbh.jpg';
        $alt = 'Bun Bo Hue';
        $content = 'It is a hot and spicy beef soup';
        $color = '#ffbf69';
        break;
    case 'Tuesday':
        $coffee = '<h2>Our special today is Pho Bo (Beef Pho)!</h2>';
        $pic =  'pb.jpg';
        $alt = 'Beef pho';
        $content = 'It is a beef noodle soup';
        $color = '#fdffb6';
        break;
    case 'Wednesday':
        $coffee = '<h2>Our special today is Combo Fried Rice!</h2>';
        $pic =  'com_chien.jpg';
        $alt = 'Combo Fried Rice';
        $content = 'Flavorful fried rice with shrimp, vegetables, and asian sausage';
        $color = '#f8edeb';
        break;
    case 'Thursday':
        $coffee = '<h2>Our special today is Xoi Man!</h2>';
        $pic =  'xoi_man.jpg';
        $alt = 'Xoi Man (sticky rice)';
        $content = 'Sticky rice with quail eggs, asian sausage, and fried chicken';
        $color = '#fec89a';
        break;
    case 'Friday':
        $coffee = '<h2>Our special today is Com Tam!</h2>';
        $pic =  'com_tam.jpg';
        $alt = 'Com Tam';
        $content = 'Steamed broken rice with grilled pork, fried eggs, pork skin, and vegetables';
        $color = '#cdeac0';
        break;
    case 'Saturday':
        $coffee = '<h2>Our a special today is Sushi!</h2>';
        $pic =  'sushi.jpg';
        $alt = 'Sushi';
        $content = 'A roll of rice and sea weed with a slice of fresh sea food on top';
        $color = '#faf9f9';
        break;
    case 'Sunday':
        $coffee = '<h2>Our special today is Dumpling</h2>';
        $pic =  'dumpling.jpg';
        $alt = 'Dumpling';
        $content = 'Juicy steamed cake with meat, seafood, and vegetables inside';
        $color = '#fdfcdc';
        break;
}
?>

<style>
    .container {
        background-color: <?php echo $color ?> !important;
    }
</style>

<div class="switch-container fl-col-top fl-gap box-padding">
    <h1>My Wonderful Switch Classwork Exercise!</h1>
    <?php echo $coffee; ?>
    <img src="../images/<?php echo $pic; ?>" alt="<?php echo $alt ?>">
    <p class="w-65 min-w-300 fc-black">
        <?php echo $content; ?>
    </p>
    <h2>Check out our daily Specials</h2>
    <ul>
        <li>
            <a href="switch.php?today=Monday">Monday</a>
        </li>
        <li>
            <a href="switch.php?today=Tuesday">Tuesday</a>
        </li>
        <li>
            <a href="switch.php?today=Wednesday">Wednesday</a>
        </li>
        <li>
            <a href="switch.php?today=Thursday">Thursday</a>
        </li>
        <li>
            <a href="switch.php?today=Friday">Friday</a>
        </li>
        <li>
            <a href="switch.php?today=Saturday">Saturday</a>
        </li>
        <li>
            <a href="switch.php?today=Sunday">Sunday</a>
        </li>
    </ul>
</div>