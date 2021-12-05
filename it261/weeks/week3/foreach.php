<?php
$show = array(
    'Name' => 'Handmaid\'s Tale',
    'Actor' => 'Elizabeth Moss',
    'Genre' => 'Drama',
    'Author' => 'Margaret Atwood',
    'Year' => '1987'
);

$show['Name'] = 'Handmaid\'s Tale';
$show['Actor'] = 'Elizabeth Moss';
$show['Genre'] = 'Drama';
$show['Author'] = 'Margaret Atwood';

foreach ($show as $key => $value) {
    echo '<br> ' . $key . '<br> ' . $value . ' <br>';
}

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

foreach ($nav as $key => $value) {
    echo '<br> ' . $key . '<br> ' . $value . ' <br>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For each loop</title>

    <style>
        #wrapper {
            width: 500px;
            margin: 20px auto;
        }

        nav a {
            color: red !important;
            font-weight: bold;
            text-decoration: none;
            font-style: 1.2em;
            font-family: Verdana, Arial, sans-serif;
        }
    </style>
</head>

<body>
    <div id="wrapper">
        <h1>Our Foreach loops</h1>
        <h2>Handmaid's Tale</h2>
        <ul>
            <?php
            foreach ($show as $key => $value) {
                echo '<li><b> ' . $key . '</b> ' . $value . ' </li>';
            }
            ?>
        </ul>
        <h2>Our Navigation</h2>
        <nav>
            <ul>
                <?php
                foreach ($nav as $key => $value) {
                    echo '<li><a href=" ' . $key . '"> ' . $value . ' </li>';
                }
                ?>
            </ul>
        </nav>
    </div>
</body>

</html>