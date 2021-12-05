<!DOCTYPE html>
<html lang="en">

<head>
    <!-- DOCTYPE is missed -->
    <!-- html should be given a language -->
    <!-- head session misses metas -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>My Adder Assignment</title>

</head>

<body>
    <!-- Wrong opening form tag, it should be <form> -->
    <!-- Form misses method and action-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <fieldset>
            <legend>Adder</legend>
            <!-- Missing opening tag for label-->
            <!-- Warning: label should have attribute "for" -->
            <label for="num1">Enter the first number:</label>
            <!-- Warning: attribute names should contain value with a consistent style -->
            <!--        (num1. num2) or (Num1, Num2)  -->
            <!-- Two inputs' type should be number -->
            <input type="num" name="num1" id="num1"><br>
            <!-- Missing closing tag for label -->
            <!-- Warning: label should have attribute "for" -->
            <!-- Wrong opening label tag, it should be <label> -->
            <label for="num2">Enter the second number:</label>
            <input type="num" name="num2" id="num2"><br>
            <!-- Attribute value of the input misses a ("), That cause other code are treated as a string  -->
            <input type="submit" value="Add Them!!!">
        </fieldset>
    </form>
    <?php
    //adder-wrong.php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['num1'], $_POST['num2'])) {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);

            //check if $num1 and $num2 are null
            // if $num1 and $num2 are number, continue the process
            if ($num1 == NULL || $num2 == NULL) {
                echo "<p>Please enter two numbers</p>";
            } else {
                $myTotal = $num1 + $num2;
                echo '<p>You added ' . $num1 . ' and ' . $num2 . '</p>';
                echo '<p> and the answer is <br> <span style="color:red">' . $myTotal . '</span></p>';
            }
            echo '<p><a href="">Reset page</a></p>';
        }
    }
    ?>
    <!-- NOTICE: I put comments of HTML error before each HTML line to make it is easier to follow-->

    <!-- Closing php tag placed in wrong place -->
    <!-- The end of html tag does not need a ; -->

    <!-- PHP errors -->
    <!-- PHP code should be placed below the form -->
    <!-- error 1: -->
    <!-- if (isset($_POST['num1'])) { -->
    <!-- $_POST['num2'] must be included in function isset-->
    <!--  -->
    <!-- error 2 -->
    <!-- $num1 and $num2 must be assigned with numbers, use intval to get value from input-->
    <!--  -->
    <!-- error 3: -->
    <!-- $myTotal -= $num1 + $Num2; -->
    <!-- $Num2 should be num2 -->
    <!-- ($myTotal =) not ($myTotal -=) -->
    <!--  -->
    <!-- error 4: -->
    <!-- echo '<h2>You added ". $num1 ." and .$num2. '"'; -->
    <!-- the <h2> tag should be replaced with a <p> tag, add a </p> tag to the end of the string -->
    <!-- to get variables' value in a string covered by single quotes, we use '.$variableName.', not ".$variableName." -->
    <!-- missing a single quote before .$num2 -->
    <!-- the last double quote " should be removed -->
    <!--  -->
    <!-- error 5: -->
    <!-- echo ' <p> and the answer is <br>
<style="color:red;">" $myTotal ."!"</p>;-->
    <!-- missing a single quote after </p> -->
    <!-- the tag style cannot be used like that -->
    <!-- $myTotal should be place inside '..' -->
    <!-- $myTotal should be placed inside a <span> tag with attribute color red <span style="color:red">$myTotal</span>-->
    <!--  -->
    <!-- error 6: -->
    <!-- echo '<p><a href="">Reset page</a>' -->
    <!-- missing </p> and ; at the end-->
    <!--  -->
    <!-- Warning -->
    <!-- if user does not enter 2 number then we should not echo the total -->
    <!-- end of PHP errors -->

    <!-- Here is the PHP code after fixing bugs -->
    <!-- if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (isset($_POST['num1'], $_POST['num2'])) {
            $num1 = intval($_POST['num1']);
            $num2 = intval($_POST['num2']);

            // check if $num1 and $num2 are null
            // if $num1 and $num2 are numbers, continue the process
            if ($num1 == NULL || $num2 == NULL) {
                echo "<p>Please enter two numbers</p>";
            } else {
                $myTotal = $num1 + $num2;
                echo '<p>You added ' . $num1 . ' and ' . $num2 . '</p>';
                echo '<p> and the answer is <br> <span style="color:red">' . $myTotal . '</span></p>';
            }
            echo '<p><a href="">Reset page</a></p>';
        }
    } -->

</body>

</html>