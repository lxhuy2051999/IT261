<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Our Currency Form with drop down - select option!</title>
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
            <label for="bank">Please choose your banking institution</label>
            <select name="bank" id="bank">
                <option value="" NULL> Select one</option>
                <option value="BOA"> Bank of American</option>
                <option value="key" NULL>Kyy</option>
                <option value="chase" NULL>Chase</option>
                <option value="BECU" NULL>Boeing Credit Union</option>
                <option value="mattress" NULL>Mattress</option>
            </select>
            <input type="submit" value="Convert it!">
            <p><a href="">Reset</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (empty($_POST['name'])) {
            echo '<span class="error">Please enter your name</span>';
        }
        if (empty($_POST['email'])) {
            echo '<span class="error">Please enter your email</span>';
        }
        if (empty($_POST['amount'])) {
            echo '<span class="error">Please enter your amount</span>';
        }
        if (empty($_POST['currency'])) {
            echo '<span class="error">Please select your currency</span>';
        }
        if ($_POST['bank'] == NULL) {
            echo '<span class="error">Please select your banking institution</span>';
        }

        if (isset($_POST['name'], $_POST['email'], $_POST['amount'], $_POST['currency'], $_POST['bank'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $amount = floatval($_POST['amount']);
            $currency = floatval($_POST['currency']);
            $bank = $_POST['bank'];
            $total = floor($amount * $currency);

            echo <<<_HTML_
            <div class="box">
            <h2> Hello $name!</h2>
            <p> You now have $$amount American dollars, and it will be deposited in <b>$bank</b>. We will email you at <b>$email</b> in  the next 24 hours!</p>
            </div>
            _HTML_;
        }
    }
    ?>
</body>

</html>