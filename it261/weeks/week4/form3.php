<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 with HTML and CSS</title>

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
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname">
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
            <label for="comment">Comment</label>
            <textarea name="comment" id="comment"></textarea>
            <input type="submit" value="Send it!!!">
        </fieldset>
    </form>

    <?php
    if (isset(
        $_POST['fname'],
        $_POST['lname'],
        $_POST['email'],
        $_POST['comment']
    )) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $comment = $_POST['comment'];


        if (empty($fname && $lname && $email && $comment)) {
            echo "<h3>Please fill in all fields</h3>";
        } else {
            // echo $fname . "<br> run" . $lname . "<br>" . $email . "<br>" . $comment;
            echo '
            <div class="box">
            <ul>
            <li><b>First Name: </b>' . $fname . '</li>
            <li><b>Last Name: </b>' . $lname . '</li>
            <li><b>Email: </b>' . $email . '</li>
            <li><b>Comment: </b>' . $comment . '</li>
            </ul>
            </div>
            ';
        }
    }
    ?>

</body>

</html>