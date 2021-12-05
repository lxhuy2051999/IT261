<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Celsius Form</title>
</head>

<body>
    <form action="
    <?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
        <fieldset>
            <legend>
                Our Temperature Converter
            </legend>

            <label for="celsius">Enter the temperature in Celsius:</label>
            <input type="number" name="celsius" id="celsius">
            <input type="submit" value="Convert it!">
            <p><a href="">Reset!</a></p>
        </fieldset>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (isset($_POST['celsius'])) {
            $celsius = $_POST['celsius'];
            $fahrenheit = (intval($celsius) * 9 / 5) + 32;
            $fahrenheit = round($fahrenheit);
            $result = '<p>';
            if ($celsius == NULL) {
                echo "<h2>Please fill out your celsius number.</h2>";
            } elseif ($fahrenheit <= 32) {
                $result .= '' . $fahrenheit . ' degrees and it is pretty cold!';
            } elseif ($fahrenheit <= 40) {
                $result .= '' . $fahrenheit . ' degrees and it is not as cold!';
            } elseif ($fahrenheit <= 50) {
                $result .= '' . $fahrenheit . ' degrees and it is getting warmer!';
            } elseif ($fahrenheit <= 60) {
                $result .= '' . $fahrenheit . ' degrees and I\'m liking it!';
            } elseif ($fahrenheit <= 70) {
                $result .= '' . $fahrenheit . ' degrees and I\'m really liking it!';
            } elseif ($fahrenheit <= 80) {
                $result .= '' . $fahrenheit . ' degrees and I\'m going swimming';
            } elseif ($fahrenheit <= 95) {
                $result .= '' . $fahrenheit . ' degrees and it is getting hot';
            } else {
                $result .= 'It is a cooker!';
            }
            $result .= '</p>';
            echo $result;
        }
    }
    ?>
</body>

</html>