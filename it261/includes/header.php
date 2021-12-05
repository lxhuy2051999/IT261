<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/layout.css" />
    <title><?php echo $title; ?></title>
</head>

<body class="<?php echo $body; ?>">
    <div class="container fl-col-top bg-white over-fl-x-hi">
        <header class="fl-row-wide hori-padding fl-gap  bg-white">
            <a href="index.php" class="fl-col-2 h-100 fl-col-left">
                <img class="h-80" src="./images/logo.svg" alt="a logo whose shape is a combination of a cat and a letter H">
            </a>
            <nav class="fl-row-wide fl-col-5 fc-black">
                <ul class="fl-row-wide full-size fl-gap fc-black">
                    <li><a href="index.php" class="fc-black">Home</a></li>
                    <li><a href="website/daily.php" class="fc-black">Switch</a></li>
                    <li><a href="troubleshoot.php" class="fc-black">TroublesShoot</a></li>
                    <li><a href="website/calculator.php" class="fc-black">Calculator</a></li>
                    <li><a href="website/gallery.php" class="fc-black">Gallery</a></li>
                    <li><a href="website/database.php" class="fc-black">Database</a></li>

                </ul>
            </nav>
        </header>