<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css" />
    <title><?php echo $title; ?></title>
</head>

<body">
    <div class="container">
        <header>
            <nav>
                <ul class="nav-inner">
                    <!-- <li><a href="index.php" class="fc-black">Home</a></li>
                    <li><a href="./weeks/week3/switch.php" class="fc-black">About</a></li>
                    <li><a href="" class="fc-black">Daily</a></li>
                    <li><a href="" class="fc-black">Project</a></li>
                    <li><a href="" class="fc-black">Contact</a></li>
                    <li><a href="" class="fc-black">Gallery</a></li> -->
                    <?php
                    echo create_nav($nav);
                    ?>
                </ul>
                <div class="nav-action">
                    <?php
                if (!isset($_SESSION['username']) && !isset($_SESSION['success'])) {
                    echo '<a href="login.php" class="btn btn-primary">Login</a>';
                } else {
                    echo '<a href="index.php?logout=\'1\'" class="btn btn-primary">Logout</a>';
                }
                ?>
                </div>
            </nav>
        </header>