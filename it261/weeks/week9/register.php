<?php
include 'server.php';
include 'includes/header-form.php';    
?>
<div class="wrapper">
    
    <h1>Register Today!</h1>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <fieldset>
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" id="first_name" value="<?php if(isset($_POST['first_name'])){
            echo htmlspecialchars($_POST['first_name']);
        } ?>" />
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" id="last_name" value="<?php if(isset($_POST['last_name'])){
            echo htmlspecialchars($_POST['last_name']);
        } ?>" />
            <label for="email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])){
            echo htmlspecialchars($_POST['email']);
        } ?>" />
            <label for="username">UserName</label>
            <input type="text" name="username" id="username" value="<?php if(isset($_POST['user_name'])){
            echo htmlspecialchars($_POST['user_name']);
        } ?>" />
    
            <label for="password_1">Password</label>
            <input type="password" name="password_1" id="password_1" />
            <label for="password_2">Confirm Password</label>
            <input type="password" name="password_2" id="password_2" />
            <button type="submit" name="reg_user" >Register</button>
            <button type="button"
                onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
            <?php include 'errors.php'; ?>
        </fieldset>
    
    </form>

    <h3>
        Already a member?
    </h3>
    <span class="block">
        <a href="login.php">Log in</a>
    </span>
</div>

</body>
</html>