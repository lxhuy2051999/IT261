<?php
$first_name = '';
$last_name = '';
$phone = '';
$email = '';
$gender = '';
$regions = '';
$comment = '';
$privacy = '';
$wines = [];
$winesString = '';

$first_name_error ='';
$last_name_error ='';
$phone_error ='';
$email_error ='';
$gender_error ='';
$regions_error = '';
$comment_error = '';
$privacy_error =''; 
$wines_error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    


    if(empty($_POST['first_name'])){
        $first_name_error = 'PLease fill out your first name';
    }else{
        $first_name = trim($_POST['first_name']);
    }

    if(empty($first_name)){
        $last_name_error = 'PLease fill out your last name';
    }else{
        $last_name = trim($_POST['last_name']);
    }

    if(empty($_POST['email'])){
        $email_error = 'PLease fill out your email';
    }else{
        $email = trim($_POST['email']);
    }

    if(empty($_POST['gender'])){
        $gender_error = 'PLease fill out your gender';
    }else{
        $gender = $_POST['gender'];
    }

    if(empty($_POST['wines'])){
        $wines_error = 'Please choose your wines';
    }else{
        $wines = $_POST['wines'];
        $winesString = implode(', ',$_POST['wines']);
    }

    if(empty($_POST['regions'])){
        $regions_error = 'Please select your regions';
    }else{
        $regions = $_POST['regions'];
    }

    if(empty($_POST['privacy'])){
        $privacy_error = 'You MUST agree';
    }
    else{
        $privacy = $_POST['privacy'];
    }

    if(empty($_POST['comment'])){
        $comment_error = 'Please fill out your comment';
    }else{
        $comment = trim($_POST['comment']);
    }

    if(empty($_POST['phone'])) {  // if empty, type in your number
        $phone_error = 'Your phone number please!';
        } elseif(array_key_exists('phone', $_POST)){
        if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
        { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
        $phone_error = 'Invalid format!';
        } else{
        $phone = $_POST['phone'];
        }
        }


    if(isset($_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['email'],
        $_POST['gender'],
        $_POST['regions'],
        $_POST['wines'],
        $_POST['comment'],
        $_POST['privacy'],
        $_POST['phone']
        )){
            $to = 'lxhuy2051999@gmail.com';
            $subject = 'Test mail '. date('Y-m-d');
            $body = <<<EMAIL_BODY
            First name is: $first_name
            Last name is: $last_name
            Phone number: $phone
            Wines: $winesString
            Gender: $gender
            Region: $regions
            Comment: $comment
            EMAIL_BODY;

            $headers = array(
                'From' => 'noreply@huyxuonlieu.com',
                'Reply-to' => ''.$email.''
            );
            mail($to, $subject, $body, $headers);
            header('Location: thx.php');
        }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emailable Form Number 1</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
<fieldset>
    <label for="first_name">First Name</label>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){
        echo htmlspecialchars($_POST['first_name']);
    }?>">
    <span class="error">
        <?php if(isset($first_name_error)){
            echo $first_name_error;
        } ?>
    </span>
    <label for="last_name">Last Name</label>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){
        echo htmlspecialchars($_POST['last_name']);}?>" >
    <span class="error">
        <?php if(isset($last_name_error)){
            echo $last_name_error;
        } ?>
    </span>
    <label for="phone">Phone Number</label>
    <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])){
        echo htmlspecialchars($_POST['phone']);}?>" >
    <span class="error">
        <?php if(isset($phone_error)){
            echo $phone_error;
        } ?>
    </span>
    <label for="email">Email</label>
    <input type="text" name="email" value="<?php if(isset($_POST['email'])){
        echo htmlspecialchars($_POST['email']);}?>" >
    <span class="error">
        <?php if(isset($email_error)){
            echo $email_error;
        } ?>
    </span>
    <label for="gender">Gender</label>
    <ul>
        <li><input type="radio" name="gender" value="female" 
        <?php 
        if(isset($_POST['gender']) && $_POST['gender'] == 'female'){
            echo 'checked';
        }
        ?>
        >Female</li>
        <li>
            <input type="radio" name="gender" value="male" <?php
            if(isset($_POST['gender']) && $_POST['gender'] == 'male'){
                echo 'checked';
            }
            ?>>Male
        </li>
        <li>
            <input type="radio" name="gender" value="other" <?php
            if(isset($_POST['gender']) && $_POST['gender'] == 'other'){
                echo 'checked';
            }
            ?>
            >Other
        </li>
    </ul>
    <span class="error">
    <?php if(isset($gender_error)){
            echo $gender_error;
        } ?>

    </span>
    <label for="wines">Favorite Wines</label>
    <ul>
        <li>
            <input type="checkbox" name="wines[]" value="cab" <?php
            if(isset($_POST['wines']) && in_array('cab', $wines)){
                echo 'checked="checked"';
            }
            ?>>Cabernet
        </li>
        <li>
            <input type="checkbox" name="wines[]" value="merlot" <?php
            if(isset($_POST['wines']) && in_array('merlot', $wines)){
                echo 'checked="checked"';
            }
            ?>>Merlot  
        </li>
        <li>
            <input type="checkbox" name="wines[]" value="syrah" <?php
            if(isset($_POST['wines']) && in_array('syrah', $wines)){
                echo 'checked="checked"';
            }
            ?>>Syrah
        </li>
        <li>
            <input type="checkbox" name="wines[]" value="malbec" <?php
            if(isset($_POST['wines']) && in_array('malbec', $wines)){
                echo 'checked="checked"';
            }
            ?>>Malbec
        </li>
        <li>
            <input type="checkbox" name="wines[]" value="blend" <?php
            if(isset($_POST['wines']) && in_array('blend', $wines)){
                echo 'checked="checked"';
            }
            ?>>Red blend
        </li>

    </ul>
    <span class="error">
    <?php if(isset($wines_error)){
            echo $wines_error;
        } ?>
    </span>
    <label for="regions">Regions</label>
    <select name="regions" id="">
        <option value="" NULL <?php
        if(isset($_POST['regions']) && $_POST['regions'] == NULL){
            echo 'selected="unselected"';
        }
        ?>>Select One</option>
        <option value="nw" <?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'nw'){
            echo 'selected="selected"';
        }
        ?>>Northwest</option>
        <option value="sw"<?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'sw'){
            echo 'selected="selected"';
        }
        ?>>Southwest</option>
        <option value="mw"<?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'mw'){
            echo 'selected="selected"';
        }
        ?>>Midwest</option>
        <option value="ne" <?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'ne'){
            echo 'selected="selected"';
        }
        ?>>Northeast</option>
        <option value="se" <?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'se'){
            echo 'selected="selected"';
        }
        ?>>Southeast</option>
        <option value="so" <?php
        if(isset($_POST['regions']) && $_POST['regions'] == 'so'){
            echo 'selected="selected"';
        }
        ?>>South</option>
    </select>
    <span class="error" >
    <?php if(isset($regions_error)){
            echo $regions_error;
        } ?>
    </span>
    <label for="comments">Comment</label>
    <textarea name="comment"><?php
    if(isset($_POST['comment'])){
        echo htmlspecialchars($_POST['comment']);
    }
    ?></textarea>
    <span class="error">
    <?php if(isset($comment_error)){
            echo $comment_error;
        } ?>
    </span>

    <label for="privacy">Privacy</label>
    <ul>
        <li><input type="radio" name="privacy" value="agree" <?php
        if(isset($_POST['privacy']) && $_POST['privacy'] == 'agree'){
            echo 'checked="checked"';
        }
        ?>>I agree</li>
    </ul>
    <span class="error">
    <?php if(isset($privacy_error)){
            echo $privacy_error;
        } ?>
    </span>
    <input type="submit" value="Send it!">
    <p><a href="">Reset</a></p>
</fieldset>
</form>

</body>
</html>