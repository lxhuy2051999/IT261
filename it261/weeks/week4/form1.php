<?php

if (isset($_POST['name'], $_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];

    if (empty($_POST['name'] && $_POST['email'])) {
        echo "Please fill in all fields";
    } else {
        echo "$name <br> $email";
    }
} else {
    echo '
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <input type="submit" value="Send it!!!">
    </form>
    ';
}
