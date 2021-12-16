<?php
include 'server.php';
include 'includes/header.php';    
?>
    
    <div class="form-wrapper">

    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
    <h1>Register Today!</h1>
        <fieldset>
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" id="first_name" value="<?php if(isset($_POST['first_name'])){
                echo htmlspecialchars($_POST['first_name']);
                        } ?>" />
                <span class="error"><?php
                if(isset($errors['first_name'])){
                    echo $errors['first_name'];
                }
                ?></span>
            </div>

            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" id="last_name" value="<?php if(isset($_POST['last_name'])){
                echo htmlspecialchars($_POST['last_name']);
                        } ?>" />
                <span class="error"><?php
                if(isset($errors['last_name'])){
                    echo $errors['last_name'];
                }
                ?></span>
            </div>


            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])){
                echo htmlspecialchars($_POST['email']);
                        } ?>" />
                <span class="error"><?php
                if(isset($errors['email'])){
                    echo $errors['email'];
                }
                ?></span>
            </div>

            <div class="form-group">
                <label for="username">UserName</label>
                <input type="text" name="username" id="username" value="<?php if(isset($_POST['username'])){
                echo htmlspecialchars($_POST['username']);
                        } ?>" />
                <span class="error"><?php
                if(isset($errors['username'])){
                    echo $errors['username'];
                }
                ?></span>
            </div>
    
            <div class="form-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1" id="password_1" />
                <span class="error"><?php
                if(isset($errors['password_1'])){
                    echo $errors['password_1'];
                }
                ?></span>
            </div>

            <div class="form-group">
                <label for="password_2">Confirm Password</label>
                <input type="password" name="password_2" id="password_2" />
                <span class="error"><?php
                if(isset($errors['password_2'])){
                    echo $errors['password_2'];
                }
                ?></span>
            </div>

            <div class="buttons fl-row-center fl-gap w-100">
                <button type="submit" class="btn" name="reg_user" id="reg_user">Register</button>
                <button type="button"
                    onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>'">Reset</button>
            </div>
            <?php include 'errors.php'; ?>
        </fieldset>
    
    <div class="other-actions">
        <h4>
            Already a member? 
            <a href="login.php">Log in</a>
        </h4>
    </div>
    </form>
    </div>

<?php
include 'includes/footer.php';
?>