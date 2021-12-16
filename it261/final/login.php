<?php
include 'server.php';
include 'includes/header.php';
?>

    <div class="form-wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <h1 class='center'>Login</h1>
            <fieldset>
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username"
                        value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>">
                    <span class="error">
                        <?php if(isset($errors['username_login'])) echo $errors['username_login']; ?>
                    </span>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                    <span class="error">
                        <?php if(isset($errors['password_login'])) echo $errors['password_login']; ?>
                    </span>
                </div>
                <div class="buttons fl-row-center fl-gap w-100">
                    <button type="submit" class="btn" name="login_user" id="login_user">Login</button>
                    <button type="button"
                        onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>'">Reset</button>
                </div>
            </fieldset>
        <div class="other-actions">
            <h4>
                Not a member? 
                <a href="register.php">Register here</a>
            </h4>
        </div>
        </form>
    </div>

<?php
include 'includes/footer.php';
?>