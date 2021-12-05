<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/form.css">
    <title>Calculator</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="<?php
                                                            if (isset($_POST['name'])) {
                                                                echo htmlspecialchars($_POST['name']);
                                                            }
                                                            ?>">
            <label for="miles">How many miles are you will be driving?</label>
            <input type="text" name="miles" id="miles" value="<?php
                                                                if (isset($_POST['miles'])) {
                                                                    echo htmlspecialchars($_POST['miles']);
                                                                }
                                                                ?>">
            <label for="drivingHours">How many hour per day would you like to be driving?</label>
            <input type="text" name="drivingHours" id="drivingHours" value="<?php
                                                                            if (isset($_POST['drivingHours'])) {
                                                                                echo htmlspecialchars($_POST['drivingHours']);
                                                                            }
                                                                            ?>">
            <label for="gasPrice">Price per Gallon</label>
            <ul>
                <li>
                    <input type="radio" name="gasPrice" value="3.00" <?php
                                                                        if (isset($_POST['gasPrice']) && $_POST['gasPrice'] == '3.00') {
                                                                            echo 'checked';
                                                                        }
                                                                        ?>>$3.00
                </li>
                <li>
                    <input type="radio" name="gasPrice" value="3.50" <?php
                                                                        if (isset($_POST['gasPrice']) && $_POST['gasPrice'] == '3.50') {
                                                                            echo 'checked';
                                                                        }
                                                                        ?>>$3.50
                </li>
                <li>
                    <input type="radio" name="gasPrice" value="4.00" <?php
                                                                        if (isset($_POST['gasPrice']) && $_POST['gasPrice'] == '4.00') {
                                                                            echo 'checked';
                                                                        }
                                                                        ?>>$4.00
                </li>
            </ul>
            <label for="fuelEfficiency">Fuel Efficiency</label>
            <select name="fuelEfficiency" id="">
                <option value="" NUll>Select a fuel efficiency</option>
                <option value="60" <?php
                                    if (isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == '60') {
                                        echo 'selected';
                                    }
                                    ?>>Great</option>
                <option value="50" <?php
                                    if (isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == '50') {
                                        echo 'selected';
                                    }
                                    ?>>Good</option>
                <option value="40" <?php
                                    if (isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == '40') {
                                        echo 'selected';
                                    }
                                    ?>>Okay</option>
                <option value="30" <?php
                                    if (isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == '30') {
                                        echo 'selected';
                                    }
                                    ?>>Bad</option>
                <option value="20" <?php
                                    if (isset($_POST['fuelEfficiency']) && $_POST['fuelEfficiency'] == '20') {
                                        echo 'selected';
                                    }
                                    ?>>Gas Hungry Monster</option>
            </select>
            <input type="submit" value="Calculate">
            <a href="" class="btn">Reset</a>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $speed = 65;
        $error = false;
        if (empty($_POST['name'])) {
            $error = true;
            echo '<span class="error">Please enter your name</span>';
        }

        //check for valid miles
        if (empty($_POST['miles'])) {
            $error = true;
            echo '<span class="error">Please enter how many miles you will be driving</span>';
        } elseif (floatval($_POST['miles'] <= 0)) {
            $error = true;
            echo '<span class="error">Please enter a positive number of miles</span>';
        }

        //check for valid hours
        if (empty($_POST['drivingHours'])) {
            $error = true;
            echo '<span class="error">Please enter how many hours you will be driving per day</span>';
        } elseif (floatval($_POST['drivingHours'] <= 0)) {
            $error = true;
            echo '<span class="error">Please enter a positive number of hours</span>';
        }

        if (empty($_POST['gasPrice'])) {
            $error = true;
            echo '<span class="error">Please select a gas price</span>';
        }
        if (empty($_POST['fuelEfficiency'])) {
            $error = true;
            echo '<span class="error">Please select a fuel efficiency</span>';
        }
        // if user's input pass all test, then process the data
        elseif ($error == false && isset($_POST['name'], $_POST['miles'], $_POST['drivingHours'], $_POST['gasPrice'], $_POST['fuelEfficiency'])) {
            $name = $_POST['name'];
            $miles = floatval($_POST['miles']);
            $drivingHours = floatval($_POST['drivingHours']);
            $gasPrice = floatval($_POST['gasPrice']);
            $fuelEfficiency = intval($_POST['fuelEfficiency']);
            $gasCost = $miles / $fuelEfficiency * $gasPrice;
            $gasCost = number_format($gasCost, 2);
            $hoursDriven = ceil($miles / $speed);
            $daysDriven = ceil(floatval($hoursDriven) / $drivingHours);
            echo <<<_HTML_
            <div class="box">
                <h2>Calculate Result</h2>
                <p>$name, you will be driving <b>$miles miles</b></p>
                <p>Your vehicle has an efficiency of <b>$fuelEfficiency miles per gallon</b></p>
                <p>Your total cost of gas will be <b>$gasCost dollars</b></p>
                <p>You will be driving for <b>$hoursDriven hours equating to $daysDriven day(s)</b></p>.
            </div>
            _HTML_;
        }
    }

    ?>
</body>

</html>