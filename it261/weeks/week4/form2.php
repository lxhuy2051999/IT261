<?php

if (isset($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['comment'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    if (empty($_POST['fname'] && $_POST['lname'] && $_POST['email'] && $_POST['comment'])) {
        echo "Please fill in all fields";
    } else {
        echo "$fname <br> $lname <br>  $email <br> $comment";
    }
} else {
    echo '
    <form action="" method="post">
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname">
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="comment"> Comment:</label>
        <textarea name="comment" id="comment"></textarea>
        <input type="submit" value="Send it!!!">
    </form>
    ';
}
