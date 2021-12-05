<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Basic Currency Form</title>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="amount">How much money do you have?</label>
            <input type="number" name="amount" id="amount">
            <label for="currency">Choose your currency</label>
            <ul>
                <li>
                    <input type="radio" name="currency" id="currency" value="0.013">Rubles
                </li>
                <li>
                    <input type="radio" name="currency" id="currency" value="0.76">Canadian
                </li>
                <li>
                    <input type="radio" name="currency" id="currency" value="1.28">Pounds
                </li>
                <li>
                    <input type="radio" name="currency" id="currency" value="1.18">Euros
                </li>
                <li>
                    <input type="radio" name="currency" id="currency" value="0.094">Yen
                </li>

            </ul>
            <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'] && $_POST['email'] && $_POST['amount'] && $_POST['currency'])) {
            echo '<p>Please fill in all the fields</p>';
        } elseif (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $dollars = floor($amount * $currency);

            echo <<<_HTML_
            <div class="box">
            <h2>Hello $name</h2>
            <p>You now have $$dollars American dollars and we will send you an email at: <b>$email</b>! </p>
            </div>
            _HTML_;
        }
    }
    ?>
</body>

</html>