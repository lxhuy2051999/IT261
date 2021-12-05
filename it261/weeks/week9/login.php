<?php

include 'server.php';
include 'includes/header-form.php';
?>

<div class="wrapper">
    <h1 class='center'>Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <fieldset>
            <label for="username">Username</label>
            <input type="text" name="username" id="username"
                value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <button type="submit" class="btn" name="login_user" id="login_user">Login</button>
            <button type="button"
                onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'">Reset</button>

            <?php
            include 'errors.php';
    
            ?>
        </fieldset>
    </form>
    <h3>
        Not a member?
    </h3>
    <span class="block">
        <a href="register.php">Register here</a>
    </span>
</div>
</body>

</html>