<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Form </title>

    <style>
        form {
            width: 400px;
            margin: 0 auto;
        }

        fieldset {
            border: 1px solid red;
            padding: 10px;
        }

        label {
            display: block;
            margin: 10px 0 5px 0;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 90%;
        }

        input,
        textarea {
            display: block;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            margin: auto;
        }

        h3 {
            color: red;
            text-align: center;
        }

        .box {
            width: 400px;
            margin: 20px auto;
            padding: 15px;
            background-color: beige;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <fieldset>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname">
            <label for="coffees">How many coffees?</label>
            <input type="number" name="coffees" id="coffees">
            <label for="lattes">Lattes</label>
            <input type="number" name="lattes" id="lattes">
            <label for="caps">Cappuccinos</label>
            <input type="number" name="caps" id="caps">
            <input type="submit" value="Send it!!!">
        </fieldset>
    </form>

    <?php
    if (isset(
        $_POST['fname'],
        $_POST['coffees'],
        $_POST['lattes'],
        $_POST['caps']
    )) {
        $fname = $_POST['fname'];
        $coffees = $_POST['coffees'];
        $int_coffees = intval($coffees);
        $lattes = $_POST['lattes'];
        $int_lattes = intval($lattes);
        $caps = $_POST['caps'];
        $int_caps = intval($caps);

        $total = $int_coffees + $int_lattes + $int_caps;


        if (empty($fname && $int_coffees && $int_lattes && $int_caps)) {
            echo "<h3>Please fill in all fields</h3>";
        } else {
            echo '
            <div class="box">
            <h2>Hello ' . $fname . '</h2>
            <p>You have ordered the followings:</p>
            <ul>
                <li>' . $int_coffees . ' coffees</li>
                <li>' . $int_lattes . ' lattes</li>
                <li>' . $int_caps . ' cappuccinos</li>
            </ul>
            <p>Totaling ' . $total . ' beverages</p>
            </div>
            ';
        }
    }
    ?>

</body>

</html>