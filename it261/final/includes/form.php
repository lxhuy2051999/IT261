<?php
$first_name = '';
$last_name = '';
$phone = '';
$email = '';
$comment = '';
$services = [];

$first_name_error ='';
$last_name_error ='';
$phone_error ='';
$email_error ='';
$comment_error = '';
$services_error = '';
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    


    if(empty($_POST['first_name'])){
        $first_name_error = 'PLease fill out your first name';
    }else{
        $first_name = trim($_POST['first_name']);
    }

    if(empty($_POST['last_name'])){
        $last_name_error = 'PLease fill out your last name';
    }else{
        $last_name = trim($_POST['last_name']);
    }

    if(empty($_POST['email'])){
        $email_error = 'PLease fill out your email';
    }else{
        $email = trim($_POST['email']);
    }


    if(empty($_POST['services'])){
        $services_error = 'Please choose services that you need';
    }else{
        $services = $_POST['services'];
        $winesString = implode(', ',$_POST['services']);
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
        $_POST['services'],
        $_POST['comment'],
        $_POST['phone']
        ) && 
        empty($first_name_error) &&
        empty($last_name_error) &&
        empty($phone_error) &&
        empty($email_error) &&
        empty($comment_error) &&
        empty($services_error)
        ){
            $to = 'lxhuy2051999@gmail.com';
            $subject = 'Test mail '. date('Y-m-d');
            $body = <<<EMAIL_BODY
            First name is: $first_name
            Last name is: $last_name
            Phone number: $phone
            Services: $winesString
            Comment: $comment
            EMAIL_BODY;

            $headers = array(
                'From' => 'Huy@huyxuonlieu.com',
                'Reply-to' => ''.$email.''
            );
            mail($to, $subject, $body, $headers);
            
            $replybody = <<<EMAIL_BODY
            Thank you. Your request has been accepted.
            EMAIL_BODY;
            mail($_POST['email'], 'no reply', $replybody, $headers);
            header('Location: thx.php');
        }

}
?>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <fieldset>
        <div class="form-group">
            <label for="first_name">First Name</label>
            <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])){
                echo htmlspecialchars($_POST['first_name']);
            }?>">
            <span class="error">
                <?php if(isset($first_name_error)){
                    echo $first_name_error;
                } ?>
            </span>
        </div>
        <div class="form-group">
            <label for="last_name">Last Name</label>
            <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])){
                echo htmlspecialchars($_POST['last_name']);}?>">
            <span class="error">
                <?php if(isset($last_name_error)){
                    echo $last_name_error;
                } ?>
            </span>
        </div>
        <div class="form-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])){
                echo htmlspecialchars($_POST['phone']);}?>">
            <span class="error">
                <?php if(isset($phone_error)){
                    echo $phone_error;
                } ?>
            </span>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="<?php if(isset($_POST['email'])){
                echo htmlspecialchars($_POST['email']);}?>">
            <span class="error">
                <?php if(isset($email_error)){
                    echo $email_error;
                } ?>
            </span>
        </div>
        <div class="form-group">
            <label for="services">Slect services that you need</label>
            <ul>
                <li>
                    <label class="input-container">Registry
                        <input type="checkbox" name="services[]" value="registry" <?php
                    if(isset($_POST['services']) && in_array('registry', $services)){
                        echo 'checked="checked"';
                    }
                    ?>>
                        <span class="checkmark"></span>
                    </label>

                </li>
                <li>
                    <label class="input-container">Meet Advisor
                        <input type="checkbox" name="services[]" value="meetadvisor" <?php
                    if(isset($_POST['services']) && in_array('meetadvisor', $services)){
                        echo 'checked="checked"';
                    }
                    ?>>
                        <span class="checkmark"></span>
                    </label>

                </li>
            </ul>
            <span class="error">
                <?php if(isset($services_error)){
                    echo $services_error;
                } ?>
            </span>
        </div>
        <div class="form-group">
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
        </div>
        <input type="submit" value="Send it!">
        <p><a href="">Reset</a></p>
    </fieldset>
</form>